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

defined('BOOTSTRAP') or die('Access denied');

if ($mode === 'configure') {
    if (!empty($_REQUEST['shipping_id'])) {
        $module = !empty($_REQUEST['module']) ? $_REQUEST['module'] : '';
        $states = fn_get_all_states();

        if ($module === 'sdek2') {
            $sdek_delivery = fn_get_schema('sdek', 'sdek_delivery', 'php', true);

            Tygh::$app['view']->assign('sdek_delivery', $sdek_delivery);
            Tygh::$app['view']->assign('states', $states);
        }
    }
}
