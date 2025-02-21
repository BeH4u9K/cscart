<?php
/* Smarty version 4.3.0, created on 2025-02-21 11:06:43
  from 'C:\OSPanel\domains\csCart\design\backend\templates\addons\help_center\hooks\menu\top_bar_right.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67b83413f148a5_37238616',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc2fd94e1ff1d10a6527863c84c6f94246309dd7' => 
    array (
      0 => 'C:\\OSPanel\\domains\\csCart\\design\\backend\\templates\\addons\\help_center\\hooks\\menu\\top_bar_right.pre.tpl',
      1 => 1728378215,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/help_center/component/help_center_popup.tpl' => 1,
  ),
),false)) {
function content_67b83413f148a5_37238616 (Smarty_Internal_Template $_smarty_tpl) {
if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "admin") {?>
    <div class="top-bar__btn-wrapper dropdown dropdown-top-menu-item cm-dropdown-skip-processing help-center-menu">
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/help_center/component/help_center_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
<?php }
}
}
