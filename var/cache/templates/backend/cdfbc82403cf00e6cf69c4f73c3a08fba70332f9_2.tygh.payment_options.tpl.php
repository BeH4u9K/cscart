<?php
/* Smarty version 4.3.0, created on 2025-02-17 20:00:33
  from 'C:\OSPanel\domains\csCart\design\backend\templates\addons\onboarding_guide\steps\payment_options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67b36b31a1aec9_46805531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdfbc82403cf00e6cf69c4f73c3a08fba70332f9' => 
    array (
      0 => 'C:\\OSPanel\\domains\\csCart\\design\\backend\\templates\\addons\\onboarding_guide\\steps\\payment_options.tpl',
      1 => 1728378216,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67b36b31a1aec9_46805531 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('onboarding_guide.select_payment_options','onboarding_guide.configure_payment_methods_description','onboarding_guide.configure_payment_methods','onboarding_guide.view_checkout_page_description','onboarding_guide.view_checkout_page'));
if ((empty($_smarty_tpl->tpl_vars['onboarding_guide_is_store_builder']->value))) {?>
    <div class="onboarding_content_margin--bottom_x2">
        <span class="onboarding_section__progress_text"><?php echo $_smarty_tpl->__("onboarding_guide.select_payment_options");?>
:</span>
    </div>

    <div id="og-payment-option-form">
        <form name="og-payment-option-form" class="onboarding_content_margin--bottom_x2 cm-ajax cm-ajax-force" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
            <input type="hidden" name="dispatch" value="onboarding_guide.change_payment_option" />
            <input type="hidden" name="result_ids" value="og-payment-option-form" />

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['payment_options'], 'payment_option', false, 'payment_option_type');
$_smarty_tpl->tpl_vars['payment_option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['payment_option_type']->value => $_smarty_tpl->tpl_vars['payment_option']->value) {
$_smarty_tpl->tpl_vars['payment_option']->do_else = false;
?>
            <label class="onboarding_section__label_block onboarding_content_margin--bottom_x2">
                <div>
                    <input type="radio"
                                name="payment_option"
                                id="radio_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment_option_type']->value, ENT_QUOTES, 'UTF-8');?>
"
                                class="cm-submit"
                                data-ca-target-form="og-payment-option-form"
                                value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment_option_type']->value, ENT_QUOTES, 'UTF-8');?>
"
                                <?php if ($_smarty_tpl->tpl_vars['data']->value['current_payment_option_type'] === $_smarty_tpl->tpl_vars['payment_option_type']->value) {?>checked<?php }?>
                    />
                </div>
                <div>
                    <div class="onboarding_section__progress_title_text"><?php echo $_smarty_tpl->__(((string)$_smarty_tpl->tpl_vars['payment_option']->value['name']));?>
</div>
                    <p class="onboarding_section__progress_text"><?php echo $_smarty_tpl->__(((string)$_smarty_tpl->tpl_vars['payment_option']->value['description']));?>
</p>
                </div>
                <div>
                    <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment_option']->value['image'], ENT_QUOTES, 'UTF-8');?>
" />
                </div>
            </label>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </form>
    <!--og-payment-option-form--></div>
<?php }?>


<div class="onboarding_content_margin--bottom">
    <span class="onboarding_section__progress_text"><?php echo $_smarty_tpl->__("onboarding_guide.configure_payment_methods_description");?>
</span>
</div>

<div class="onboarding_section__action_block onboarding_content_margin--bottom_x2 <?php if (!$_smarty_tpl->tpl_vars['data']->value['products_available']) {?>og-step-complete<?php }?>">
    <a href="<?php echo htmlspecialchars((string) fn_url("payments.manage"), ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary" target="_blank"><?php echo $_smarty_tpl->__("onboarding_guide.configure_payment_methods");?>
</a>
</div>

<?php if ($_smarty_tpl->tpl_vars['data']->value['products_available']) {?>
    <div class="onboarding_content_margin--bottom">
        <span class="onboarding_section__progress_text"><?php echo $_smarty_tpl->__("onboarding_guide.view_checkout_page_description");?>
</span>
    </div>

    <div class="onboarding_section__action_block onboarding_content_margin--bottom_x2 og-step-complete">
        <a href="<?php echo htmlspecialchars((string) fn_url("onboarding_guide.view_checkout"), ENT_QUOTES, 'UTF-8');?>
" class="btn" target="_blank"><?php echo $_smarty_tpl->__("onboarding_guide.view_checkout_page");?>
 ↗</a>
    </div>
<?php }
}
}
