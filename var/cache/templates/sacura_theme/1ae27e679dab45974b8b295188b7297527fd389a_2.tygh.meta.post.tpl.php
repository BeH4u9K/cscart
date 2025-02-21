<?php
/* Smarty version 4.3.0, created on 2025-02-21 11:10:47
  from 'C:\OSPanel\domains\csCart\design\themes\responsive\templates\addons\social_buttons\hooks\index\meta.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67b835077f27f0_30966221',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ae27e679dab45974b8b295188b7297527fd389a' => 
    array (
      0 => 'C:\\OSPanel\\domains\\csCart\\design\\themes\\responsive\\templates\\addons\\social_buttons\\hooks\\index\\meta.post.tpl',
      1 => 1739706168,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67b835077f27f0_30966221 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\csCart\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'C:\\OSPanel\\domains\\csCart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['display_button_block']->value) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['provider_meta_data']->value['all'], 'meta_value', false, 'meta_name');
$_smarty_tpl->tpl_vars['meta_value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['meta_name']->value => $_smarty_tpl->tpl_vars['meta_value']->value) {
$_smarty_tpl->tpl_vars['meta_value']->do_else = false;
?>
        <meta property="og:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta_name']->value, ENT_QUOTES, 'UTF-8');?>
" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta_value']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['provider_settings']->value, 'provider_data');
$_smarty_tpl->tpl_vars['provider_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['provider_data']->value) {
$_smarty_tpl->tpl_vars['provider_data']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['provider_data']->value && $_smarty_tpl->tpl_vars['provider_data']->value['meta_template']) {?>
            <?php $_smarty_tpl->_subTemplateRender("addons/social_buttons/meta_templates/".((string)$_smarty_tpl->tpl_vars['provider_data']->value['meta_template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/social_buttons/hooks/index/meta.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/social_buttons/hooks/index/meta.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['display_button_block']->value) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['provider_meta_data']->value['all'], 'meta_value', false, 'meta_name');
$_smarty_tpl->tpl_vars['meta_value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['meta_name']->value => $_smarty_tpl->tpl_vars['meta_value']->value) {
$_smarty_tpl->tpl_vars['meta_value']->do_else = false;
?>
        <meta property="og:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta_name']->value, ENT_QUOTES, 'UTF-8');?>
" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta_value']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['provider_settings']->value, 'provider_data');
$_smarty_tpl->tpl_vars['provider_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['provider_data']->value) {
$_smarty_tpl->tpl_vars['provider_data']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['provider_data']->value && $_smarty_tpl->tpl_vars['provider_data']->value['meta_template']) {?>
            <?php $_smarty_tpl->_subTemplateRender("addons/social_buttons/meta_templates/".((string)$_smarty_tpl->tpl_vars['provider_data']->value['meta_template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
}
