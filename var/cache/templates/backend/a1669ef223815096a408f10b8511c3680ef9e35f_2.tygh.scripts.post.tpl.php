<?php
/* Smarty version 4.3.0, created on 2025-02-21 11:06:53
  from 'C:\OSPanel\domains\csCart\design\backend\templates\addons\rus_taxes\hooks\index\scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67b8341dd9d680_62557487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1669ef223815096a408f10b8511c3680ef9e35f' => 
    array (
      0 => 'C:\\OSPanel\\domains\\csCart\\design\\backend\\templates\\addons\\rus_taxes\\hooks\\index\\scripts.post.tpl',
      1 => 1728378216,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67b8341dd9d680_62557487 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\csCart\\app\\functions\\smarty_plugins\\block.inline_script.php','function'=>'smarty_block_inline_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('rus_taxes.fur_marking_code_incorrect_format_alert'));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
    (function (_, $) {
        _.tr({
            fur_marking_code_incorrect_format_alert: '<?php echo strtr((string)$_smarty_tpl->__("rus_taxes.fur_marking_code_incorrect_format_alert"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
'
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
