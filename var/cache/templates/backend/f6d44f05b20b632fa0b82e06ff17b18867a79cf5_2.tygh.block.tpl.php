<?php
/* Smarty version 4.3.0, created on 2025-02-17 19:31:55
  from 'C:\OSPanel\domains\csCart\design\backend\templates\views\block_manager\frontend_render\block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67b3647ba917c5_18448895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6d44f05b20b632fa0b82e06ff17b18867a79cf5' => 
    array (
      0 => 'C:\\OSPanel\\domains\\csCart\\design\\backend\\templates\\views\\block_manager\\frontend_render\\block.tpl',
      1 => 1728378216,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'backend:views/block_manager/frontend_render/components/block_menu.tpl' => 1,
  ),
),false)) {
function content_67b3647ba917c5_18448895 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\csCart\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),));
if (smarty_modifier_trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager'] && $_smarty_tpl->tpl_vars['location_data']->value['is_frontend_editing_allowed']) {?>
        <?php $_smarty_tpl->_assignInScope('tag', (($tmp = $_smarty_tpl->tpl_vars['tag']->value ?? null)===null||$tmp==='' ? "div" ?? null : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('is_clearfix_class', (($tmp = $_smarty_tpl->tpl_vars['is_clearfix']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp) ? "clearfix" : '');?>
        <<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tag']->value, ENT_QUOTES, 'UTF-8');?>
 class="<?php if ($_smarty_tpl->tpl_vars['block']->value['status'] === "D") {?>bm-block-manager__block--disabled<?php }?>
            bm-block-manager__block bm-block-manager__block--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['location_data']->value['dispatch'], ENT_QUOTES, 'UTF-8');?>

            <?php if ($_smarty_tpl->tpl_vars['location_data']->value['is_frontend_editing_allowed']) {?>
                bm-block-manager__block--draggable
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['block']->value['user_class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['user_class'], ENT_QUOTES, 'UTF-8');
}?>
            <?php if ($_smarty_tpl->tpl_vars['content_alignment']->value == "RIGHT") {?> ty-float-right
            <?php } elseif ($_smarty_tpl->tpl_vars['content_alignment']->value == "LEFT") {?> ty-float-left<?php }?>"
            data-ca-block-manager-snapping-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['snapping_id']->value, ENT_QUOTES, 'UTF-8');?>
"
        >
            <?php $_smarty_tpl->_subTemplateRender("backend:views/block_manager/frontend_render/components/block_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <div class="bm-block-manager__block-content <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['is_clearfix_class']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

            </div>
        </<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tag']->value, ENT_QUOTES, 'UTF-8');?>
>
    <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    <?php }
}
}
}
