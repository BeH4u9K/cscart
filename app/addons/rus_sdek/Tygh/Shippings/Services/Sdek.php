<?php
/***************************************************************************
 *                                                                          *
 *   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
 *                                                                          *
 * This  is  commercial  software,  only  users  who have purchased a valid *
 * license  and  accept  to the terms of the  License Agreement can install *
 * and use this program.                                                    *
 *                                                                          *
 ****************************************************************************
 * PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
 * "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
 ****************************************************************************/

namespace Tygh\Shippings\Services;

use Tygh\Enum\Addons\RusSdek\DeliveryPointType;
use Tygh\Enum\YesNo;
use Tygh\Tygh;
use Tygh\Http;
use Tygh\Registry;
use Tygh\Shippings\RusSdek;
use Tygh\Shippings\IService;
use Tygh\Shippings\IPickupService;

/**
 * Sdek shipping service
 */
class Sdek implements IService, IPickupService
{
    /**
     * Abailability multithreading in this module
     *
     * @var bool $_allow_multithreading
     */
    private $_allow_multithreading = false;

    /**
     * @var string Access token
     */
    private $access_token;

    /**
     * The currency in which the carrier calculates shipping costs.
     *
     * @var string $calculation_currency
     */
    public $calculation_currency = 'RUB';

    /** @var array $shipping_info Shipping data */
    protected $shipping_info;

    /**
     * Stack for errors occured during the preparing rates process
     *
     * @var array $_error_stack
     */
    private $_error_stack = array();

    protected static $_error_descriptions = array(
        '0' => 'Внутренняя ошибка на сервере. Обратитесь к программистам компании СДЭК для исправления',
        '1' => 'Указанная вами версия API не поддерживается',
        '2' => 'Ошибка авторизации',
        '3' => 'Невозможно осуществить доставку по этому направлению при заданных условиях',
        '4' => 'Ошибка при указании параметров места ',
        '5' => 'Не задано ни одного места для отправления',
        '6' => 'Не задан тариф или список тарифов',
        '7' => 'Не задан город-отправитель',
        '8' => 'Не задан город-получатель',
        '9' => 'При авторизации не задана дата планируемой отправки',
        '10' => 'Ошибка задания режима доставки',
        '11' => 'Неправильно задан формат данных',
        '12' => 'Ошибка декодирования данных. Ожидается <json или jsop>',
        '13' => 'Почтовый индекс города-отправителя отсутствует в базе СДЭК',
        '14' => 'Невозможно однозначно идентифицировать город-отправитель по почтовому индексу',
        '15' => 'Почтовый индекс города-получателя отсутствует в базе СДЭК',
        '16' => 'Невозможно однозначно идентифицировать город-получатель по почтовому индексу',
    );

    /**
     * Current Company id environment
     *
     * @var int $company_id
     */
    public $company_id = 0;

    public $city_id;

    /** @var array<array<string, float|int|string>> $goods */
    public $goods = [];


    /**
     * Updates the access token if necessary
     *
     * @return void
     */
    protected function getAccessToken()
    {
        if (!empty($this->access_token)) {
            return;
        }

        $shipping_settings = $this->shipping_info['service_params'];

        $params = [
            'grant_type' => 'client_credentials',
            'client_id' => $shipping_settings['authlogin'],
            'client_secret' => $shipping_settings['authpassword'],
        ];

        $extra = [
            'headers' => [
                'Content-type'  => 'application/x-www-form-urlencoded',
            ],
        ];

        $url = 'https://api.cdek.ru/v2/oauth/token?parameters';

        $response = Http::post($url, $params, $extra);
        $data = json_decode($response, true);
        if (empty($data['access_token'])) {
            return;
        }

        $this->access_token = $data['access_token'];
    }

    /**
     * Provides content of Access Request.
     *
     * @return array<array-key, string> Access Request
     */
    private function getAccessRequest(): array
    {
        $this->getAccessToken();

        return [
            'Authorization: Bearer ' . $this->access_token,
            'Content-Type: application/json',
        ];
    }

    /**
     * Returns shipping service information
     * @return array information
     */
    public static function getInfo()
    {
        return [
            'name'         => __('carrier_sdek'),
            'tracking_url' => 'https://www.cdek.ru/ru/tracking?order_id=%s',
        ];
    }

    public function prepareAddress($address)
    {
    }

    /**
     * @inheritdoc
     */
    public function getPickupMinCost()
    {
        $shipping_data = $this->getStoredShippingData();
        return isset($shipping_data['cost']) ? $shipping_data['cost'] : false;
    }

    /**
     * @inheritdoc
     */
    public function getPickupPoints()
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public function getPickupPointsQuantity()
    {
        $shipping_data = $this->getStoredShippingData();
        return isset($shipping_data['offices']) ? count($shipping_data['offices']) : false;
    }

    /**
     * Checks if shipping service allows to use multithreading
     *
     * @return bool true if allow
     */
    public function allowMultithreading()
    {
        return $this->_allow_multithreading;
    }

    /**
     * Sets data to internal class variable
     *
     * @param array $shipping_info
     */
    public function prepareData($shipping_info)
    {
        $this->shipping_info = $shipping_info;
        $this->company_id = Registry::get('runtime.company_id');

        $symbol_grams = Registry::get('settings.General.weight_symbol_grams');
        $weight_data = fn_convert_weight_to_imperial_units($this->shipping_info['package_info']['W']);
        $shipping_settings = $this->shipping_info['service_params'];

        $weight = $weight_data['plain'] * $symbol_grams;
        $length = !empty($shipping_settings['length']) ? $shipping_settings['length'] : SDEK_DEFAULT_DIMENSIONS;
        $width = !empty($shipping_settings['width']) ? $shipping_settings['width'] : SDEK_DEFAULT_DIMENSIONS;
        $height = !empty($shipping_settings['height']) ? $shipping_settings['height'] : SDEK_DEFAULT_DIMENSIONS;

        $params_product = [];
        if (!empty($this->shipping_info['package_info']['packages'])) {
            $packages = $this->shipping_info['package_info']['packages'];
            $packages_count = count($packages);

            if ($packages_count > 0) {
                foreach ($packages as $id => $package) {
                    $weight_ar = fn_convert_weight_to_imperial_units($package['weight']);

                    if (!empty($_REQUEST['order_id'])) {
                        $weight = 0;

                        foreach ($package['products'] as $cart_id => $amount) {
                            $product_weight = 0;
                            $d_product = db_get_row('SELECT product_id, extra FROM ?:order_details WHERE item_id = ?i AND order_id = ?i', $cart_id, $_REQUEST['order_id']);
                            $extra = @unserialize($d_product['extra']);

                            if (!empty($extra['product_options_value'])) {
                                $product_options = array();
                                foreach ($extra['product_options_value'] as $_options) {
                                    $product_options[$_options['option_id']] = $_options['value'];
                                }

                                $product_weight = fn_apply_options_modifiers($product_options, $product_weight, 'W');
                            } else {
                                $product_weight = db_get_field('SELECT weight FROM ?:products WHERE product_id = ?i',
                                    $d_product['product_id']);
                            }

                            $product_weight = fn_sdek_check_weight($product_weight, $symbol_grams);

                            $product_weight_g = $product_weight * $symbol_grams;

                            $weight += $product_weight_g * $amount;
                        }

                        if (empty($weight) && !empty($weight_ar['plain'])) {
                            $weight = $weight_ar['plain'] * $symbol_grams;

                        } elseif (empty($weight)) {
                            $weight = 100;
                        }
                    } else {
                        $weight = $weight_ar['plain'] * $symbol_grams;
                    }

                    $package_length = empty($package['shipping_params']['box_length']) ? $length : $package['shipping_params']['box_length'];
                    $package_width = empty($package['shipping_params']['box_width']) ? $width : $package['shipping_params']['box_width'];
                    $package_height = empty($package['shipping_params']['box_height']) ? $height : $package['shipping_params']['box_height'];

                    $params_product[$id]['weight'] = $weight;
                    $params_product[$id]['length'] = $package_length;
                    $params_product[$id]['width'] = $package_width;
                    $params_product[$id]['height'] = $package_height;
                }
            } else {
                $params_product['weight'] = $weight;
                $params_product['length'] = $length;
                $params_product['width'] = $width;
                $params_product['height'] = $height;
                $params_product = array ($params_product);
            }
        } else {
            $params_product['weight'] = $weight;
            $params_product['length'] = $length;
            $params_product['width'] = $width;
            $params_product['height'] = $height;
            $params_product = array ($params_product);
        }
        $this->goods = $params_product;
    }

    /**
     * Prepare request information
     *
     * @return array<string, string>
     */
    public function getRequestData()
    {
        static $request_data = null;

        $shipping_settings = $this->shipping_info['service_params'];
        $location = $this->shipping_info['package_info']['location'];

        $module = $this->shipping_info['module'];
        if (!empty($this->shipping_info['shipping_id'])) {
            $data_shipping = fn_get_shipping_info($this->shipping_info['shipping_id'], DESCR_SL);
            $module = db_get_field('SELECT module FROM ?:shipping_services WHERE service_id = ?i', $data_shipping['service_id']);
        }

        if ($module !== 'sdek') {
            return $request_data;
        }

        $this->city_id = $_code = RusSdek::cityId($location);
        $_code_sender = $shipping_settings['from_city_id'];

        $url = 'https://api.cdek.ru/v2/calculator/tariff';

        $post = [];

        if (!empty($shipping_settings['dateexecute'])) {
            $timestamp = TIME + $shipping_settings['dateexecute'] * SECONDS_IN_DAY;
            $dateexecute = date(DATE_ISO8601, $timestamp);
        } else {
            $dateexecute = date(DATE_ISO8601);
        }

        $post['date'] = $dateexecute;
        $post['from_location'] = [
            'code' => (int) $_code_sender
        ];
        $post['to_location'] = [
            'code' => (int) $_code
        ];
        $post['tariff_code'] = $shipping_settings['tariffid'];

        $post['packages'] = $this->goods;

        $request_data = array(
            'method' => 'post',
            'url' => $url,
            'data' => json_encode($post),
        );

        return $request_data;
    }

    /**
     * Process simple request to shipping service server
     *
     * @return string Server response
     */
    public function getSimpleRates()
    {
        $response = [];
        $data = $this->getRequestData();

        if (!empty($data)) {
            $key = md5($data['data']);
            $sdek_data = fn_get_session_data($key);

            if (empty($sdek_data)) {
                $extra = [
                    'headers' => $this->getAccessRequest(),
                    'timeout' => SDEK_TIMEOUT,
                    'log_preprocessor' => '\Tygh\Http::unescapeJsonResponse'
                ];

                $response = Http::post($data['url'], $data['data'], $extra);
                fn_set_session_data($key, $response);
            } else {
                $response = $sdek_data;
            }
        }

        return $response;
    }

     /**
     * Gets shipping cost and information about possible errors
     *
     * @param  string $resonse Reponse from Shipping service server
     * @return array  Shipping cost and errors
     */
    public function processResponse($response)
    {
        $return = [
            'cost' => false,
            'error' => false,
        ];

        if (!empty($response)) {
            $result = json_decode($response);
            $result_array = json_decode(json_encode($result), true);

            if (empty($this->_error_stack) && !empty($result_array)) {
                $rates = $this->_getRates($result_array);

                if (empty($rates)) {
                    $return['error'] = __('rus_sdek.no_postamat_available');
                    return $return;
                }
                $this->storeShippingData($rates);

                if (!empty($rates['price'])) {
                    $return['cost'] = $rates['price'];

                    if (!empty($rates['date'])) {
                        $return['delivery_time'] = $rates['date'];
                    }
                } else {
                    $this->_internalError(__('xml_error'));
                    $return['error'] = $this->processErrors($result_array);
                }

            } else {
                $return['error'] = $this->processErrors($result_array);
                $this->storeShippingData(array('clear' => true));
            }
        }

        return $return;
    }

    private function _getRates($response)
    {
        $rates = array();
        $sdek_delivery = fn_get_schema('sdek', 'sdek_delivery', 'php', true);
        if (!empty($response['total_sum'])) {
            $rates['price'] = $response['total_sum'];
            if (!empty($response['period_min']) && !empty($response['period_max'])) {
                $plus = $this->shipping_info['service_params']['dateexecute'];
                $min_time = $plus + $response['period_min'];
                $max_time = $plus + $response['period_max'];
                if ($min_time == $max_time) {
                    $date = $min_time . ' ' . __('days');
                } else {
                    $date = $min_time . '-' . $max_time . ' ' . __('days');
                }
                if (!empty($date)) {
                    $rates['date'] = $date;
                }
            }

            $rec_city_code = $this->city_id;
            $tarif_id = $this->shipping_info['service_params']['tariffid'];
            if (!empty($rec_city_code) && (!empty($sdek_delivery[$tarif_id]['terminals']) && YesNo::toBool($sdek_delivery[$tarif_id]['terminals']))) {
                $params = [
                    'cityid' => $rec_city_code
                ];
                if (!empty($sdek_delivery[$tarif_id]['postamat'])) {
                    $params['type'] = DeliveryPointType::POSTAMAT;
                } else {
                    $params['type'] = DeliveryPointType::PVZ;
                }

                $offices = RusSdek::pvzOffices($params);
                if ($params['type'] === DeliveryPointType::POSTAMAT) {
                    $offices = RusSdek::filterOffices($offices, $this->goods);
                }
                if (!empty($offices)) {
                    $rates['offices'] = $offices;
                } else {
                    if ($params['type'] === DeliveryPointType::POSTAMAT) {
                        return [];
                    }
                    $rates['clear'] = true;
                }
            }
        }

        return $rates;
    }

    /**
     * Saves shipping data to session
     *
     * @param array $rates Rates data
     *
     * @return bool
     */
    protected function storeShippingData($rates = [])
    {
        $offices = [];
        $select_office = '';
        $shipping_info = $this->shipping_info;

        if (isset($shipping_info['keys']['group_key']) && !empty($shipping_info['keys']['shipping_id'])) {
            $group_key = $shipping_info['keys']['group_key'];
            $shipping_id = $shipping_info['keys']['shipping_id'];

            if (!empty(Tygh::$app['session']['cart']['select_office'][$group_key][$shipping_id])) {
                $select_office = Tygh::$app['session']['cart']['select_office'][$group_key][$shipping_id];
            }

            if (!empty($rates['offices'])) {
                if (!empty($rates['offices'][$select_office])) {
                    $offices[$select_office] = $rates['offices'][$select_office];

                    foreach ($rates['offices'] as $office) {
                        if ($select_office != $office['Code']) {
                            $offices[$office['Code']] = $office;
                        }
                    }
                } else {
                    $offices = $rates['offices'];
                }

                Tygh::$app['session']['cart']['shippings_extra']['data'][$group_key][$shipping_id]['offices'] = $offices;
                Tygh::$app['session']['cart']['shippings_extra']['data'][$group_key][$shipping_id]['sdek_offices'] = array_slice($offices, 0, 6);
            }

            if (!empty($rates['date'])) {
                Tygh::$app['session']['cart']['shippings_extra']['data'][$group_key][$shipping_id]['delivery_time'] = $rates['date'];
            }
            if (!empty($rates['price'])) {
                Tygh::$app['session']['cart']['shippings_extra']['data'][$group_key][$shipping_id]['cost'] = $rates['price'];
            }
            if (!empty($rates['clear'])) {
                unset(Tygh::$app['session']['cart']['shippings_extra']['data'][$group_key][$shipping_id]['offices']);
            }
        }

        return true;
    }

    /**
     * Gets error message from shipping service server
     *
     * @param  string $resonse Reponse from Shipping service server
     * @return string Text of error or false if no errors
     */
    public function processErrors($result_array)
    {
        // Parse JSON message returned by the sdek post server.
        $return = false;

        if (!empty($result_array['error'])) {
            if (!empty($result_array['error'][0]['code'])) {
                $status_code = $result_array['error'][0]['code'];
                if (empty($result_array['error'][0]['text'])) {
                    $return = !empty(self::$_error_descriptions[$status_code]) ? self::$_error_descriptions[$status_code] : __("shipping.sdek.error_calculate");
                } else {
                    $return = $result_array['error'][0]['text'];
                }
            }
        }

        if (!empty($this->_error_stack)) {
            foreach ($this->_error_stack as $error) {
                $return .= '; ' . $error;
            }
        }

        return $return;
    }

    /**
     * Fetches stored data from session
     *
     * @return array
     */
    protected function getStoredShippingData()
    {
        $group_key = isset($this->shipping_info['keys']['group_key']) ? $this->shipping_info['keys']['group_key'] : 0;
        $shipping_id = isset($this->shipping_info['keys']['shipping_id']) ? $this->shipping_info['keys']['shipping_id'] : 0;
        if (isset(Tygh::$app['session']['cart']['shippings_extra']['data'][$group_key][$shipping_id])) {
            return Tygh::$app['session']['cart']['shippings_extra']['data'][$group_key][$shipping_id];
        }

        return [];
    }

    /**
     * Collects errors during preparing and processing request
     *
     * @param string $error
     */
    private function _internalError($error)
    {
        $this->_error_stack[] = $error;
    }
}
