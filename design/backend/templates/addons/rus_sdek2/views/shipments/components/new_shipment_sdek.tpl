{script src="js/tygh/tabs.js"}
{script src="js/lib/maskedinput/jquery.maskedinput.min.js"}
{script src="js/lib/inputmask/jquery.inputmask.min.js"}
{script src="js/addons/rus_sdek2/sdek.js"}

{assign var="shipment_id" value=$shipment.shipment_id}
{assign var="register_id" value=0}
{assign var="id" value=$shipment.shipment_id}

{if $data_shipments.$shipment_id.register_id}
    {assign var="register_id" value=$data_shipments.$shipment_id.register_id}
{/if}

{if $smarty.request.selected_section}
    {assign var="active_tab" value=$smarty.request.selected_section}
{else}
    {assign var="active_tab" value='tab_general_`$id`'}
{/if}
{$tabs_count = 3}

<div id="content_group{$id}">
{if $data_shipments.$shipment_id}
    {assign var="data_shipment" value=$data_shipments.$shipment_id}

    <form action="{""|fn_url}" method="post" name="sdek_form_{$id}" class="form-horizontal form-edit cm-disable-empty-files">
        {if !$in_popup}
            <input type="hidden" name="selected_section" id="selected_section" value="{$smarty.request.selected_section}" />
        {/if}
        <input type="hidden" class="cm-no-hide-input" name="redirect_url" value="{$return_url|default:$smarty.request.return_url}" />

        <input type="hidden" name="order_id" value="{$shipment.order_id}" />
        <input type="hidden" name="add_sdek_info[{$shipment.shipment_id}][order][to_location][code]" value="{$rec_city_code}" />
        <input type="hidden" name="add_sdek_info[{$shipment.shipment_id}][order][from_location][code]" value="{$data_shipment.send_city_code}" />
        <input type="hidden" name="add_sdek_info[{$shipment.shipment_id}][order][tariff_code]" value="{$data_shipment.tariff_code}" />

        <div class="tabs cm-j-tabs cm-track tabs--enable-fill tabs--count-{$tabs_count}">
            <ul class="nav nav-tabs">
                <li id="tab_general_{$id}" class="cm-js {if $active_tab == "tab_general_`$id`"} active{/if}"><a>{__("general")}</a></li>
                <li id="tab_call_customer_{$id}" class="cm-js {if $active_tab == "tab_call_customer_`$id`"} active{/if}"><a>{__("rus_sdek2.call_customer")}</a></li>
                <li id="tab_call_courier_{$id}" class="cm-js {if $active_tab == "tab_call_courier_`$id`"} active{/if}"><a>{__("rus_sdek2.call_courier")}</a></li>
            </ul>
        </div>

        <div class="cm-tabs-content" id="tabs_content">
            <div id="content_tab_general_{$id}">
            <fieldset>
                <div class="control-group">
                    <label class="control-label right" for="shipping_address">{__("shipping_address")}</label>
                    <div class="controls">
                        {if (empty($data_shipment.offices))}
                            <input type="text" id="shipping_address" value="{$data_shipment.address}" disabled />
                            <input type="hidden" id="shipping_address" name="add_sdek_info[{$shipment.shipment_id}][order][to_location][address]" value="{$data_shipment.address}" />
                        {else}
                            <select id="shipping_address" name="add_sdek_info[{$shipment.shipment_id}][order][delivery_point]" class="input-slarge">
                                {foreach from=$data_shipment.offices item=address_shipping}
                                    <option value="{$address_shipping.code}" {if $address_shipping.code === $data_shipment.delivery_point}selected="selected"{/if}>{$address_shipping.location.address}</option>
                                {/foreach}
                            </select>
                        {/if}
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label right" for="number_package">{__("rus_sdek2.number_package")}</label>
                    <div class="controls">
                        <input id="number_package" type="text" name="add_sdek_info[{$shipment.shipment_id}][barcode]" value="{$data_shipment.barcode}" {if $register_id}disabled{/if} />
                        <p class="muted description">{__("rus_sdek2.number_package.tooltip")}</p>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label right" for="shipping_cost">{__("shipping_cost")} ({$currencies.$primary_currency.symbol nofilter})</label>
                    <div class="controls">
                        <input type="text" id="shipping_cost" name="add_sdek_info[{$shipment.shipment_id}][order][delivery_recipient_cost][value]" value="{$data_shipment.delivery_cost|default:"0.00"|fn_format_price:$primary_currency:null:false}" class="input-long" size="10" {if $register_id}disabled{/if} />
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label right" for="comment">{__("comment")}</label>
                    <div class="controls">
                        <textarea class="span9" id="comment" name="add_sdek_info[{$shipment.shipment_id}][order][comment]" value="" {if $register_id}disabled{/if} cols="55" rows="4">{$data_shipment.comments}</textarea>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label right" for="use_product">{__("rus_sdek2.use_product_price")}</label>
                    <div class="controls">
                        <input type="hidden" name="add_sdek_info[{$shipment.shipment_id}][use_product]" value="N" />
                        <input id="use_product" type="checkbox" name="add_sdek_info[{$shipment.shipment_id}][use_product]" {if $data_shipment.use_product == 'Y' || !$data_shipment.use_product}checked="checked"{/if} {if !$data_shipment.use_product}value="Y"{else}value="{$data_shipment.use_product}"{/if} {if $register_id}disabled{/if} />
                        <p class="muted description">{__("rus_sdek2.use_product_price.tooltip")}</p>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label right" for="use_imposed">{__("rus_sdek2.use_imposed")}</label>
                    <div class="controls">
                        <input type="hidden" name="add_sdek_info[{$shipment.shipment_id}][use_imposed]" value="N" />
                        <input id="use_imposed" type="checkbox" name="add_sdek_info[{$shipment.shipment_id}][use_imposed]" {if $data_shipment.use_imposed == 'Y'}checked="checked"{/if} {if !$data_shipment.use_imposed}value="Y"{else}value="{$data_shipment.use_imposed}"{/if} {if $register_id}disabled{/if} />
                        <p class="muted description">{__("rus_sdek2.use_imposed.tooltip")}</p>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label right" for="cash_delivery">{__("rus_sdek2.cash_delivery")} ({$currencies.$primary_currency.symbol nofilter})</label>
                    <div class="controls">
                        <input id="cash_delivery" type="text" name="add_sdek_info[{$shipment.shipment_id}][cash_delivery]" {if $data_shipment.cash_delivery}value="{$data_shipment.cash_delivery}"{else}value="0.00"{/if} class="input-long" size="10" {if $register_id}disabled{/if} />
                    </div>
                </div>

                {if !$register_id}
                <div class="cm-toggle-button">
                    <div class="control-group select-field notify-customer">
                        <div class="controls">
                            <label for="shipment_notify_user" class="checkbox">
                            <input type="checkbox" name="notify_user" id="shipment_notify_user" value="Y" />
                            {__("send_shipment_notification_to_customer")}</label>
                        </div>
                    </div>
                </div>
                {/if}
            </fieldset>
            </div>

            <div id="content_tab_call_customer_{$id}">
            {include file="common/subheader.tpl" title=__("rus_sdek2.call_customer")}

            <fieldset>
                <div class="control-group">
                    <label class="control-label right" for="recipient">{__("recipient")}</label>
                    <div class="controls">
                        <input type="text" id="recipient" name="add_sdek_info[{$shipment.shipment_id}][schedule][recipient_name]" value="{$data_shipment.new_schedules.recipient_name}" />
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label right" for="phone">{__("phone")}</label>
                    <div class="controls">
                        <input type="text" id="phone" name="add_sdek_info[{$shipment.shipment_id}][schedule][phone]" value="{$data_shipment.new_schedules.phone}" size="10" class="input-long" />
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label right" for="recipient_cost">{__("rus_sdek2.recipient_cost")} ({$currencies.$primary_currency.symbol nofilter})</label>
                    <div class="controls">
                        <input id="recipient_cost" type="text" name="add_sdek_info[{$shipment.shipment_id}][schedule][delivery_recipient_cost]" value="{$data_shipment.new_schedules.recipient_cost|default:"0.00"|fn_format_price:$primary_currency:null:false}" size="10" class="input-small" />
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label right" for="schedule_data">{__("rus_sdek2.schedule_data")}</label>
                    <div class="controls">
                        {include file="common/calendar.tpl" date_id="schedule_data_`$id`" date_name="add_sdek_info[`$id`][schedule][date]" date_val="$data_shipment.new_schedules.date" start_year=$settings.Company.company_start_year}
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label right" for="schedule_period">{__("rus_sdek2.schedule_period")}</label>
                    <div class="controls">
                        <input id="timebeg_{$shipment.shipments_id}" class="input-small cm-mask-time" type="text" name="add_sdek_info[{$shipment.shipment_id}][schedule][time_from]" value="{$data_shipment.new_schedules.time_from}" size="3" /> - <input id="timeend_{$shipment.shipments_id}" class="input-small cm-mask-time" type="text" name="add_sdek_info[{$shipment.shipment_id}][schedule][time_to]" value="{$data_shipment.new_schedules.time_to}" size="3" />
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label right" for="schedule_comment">{__("comment")}</label>
                    <div class="controls">
                        <textarea id="schedule_comment" class="span9" name="add_sdek_info[{$shipment.shipment_id}][schedule][comment]" cols="55" rows="4">{$data_shipment.new_schedules.comment}</textarea>
                    </div>
                </div>
            </fieldset>
            </div>

            <div id="content_tab_call_courier_{$id}">
            {include file="common/subheader.tpl" title=__("rus_sdek2.call_courier")}

            <fieldset>
                <div class="control-group">
                    <label class="control-label right" for="date_courier">{__("rus_sdek2.date_courier")}</label>
                    <div class="controls">
                        {include file="common/calendar.tpl" date_id="date_courier_`$id`" date_name="add_sdek_info[`$id`][call_courier][intake_date]" date_val="$data_shipment.call_couriers.date" start_year=$settings.Company.company_start_year}
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label right" for="time_courier">{__("rus_sdek2.time_courier")}</label>
                    <div class="controls">
                        <input id="timebeg_{$shipment.shipments_id}" class="input-small cm-mask-time" type="text" name="add_sdek_info[{$shipment.shipment_id}][call_courier][intake_time_from]" value="{$data_shipment.call_couriers.intake_time_from}" size="6" /> - <input id="timeend_{$shipment.shipments_id}" class="input-small cm-mask-time" type="text" name="add_sdek_info[{$shipment.shipment_id}][call_courier][intake_time_to]" value="{$data_shipment.call_couriers.intake_time_to}" size="6" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label right" for="time_lunch_courier">{__("rus_sdek2.time_lunch_courier")}</label>
                    <div class="controls">
                        <input id="timebeg_{$shipment.shipments_id}" class="input-small cm-mask-time" type="text" name="add_sdek_info[{$shipment.shipment_id}][call_courier][lunch_time_from]" value="{$data_shipment.call_couriers.lunch_time_from}" size="3" /> - <input id="timeend_{$shipment.shipments_id}" class="input-small cm-mask-time" type="text" name="add_sdek_info[{$shipment.shipment_id}][call_courier][lunch_time_to]" value="{$data_shipment.call_couriers.lunch_time_to}" size="3" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label right" for="courier_comment">{__("comment")}</label>
                    <div class="controls">
                        <textarea id="courier_comment" class="span9" name="add_sdek_info[{$shipment.shipment_id}][call_courier][comment]" cols="55" rows="4">{$data_shipment.call_couriers.comment}</textarea>
                    </div>
                </div>
            </fieldset>
            </div>
        </div>

        <div class="buttons-container">
            {if $data_shipments.$shipment_id.register_id}
                {include file="buttons/save_cancel.tpl" but_name="dispatch[orders.call_sdek]" cancel_action="close" save=$id}
            {else}
                {include file="buttons/save_cancel.tpl" but_name="dispatch[orders.sdek_order_delivery]" cancel_action="close" save=$id}
            {/if}
        </div>
    </form>
{/if}
</div>
