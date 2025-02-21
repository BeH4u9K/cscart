<?php
/* Smarty version 4.3.0, created on 2025-02-18 10:38:07
  from 'C:\OSPanel\domains\csCart\design\backend\templates\addons\help_center\hooks\index\styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67b438df24adf9_21387826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35322f4676e80f80a8619420a401608672b9ecca' => 
    array (
      0 => 'C:\\OSPanel\\domains\\csCart\\design\\backend\\templates\\addons\\help_center\\hooks\\index\\styles.post.tpl',
      1 => 1728378215,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67b438df24adf9_21387826 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\csCart\\app\\functions\\smarty_plugins\\function.style.php','function'=>'smarty_function_style',),));
if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "admin") {?>
    <?php echo smarty_function_style(array('src'=>"addons/help_center/styles.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"addons/help_center/manage.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"addons/help_center/help_center_popup.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"addons/help_center/templates/help_center_block.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"addons/help_center/templates/help_center_nav_chapter.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"addons/help_center/templates/help_center_nav_item.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"addons/help_center/templates/help_center_section.less"),$_smarty_tpl);?>

<?php }
}
}
