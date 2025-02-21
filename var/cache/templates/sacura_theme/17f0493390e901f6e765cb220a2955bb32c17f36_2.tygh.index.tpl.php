<?php
/* Smarty version 4.3.0, created on 2025-02-21 12:22:59
  from 'C:\OSPanel\domains\csCart\design\themes\sacura_theme\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67b845f30a3988_29191847',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17f0493390e901f6e765cb220a2955bb32c17f36' => 
    array (
      0 => 'C:\\OSPanel\\domains\\csCart\\design\\themes\\sacura_theme\\templates\\index.tpl',
      1 => 1740129694,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:design/themes/sacura_theme/templates/blocks/header/header.tpl' => 1,
    'tygh:design/themes/sacura_theme/templates/blocks/product/product.tpl' => 1,
    'tygh:design/themes/sacura_theme/templates/blocks/footer/footer.tpl' => 1,
  ),
),false)) {
function content_67b845f30a3988_29191847 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\csCart\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),));
?>
<body style="background-image: url('design/themes/sacura_theme/media/Images/sakura.jpg'); background-size: cover; font-family: Arial, sans-serif; color: #d72727; padding: 0; display: flex; flex-direction: column;">
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:header"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:header"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:design/themes/sacura_theme/templates/blocks/header/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:header"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:product"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:product"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:design/themes/sacura_theme/templates/blocks/product/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:product"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:footer"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:footer"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:design/themes/sacura_theme/templates/blocks/footer/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:footer"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</body><?php }
}
