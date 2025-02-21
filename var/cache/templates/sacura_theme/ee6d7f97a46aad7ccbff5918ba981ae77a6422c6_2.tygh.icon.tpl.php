<?php
/* Smarty version 4.3.0, created on 2025-02-21 11:10:54
  from 'C:\OSPanel\domains\csCart\design\themes\responsive\templates\common\icon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67b8350e38b129_78431841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee6d7f97a46aad7ccbff5918ba981ae77a6422c6' => 
    array (
      0 => 'C:\\OSPanel\\domains\\csCart\\design\\themes\\responsive\\templates\\common\\icon.tpl',
      1 => 1739703148,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67b8350e38b129_78431841 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\csCart\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'C:\\OSPanel\\domains\\csCart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['class']->value) {?><span class="ty-icon <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['id']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['title']->value) {?>title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
}
if (fn_is_rtl_language()) {?>dir="rtl" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['data']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'data_value', false, 'data_name');
$_smarty_tpl->tpl_vars['data_value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data_name']->value => $_smarty_tpl->tpl_vars['data_value']->value) {
$_smarty_tpl->tpl_vars['data_value']->do_else = false;
if ($_smarty_tpl->tpl_vars['data_value']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>><?php if ($_smarty_tpl->tpl_vars['icon_text']->value) {
echo $_smarty_tpl->tpl_vars['icon_text']->value;
}?></span><?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/icon.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/icon.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['class']->value) {?><span class="ty-icon <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['id']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['title']->value) {?>title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
}
if (fn_is_rtl_language()) {?>dir="rtl" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['data']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'data_value', false, 'data_name');
$_smarty_tpl->tpl_vars['data_value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data_name']->value => $_smarty_tpl->tpl_vars['data_value']->value) {
$_smarty_tpl->tpl_vars['data_value']->do_else = false;
if ($_smarty_tpl->tpl_vars['data_value']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>><?php if ($_smarty_tpl->tpl_vars['icon_text']->value) {
echo $_smarty_tpl->tpl_vars['icon_text']->value;
}?></span><?php }
}
}
}
