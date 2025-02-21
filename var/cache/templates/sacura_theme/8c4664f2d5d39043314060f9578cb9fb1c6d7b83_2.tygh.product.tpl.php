<?php
/* Smarty version 4.3.0, created on 2025-02-21 12:13:42
  from 'C:\OSPanel\domains\csCart\design\themes\sacura_theme\templates\blocks\product\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67b843c69a9cb7_02370863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c4664f2d5d39043314060f9578cb9fb1c6d7b83' => 
    array (
      0 => 'C:\\OSPanel\\domains\\csCart\\design\\themes\\sacura_theme\\templates\\blocks\\product\\product.tpl',
      1 => 1740129220,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67b843c69a9cb7_02370863 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\csCart\\app\\functions\\smarty_plugins\\function.style.php','function'=>'smarty_function_style',),1=>array('file'=>'C:\\OSPanel\\domains\\csCart\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'C:\\OSPanel\\domains\\csCart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo smarty_function_style(array('src'=>"design/themes/sacura_theme/css/product/product.css"),$_smarty_tpl);?>


<div class="product-container" style="display: flex; flex-wrap: wrap; justify-content: center;">
    <div class="product-card">
        <img src="design/themes/sacura_theme/media/Images/nike1.jpg" alt="Nike 1">
        <h2>Nike 1</h2>
        <p>Цена: 1,000 руб.</p>
        <div class="description">Описание товара Nike 3.</div>
        <button class="ty-btn" id="ty-btn">Купить</button>
    </div>
    <div class="product-card">
        <img src="design/themes/sacura_theme/media/Images/nike2.jpg" alt="Nike 2">
        <h2>Nike 2</h2>
        <p>Цена: 1,500 руб.</p>
        <div class="description">Описание товара Nike 3.</div>
        <button class="ty-btn">Купить</button>
    </div>
    <div class="product-card">
        <img src="design/themes/sacura_theme/media/Images/nike3.jpg" alt="Nike 3">
        <h2>Nike 3</h2>
        <p>Цена: 2,000 руб.</p>
        <div class="description">Описание товара Nike 3.</div>
        <button class="ty-btn">Купить</button>
    </div>
</div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="design/themes/sacura_theme/templates/blocks/product/product.tpl" id="<?php echo smarty_function_set_id(array('name'=>"design/themes/sacura_theme/templates/blocks/product/product.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo smarty_function_style(array('src'=>"design/themes/sacura_theme/css/product/product.css"),$_smarty_tpl);?>


<div class="product-container" style="display: flex; flex-wrap: wrap; justify-content: center;">
    <div class="product-card">
        <img src="design/themes/sacura_theme/media/Images/nike1.jpg" alt="Nike 1">
        <h2>Nike 1</h2>
        <p>Цена: 1,000 руб.</p>
        <div class="description">Описание товара Nike 3.</div>
        <button class="ty-btn" id="ty-btn">Купить</button>
    </div>
    <div class="product-card">
        <img src="design/themes/sacura_theme/media/Images/nike2.jpg" alt="Nike 2">
        <h2>Nike 2</h2>
        <p>Цена: 1,500 руб.</p>
        <div class="description">Описание товара Nike 3.</div>
        <button class="ty-btn">Купить</button>
    </div>
    <div class="product-card">
        <img src="design/themes/sacura_theme/media/Images/nike3.jpg" alt="Nike 3">
        <h2>Nike 3</h2>
        <p>Цена: 2,000 руб.</p>
        <div class="description">Описание товара Nike 3.</div>
        <button class="ty-btn">Купить</button>
    </div>
</div><?php }
}
}
