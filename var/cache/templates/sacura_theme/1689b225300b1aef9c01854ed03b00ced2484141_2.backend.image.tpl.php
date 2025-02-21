<?php
/* Smarty version 4.3.0, created on 2025-02-21 11:10:51
  from 'C:\OSPanel\domains\csCart\design\backend\templates\common\image.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67b8350bee6d46_32168866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1689b225300b1aef9c01854ed03b00ced2484141' => 
    array (
      0 => 'C:\\OSPanel\\domains\\csCart\\design\\backend\\templates\\common\\image.tpl',
      1 => 1728378216,
      2 => 'backend',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67b8350bee6d46_32168866 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\csCart\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'C:\\OSPanel\\domains\\csCart\\app\\functions\\smarty_plugins\\modifier.render_tag_attrs.php','function'=>'smarty_modifier_render_tag_attrs',),2=>array('file'=>'C:\\OSPanel\\domains\\csCart\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),3=>array('file'=>'C:\\OSPanel\\domains\\csCart\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),4=>array('file'=>'C:\\OSPanel\\domains\\csCart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('no_image','no_image'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('image_data', fn_image_to_display($_smarty_tpl->tpl_vars['image']->value,$_smarty_tpl->tpl_vars['image_width']->value,$_smarty_tpl->tpl_vars['image_height']->value));
$_smarty_tpl->_assignInScope('show_detailed_link', (($tmp = $_smarty_tpl->tpl_vars['show_detailed_link']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('image_attributes', array("src"=>(($tmp = $_smarty_tpl->tpl_vars['image_data']->value['image_path'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),"width"=>(($tmp = $_smarty_tpl->tpl_vars['image_data']->value['width'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),"height"=>(($tmp = $_smarty_tpl->tpl_vars['image_data']->value['height'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),"alt"=>(($tmp = $_smarty_tpl->tpl_vars['image_data']->value['alt'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),"title"=>(($tmp = $_smarty_tpl->tpl_vars['image_data']->value['alt'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),"class"=>(($tmp = $_smarty_tpl->tpl_vars['image_css_class']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp)));
if ($_smarty_tpl->tpl_vars['image_id']->value) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['image_attributes']) ? $_smarty_tpl->tpl_vars['image_attributes']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["id"] = "image_".((string)$_smarty_tpl->tpl_vars['image_id']->value);
$_smarty_tpl->_assignInScope('image_attributes', $_tmp_array);
}
if ($_smarty_tpl->tpl_vars['image_data']->value['generate_image']) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['image_attributes']) ? $_smarty_tpl->tpl_vars['image_attributes']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["class"] = "spinner ".((string)$_smarty_tpl->tpl_vars['image_attributes']->value['class']);
$_smarty_tpl->_assignInScope('image_attributes', $_tmp_array);
$_tmp_array = isset($_smarty_tpl->tpl_vars['image_attributes']) ? $_smarty_tpl->tpl_vars['image_attributes']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["data-ca-image-path"] = $_smarty_tpl->tpl_vars['image_data']->value['image_path'];
$_smarty_tpl->_assignInScope('image_attributes', $_tmp_array);
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"common:image"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"common:image"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['show_detailed_link']->value && ($_smarty_tpl->tpl_vars['image']->value || $_smarty_tpl->tpl_vars['href']->value)) {?><a class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link_css_class']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['href']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['image']->value['image_path'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" <?php if (!$_smarty_tpl->tpl_vars['href']->value) {?>target="_blank"<?php }?>><?php }
if ($_smarty_tpl->tpl_vars['image_data']->value['image_path']) {?><img <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['image_attributes']->value);?>
 /><?php } else { ?><div class="no-image <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_image_css_class']->value, ENT_QUOTES, 'UTF-8');?>
" style="width: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['image_width']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['image_height']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
px; height: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['image_height']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['image_width']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
px;"><?php echo smarty_function_include_ext(array('file'=>"common/icon_deprecated.tpl",'class'=>"glyph-image",'title'=>$_smarty_tpl->__("no_image")),$_smarty_tpl);?>
</div><?php }
if ($_smarty_tpl->tpl_vars['show_detailed_link']->value && ($_smarty_tpl->tpl_vars['image']->value || $_smarty_tpl->tpl_vars['href']->value)) {?></a><?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"common:image"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="backend:common/image.tpl" id="<?php echo smarty_function_set_id(array('name'=>"backend:common/image.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('image_data', fn_image_to_display($_smarty_tpl->tpl_vars['image']->value,$_smarty_tpl->tpl_vars['image_width']->value,$_smarty_tpl->tpl_vars['image_height']->value));
$_smarty_tpl->_assignInScope('show_detailed_link', (($tmp = $_smarty_tpl->tpl_vars['show_detailed_link']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('image_attributes', array("src"=>(($tmp = $_smarty_tpl->tpl_vars['image_data']->value['image_path'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),"width"=>(($tmp = $_smarty_tpl->tpl_vars['image_data']->value['width'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),"height"=>(($tmp = $_smarty_tpl->tpl_vars['image_data']->value['height'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),"alt"=>(($tmp = $_smarty_tpl->tpl_vars['image_data']->value['alt'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),"title"=>(($tmp = $_smarty_tpl->tpl_vars['image_data']->value['alt'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),"class"=>(($tmp = $_smarty_tpl->tpl_vars['image_css_class']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp)));
if ($_smarty_tpl->tpl_vars['image_id']->value) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['image_attributes']) ? $_smarty_tpl->tpl_vars['image_attributes']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["id"] = "image_".((string)$_smarty_tpl->tpl_vars['image_id']->value);
$_smarty_tpl->_assignInScope('image_attributes', $_tmp_array);
}
if ($_smarty_tpl->tpl_vars['image_data']->value['generate_image']) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['image_attributes']) ? $_smarty_tpl->tpl_vars['image_attributes']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["class"] = "spinner ".((string)$_smarty_tpl->tpl_vars['image_attributes']->value['class']);
$_smarty_tpl->_assignInScope('image_attributes', $_tmp_array);
$_tmp_array = isset($_smarty_tpl->tpl_vars['image_attributes']) ? $_smarty_tpl->tpl_vars['image_attributes']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["data-ca-image-path"] = $_smarty_tpl->tpl_vars['image_data']->value['image_path'];
$_smarty_tpl->_assignInScope('image_attributes', $_tmp_array);
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"common:image"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"common:image"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['show_detailed_link']->value && ($_smarty_tpl->tpl_vars['image']->value || $_smarty_tpl->tpl_vars['href']->value)) {?><a class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link_css_class']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['href']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['image']->value['image_path'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" <?php if (!$_smarty_tpl->tpl_vars['href']->value) {?>target="_blank"<?php }?>><?php }
if ($_smarty_tpl->tpl_vars['image_data']->value['image_path']) {?><img <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['image_attributes']->value);?>
 /><?php } else { ?><div class="no-image <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_image_css_class']->value, ENT_QUOTES, 'UTF-8');?>
" style="width: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['image_width']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['image_height']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
px; height: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['image_height']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['image_width']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
px;"><?php echo smarty_function_include_ext(array('file'=>"common/icon_deprecated.tpl",'class'=>"glyph-image",'title'=>$_smarty_tpl->__("no_image")),$_smarty_tpl);?>
</div><?php }
if ($_smarty_tpl->tpl_vars['show_detailed_link']->value && ($_smarty_tpl->tpl_vars['image']->value || $_smarty_tpl->tpl_vars['href']->value)) {?></a><?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"common:image"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
