{$suffix = $payment_id|default:0}

{include file="common/subheader.tpl" title=__("paypal_checkout.settings.account")}

<input type="hidden"
       name="payment_data[processor_params][is_paypal_checkout]"
       value="{"YesNo::YES"|enum}"
/>

<input type="hidden"
       name="payment_data[processor_params][created_at]"
       value="{if $processor_params.created_at}{$processor_params.created_at}{else}{time()}{/if}"
/>

<input type="hidden"
       name="payment_data[processor_params][access_token]"
       value="{$processor_params.access_token|default:""}"
/>

<input type="hidden"
       name="payment_data[processor_params][expiry_time]"
       value="{$processor_params.expiry_time|default:0}"
/>

<div class="control-group">
    <label for="elm_client_id{$suffix}"
           class="control-label cm-required"
    >{__("paypal_checkout.client_id")}:</label>
    <div class="controls">
        <input type="text"
               name="payment_data[processor_params][client_id]"
               id="elm_client_id{$suffix}"
               value="{$processor_params.client_id}"
        />
    </div>
</div>

<div class="control-group">
    <label for="elm_secret{$suffix}"
           class="control-label cm-required"
    >{__("paypal_checkout.secret")}:</label>
    <div class="controls">
        <input type="password"
               name="payment_data[processor_params][secret]"
               id="elm_secret{$suffix}"
               value="{$processor_params.secret}"
               autocomplete="new-password"
        />
    </div>
</div>

<div class="control-group">
    <label for="elm_mode{$suffix}"
           class="control-label"
    >{__("test_live_mode")}:</label>
    <div class="controls">
        <select name="payment_data[processor_params][mode]"
                id="elm_mode{$suffix}"
        >
            <option value="test"
                    {if $processor_params.mode == "test"}selected="selected"{/if}
            >{__("test")}</option>
            <option value="live"
                    {if $processor_params.mode == "live"}selected="selected"{/if}
            >{__("live")}</option>
        </select>
    </div>
</div>

<div class="control-group">
    <label for="elm_currency{$suffix}"
           class="control-label"
    >{__("currency")}:</label>
    <div class="controls">
        <select name="payment_data[processor_params][currency]"
                id="elm_currency{$suffix}"
                data-ca-paypal_checkout-element="currency"
                data-ca-paypal_checkout-credit-selector="#elm_funding_credit{$suffix}"
        >
            {foreach $currencies as $code => $currency}
                <option value="{$code}"
                        {if $processor_params.currency == $code}selected="selected"{/if}
                >{$currency.description}</option>
            {/foreach}
        </select>
    </div>
</div>

<div class="control-group">
    <label for="elm_send_shipping_address{$suffix}"
           class="control-label"
    >{__("paypal_checkout.send_shipping_address")}:</label>
    <div class="controls">
        <input type="hidden"
               name="payment_data[processor_params][send_shipping_address]"
               value="{"YesNo::NO"|enum}"
        />
        <input type="checkbox"
               name="payment_data[processor_params][send_shipping_address]"
               id="elm_send_shipping_address{$suffix}"
               {if $processor_params.send_shipping_address === "YesNo::YES"|enum}checked{/if}
               value="{"YesNo::YES"|enum}"
        />
        <div class="paypal-config-form__send_shipping_address">
            {__("paypal_checkout.send_shipping_address_tooltip")}
        </div>
    </div>
</div>


{include file="common/widget_copy.tpl"
    widget_copy_text = __("paypal_checkout.webhook_help_message")
    widget_copy_code_text = fn_url("paypal_checkout.webhook", "C", fn_get_storefront_protocol())
}

{include file="common/subheader.tpl" title=__("paypal_checkout.settings.enable_funding") meta="collapsed" target="#elm_funding{$suffix}"}

<div id="elm_funding{$suffix}" class="collapse out">
    {foreach ["card", "paylater", "credit", "venmo", "sepa", "bancontact", "eps", "giropay", "ideal", "mybank", "p24", "sofort", "mercadopago", "blik"] as $source}
        <div class="control-group">
            <label for="elm_funding_{$source}{$suffix}"
                   class="control-label"
            >{__("paypal_checkout.funding.`$source`")}:</label>
            <div class="controls">
                <input type="hidden"
                       name="payment_data[processor_params][disable_funding][{$source}]"
                       value="{$source}"
                />
                <input type="checkbox"
                       name="payment_data[processor_params][disable_funding][{$source}]"
                       id="elm_funding_{$source}{$suffix}"
                       value="0"
                       {if !$processor_params.disable_funding.$source|default:0}checked="checked"{/if}
                />
            </div>
        </div>
    {/foreach}
</div>

{include file="common/subheader.tpl" title=__("paypal_checkout.settings.style") meta="collapsed" target="#elm_button_appearance{$suffix}"}

<div id="elm_button_appearance{$suffix}" class="collapse out">
    <div class="control-group">
        <label for="elm_shape{$suffix}" class="control-label">{__("paypal_checkout.style.shape")}:</label>
        <div class="controls">
            <select name="payment_data[processor_params][style][shape]" id="elm_shape{$suffix}">
                {foreach ["pill", "rect"] as $shape}
                    <option value="{$shape}"
                        {if $processor_params.style.shape|default:"rect" == $shape}selected="selected"{/if}
                    >{__("paypal_checkout.shape.`$shape`")}</option>
                {/foreach}
            </select>
        </div>
    </div>

    <div class="control-group">
        <label for="elm_color{$suffix}" class="control-label">{__("paypal_checkout.style.color")}:</label>
        <div class="controls">
            <select name="payment_data[processor_params][style][color]" id="elm_color{$suffix}">
                {foreach ["gold", "blue", "silver", "black"] as $color}
                    <option value="{$color}"
                        {if $processor_params.style.color|default:"gold" == $color}selected="selected"{/if}
                    >{__("paypal_checkout.color.`$color`")}</option>
                {/foreach}
            </select>
        </div>
    </div>

    <div class="control-group">
        <label for="elm_height{$suffix}" class="control-label">{__("paypal_checkout.style.height")}:</label>
        <div class="controls">
            <input name="payment_data[processor_params][style][height]"
                id="elm_height{$suffix}"
                type="text"
                class="cm-numeric"
                data-m-dec="0"
                data-v-max="55"
                data-a-sign="px"
                data-p-sign="s"
                value="{$processor_params.style.height|default:55}"
            />
        </div>
    </div>
</div>
