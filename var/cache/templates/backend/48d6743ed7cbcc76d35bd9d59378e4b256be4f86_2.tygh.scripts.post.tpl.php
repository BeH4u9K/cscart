<?php
/* Smarty version 4.3.0, created on 2025-02-21 11:06:53
  from 'C:\OSPanel\domains\csCart\design\backend\templates\addons\help_center\hooks\index\scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67b8341d618818_77412380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48d6743ed7cbcc76d35bd9d59378e4b256be4f86' => 
    array (
      0 => 'C:\\OSPanel\\domains\\csCart\\design\\backend\\templates\\addons\\help_center\\hooks\\index\\scripts.post.tpl',
      1 => 1728378215,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67b8341d618818_77412380 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\csCart\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),));
if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "admin") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/help_center/help_center_background.js"),$_smarty_tpl);?>

<?php }
}
}
