
{if $shipment.carrier === "sdek2"}
    {assign var="shipment_id" value=$shipment.shipment_id}

    {if $data_shipments.$shipment_id}
        <strong>{__("rus_sdek2.shipping_status")}</strong>
        <div class="control-group">
            <div>
                {include_ext file="common/icon.tpl" class="icon icon-edit" assign=link_icon}
                <a href="{"shipments.details?shipment_id=`$shipment.shipment_id`"|fn_url}"><span>#{$shipment.shipment_id}</span></a> - {if $data_shipments.$shipment_id.register_id && $data_status}{$shipment.tracking_number} ({$data_status.status}) {include file="common/popupbox.tpl" id="add_new_shipment_sdek_`$shipment.shipment_id`" content="" act="link" link_text=$link_icon}{else}{__("rus_sdek2.not_complete")}{/if}
            </div>
        </div>

        {if !$data_shipments.$shipment_id.register_id}
            <div class="clearfix">
                {include file="common/popupbox.tpl" id="add_new_shipment_sdek_`$shipment.shipment_id`" content="" act="create" but_text="{__("rus_sdek2.shipping_form")}" but_meta="btn"}
            </div>
        {else}
            <a href="{"orders.sdek_order_status?shipment_id=`$shipment.shipment_id`&order_id=`$order_id`"|fn_url}" class="cm-post"><span>{__("rus_sdek2.update_status")}</span></a>
        {/if}
    {/if}
{/if}
<hr />
