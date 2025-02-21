<?php
/* Smarty version 4.3.0, created on 2025-02-21 11:10:53
  from 'C:\OSPanel\domains\csCart\design\themes\responsive\templates\views\block_manager\render\container.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67b8350d5bc260_64987612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ec99d94b31f39a6c78f6538644f983c4a6c3174' => 
    array (
      0 => 'C:\\OSPanel\\domains\\csCart\\design\\themes\\responsive\\templates\\views\\block_manager\\render\\container.tpl',
      1 => 1739703148,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'backend:views/block_manager/frontend_render/container.tpl' => 1,
  ),
),false)) {
function content_67b8350d5bc260_64987612 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\csCart\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"block_manager:frontend_container"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"block_manager:frontend_container"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager'] && $_smarty_tpl->tpl_vars['location_data']->value['is_frontend_editing_allowed']) {?>
        <?php $_smarty_tpl->_subTemplateRender("backend:views/block_manager/frontend_render/container.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } else { ?>
        <div class="<?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width'] != "fixed") {?>container-fluid <?php } else { ?>container<?php }?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

        </div>
    <?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"block_manager:frontend_container"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
