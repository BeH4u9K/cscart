<?php
/* Smarty version 4.3.0, created on 2025-02-21 11:10:53
  from 'C:\OSPanel\domains\csCart\design\themes\responsive\templates\views\block_manager\render\grid.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67b8350d3e1065_93861468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '750d4313604e1abe084758ba133867352d384f70' => 
    array (
      0 => 'C:\\OSPanel\\domains\\csCart\\design\\themes\\responsive\\templates\\views\\block_manager\\render\\grid.tpl',
      1 => 1739703148,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'backend:views/block_manager/frontend_render/grid.tpl' => 1,
    'tygh:views/block_manager/extract_nested_forms.tpl' => 1,
  ),
),false)) {
function content_67b8350d3e1065_93861468 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager'] && $_smarty_tpl->tpl_vars['location_data']->value['is_frontend_editing_allowed']) {?>
    <?php $_smarty_tpl->_subTemplateRender("backend:views/block_manager/frontend_render/grid.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else { ?>
    <?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width'] != "fixed") {?>
        <?php if ($_smarty_tpl->tpl_vars['parent_grid']->value['width'] > 0) {?>
            <?php $_smarty_tpl->_assignInScope('fluid_width', fn_get_grid_fluid_width($_smarty_tpl->tpl_vars['layout_data']->value['width'],$_smarty_tpl->tpl_vars['parent_grid']->value['width'],$_smarty_tpl->tpl_vars['grid']->value['width']));?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('fluid_width', $_smarty_tpl->tpl_vars['grid']->value['width']);?>
        <?php }?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['grid']->value['status'] == "A" && $_smarty_tpl->tpl_vars['content']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['grid']->value['alpha']) {?><div class="<?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width'] != "fixed") {?>row-fluid<?php } else { ?>row<?php }?>"><?php }?>
            <?php $_smarty_tpl->_assignInScope('width', (($tmp = $_smarty_tpl->tpl_vars['fluid_width']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['grid']->value['width'] ?? null : $tmp));?>
            <div class="span<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['width']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['grid']->value['offset']) {?>offset<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['grid']->value['offset'], ENT_QUOTES, 'UTF-8');
}?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['grid']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
" >
                <?php if ($_smarty_tpl->tpl_vars['grid']->value['wrapper']) {?>

                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/block_manager/extract_nested_forms.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('wrapper'=>$_smarty_tpl->tpl_vars['grid']->value['wrapper'],'content'=>$_smarty_tpl->tpl_vars['content']->value), 0, false);
?>

                    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['grid']->value['wrapper'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->tpl_vars['content']->value), 0, true);
?>
                <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

                <?php }?>
            </div>
        <?php if ($_smarty_tpl->tpl_vars['grid']->value['omega']) {?></div><?php }?>
    <?php }
}
}
}
