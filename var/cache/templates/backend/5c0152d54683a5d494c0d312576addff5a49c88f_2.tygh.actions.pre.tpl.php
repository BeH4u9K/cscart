<?php
/* Smarty version 4.3.0, created on 2025-02-21 11:06:41
  from 'C:\OSPanel\domains\csCart\design\backend\templates\addons\product_reviews\hooks\index\actions.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67b83411c13a10_65426533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c0152d54683a5d494c0d312576addff5a49c88f' => 
    array (
      0 => 'C:\\OSPanel\\domains\\csCart\\design\\backend\\templates\\addons\\product_reviews\\hooks\\index\\actions.pre.tpl',
      1 => 1728378216,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67b83411c13a10_65426533 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\csCart\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),));
?>

<?php if (fn_allowed_for("ULTIMATE") && $_smarty_tpl->tpl_vars['runtime']->value['controller'] === 'reviews' && ($_smarty_tpl->tpl_vars['runtime']->value['mode'] === 'manage' && $_smarty_tpl->tpl_vars['addons']->value['product_reviews']['split_reviews_by_storefronts'] !== smarty_modifier_enum("YesNo::YES") || $_smarty_tpl->tpl_vars['runtime']->value['mode'] === 'update')) {?>
    <?php $_smarty_tpl->_assignInScope('select_storefront', false ,false ,2);
}
}
}
