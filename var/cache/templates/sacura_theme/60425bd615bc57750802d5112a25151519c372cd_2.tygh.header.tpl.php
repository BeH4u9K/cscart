<?php
/* Smarty version 4.3.0, created on 2025-02-21 11:57:27
  from 'C:\OSPanel\domains\csCart\design\themes\sacura_theme\templates\blocks\header\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67b83ff7e02509_39785672',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60425bd615bc57750802d5112a25151519c372cd' => 
    array (
      0 => 'C:\\OSPanel\\domains\\csCart\\design\\themes\\sacura_theme\\templates\\blocks\\header\\header.tpl',
      1 => 1740128246,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67b83ff7e02509_39785672 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\csCart\\app\\functions\\smarty_plugins\\function.style.php','function'=>'smarty_function_style',),1=>array('file'=>'C:\\OSPanel\\domains\\csCart\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'C:\\OSPanel\\domains\\csCart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo smarty_function_style(array('src'=>"design/themes/sacura_theme/css/header/header.css"),$_smarty_tpl);?>

<header>
        <h1>Сакура</h1>
        <nav>
            <a href="#" class="nav-button">Главная</a>
            <a href="#" class="nav-button">Кроссовки</a>
            <a href="#" class="nav-button">Куртки</a>
            <a href="#" class="nav-button">Худи</a>
        </nav>
</header><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="design/themes/sacura_theme/templates/blocks/header/header.tpl" id="<?php echo smarty_function_set_id(array('name'=>"design/themes/sacura_theme/templates/blocks/header/header.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo smarty_function_style(array('src'=>"design/themes/sacura_theme/css/header/header.css"),$_smarty_tpl);?>

<header>
        <h1>Сакура</h1>
        <nav>
            <a href="#" class="nav-button">Главная</a>
            <a href="#" class="nav-button">Кроссовки</a>
            <a href="#" class="nav-button">Куртки</a>
            <a href="#" class="nav-button">Худи</a>
        </nav>
</header><?php }
}
}
