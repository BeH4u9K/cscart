<?php
/* Smarty version 4.3.0, created on 2025-02-21 11:07:00
  from 'C:\OSPanel\domains\csCart\design\backend\templates\views\index\components\analytics_section\analytics_card\graph.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67b83424650f51_23767219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df9dd6073c3333e1f0f1336cb4b3a31ffef1e151' => 
    array (
      0 => 'C:\\OSPanel\\domains\\csCart\\design\\backend\\templates\\views\\index\\components\\analytics_section\\analytics_card\\graph.tpl',
      1 => 1728378216,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67b83424650f51_23767219 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\csCart\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('previous_period','current_period','current_previous_period'));
if ($_smarty_tpl->tpl_vars['graph']->value && $_smarty_tpl->tpl_vars['graph']->value['content']) {
echo smarty_function_script(array('src'=>"js/tygh/backend/dashboard/graph.js"),$_smarty_tpl);?>
<div class="analytics-card-graph" data-ca-analytics-card="graph" data-ca-analytics-card-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['analytics_card']->value['id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['graph']->value['id'], ENT_QUOTES, 'UTF-8');?>
"data-ca-analytics-card-graph-is-day="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['is_day']->value, ENT_QUOTES, 'UTF-8');?>
"data-ca-analytics-card-graph-previous-period-text="<?php echo htmlspecialchars((string) htmlentities(mb_convert_encoding((string)$_smarty_tpl->__("previous_period"), 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
"data-ca-analytics-card-graph-current-period-text="<?php echo htmlspecialchars((string) htmlentities(mb_convert_encoding((string)$_smarty_tpl->__("current_period"), 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
"data-ca-analytics-card-graph-current-previous-period-text="<?php echo htmlspecialchars((string) htmlentities(mb_convert_encoding((string)$_smarty_tpl->__("current_previous_period",array("[date]"=>"MMM d, yyyy")), 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
"data-ca-analytics-card-graph-content="<?php echo htmlspecialchars((string) json_encode($_smarty_tpl->tpl_vars['graph']->value['content']), ENT_QUOTES, 'UTF-8');?>
"><div class="analytics-card-graph__view spinner" data-ca-analytics-card="graphView"></div></div><?php }
}
}
