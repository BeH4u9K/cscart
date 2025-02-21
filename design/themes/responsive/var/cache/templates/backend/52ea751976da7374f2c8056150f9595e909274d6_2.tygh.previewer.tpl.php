<?php
/* Smarty version 4.3.0, created on 2025-02-18 10:38:15
  from 'C:\OSPanel\domains\csCart\design\backend\templates\common\previewer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67b438e7dfd789_03633039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52ea751976da7374f2c8056150f9595e909274d6' => 
    array (
      0 => 'C:\\OSPanel\\domains\\csCart\\design\\backend\\templates\\common\\previewer.tpl',
      1 => 1728378216,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67b438e7dfd789_03633039 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\csCart\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),));
echo smarty_function_script(array('src'=>"js/tygh/previewers/".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_image_previewer']).".previewer.js"),$_smarty_tpl);
}
}
