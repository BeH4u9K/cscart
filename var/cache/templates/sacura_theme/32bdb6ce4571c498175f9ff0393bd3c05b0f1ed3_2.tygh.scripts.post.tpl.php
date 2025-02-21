<?php
/* Smarty version 4.3.0, created on 2025-02-21 11:10:59
  from 'C:\OSPanel\domains\csCart\design\themes\responsive\templates\addons\social_buttons\hooks\index\scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67b835131528c6_36921412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32bdb6ce4571c498175f9ff0393bd3c05b0f1ed3' => 
    array (
      0 => 'C:\\OSPanel\\domains\\csCart\\design\\themes\\responsive\\templates\\addons\\social_buttons\\hooks\\index\\scripts.post.tpl',
      1 => 1739706168,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67b835131528c6_36921412 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\csCart\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'C:\\OSPanel\\domains\\csCart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('social_buttons.facebook_cookie_title','social_buttons.facebook_cookie_description','social_buttons.pinterest_cookie_title','social_buttons.pinterest_cookie_description','social_buttons.twitter_cookie_title','social_buttons.twitter_cookie_description','social_buttons.vkontakte_cookie_title','social_buttons.vkontakte_cookie_description','social_buttons.yandex_cookie_title','social_buttons.yandex_cookie_description','social_buttons.facebook_cookie_title','social_buttons.facebook_cookie_description','social_buttons.pinterest_cookie_title','social_buttons.pinterest_cookie_description','social_buttons.twitter_cookie_title','social_buttons.twitter_cookie_description','social_buttons.vkontakte_cookie_title','social_buttons.vkontakte_cookie_description','social_buttons.yandex_cookie_title','social_buttons.yandex_cookie_description'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo '<script'; ?>
>
    (function (_, $) {
        _.tr({
            "social_buttons.facebook_cookie_title": '<?php echo strtr((string)$_smarty_tpl->__("social_buttons.facebook_cookie_title",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "social_buttons.facebook_cookie_description": '<?php echo strtr((string)$_smarty_tpl->__("social_buttons.facebook_cookie_description",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "social_buttons.pinterest_cookie_title": '<?php echo strtr((string)$_smarty_tpl->__("social_buttons.pinterest_cookie_title",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "social_buttons.pinterest_cookie_description": '<?php echo strtr((string)$_smarty_tpl->__("social_buttons.pinterest_cookie_description",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "social_buttons.twitter_cookie_title": '<?php echo strtr((string)$_smarty_tpl->__("social_buttons.twitter_cookie_title",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "social_buttons.twitter_cookie_description": '<?php echo strtr((string)$_smarty_tpl->__("social_buttons.twitter_cookie_description",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "social_buttons.vkontakte_cookie_title": '<?php echo strtr((string)$_smarty_tpl->__("social_buttons.vkontakte_cookie_title",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "social_buttons.vkontakte_cookie_description": '<?php echo strtr((string)$_smarty_tpl->__("social_buttons.vkontakte_cookie_description",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "social_buttons.yandex_cookie_title": '<?php echo strtr((string)$_smarty_tpl->__("social_buttons.yandex_cookie_title",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "social_buttons.yandex_cookie_description": '<?php echo strtr((string)$_smarty_tpl->__("social_buttons.yandex_cookie_description",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/social_buttons/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/social_buttons/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo '<script'; ?>
>
    (function (_, $) {
        _.tr({
            "social_buttons.facebook_cookie_title": '<?php echo strtr((string)$_smarty_tpl->__("social_buttons.facebook_cookie_title",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "social_buttons.facebook_cookie_description": '<?php echo strtr((string)$_smarty_tpl->__("social_buttons.facebook_cookie_description",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "social_buttons.pinterest_cookie_title": '<?php echo strtr((string)$_smarty_tpl->__("social_buttons.pinterest_cookie_title",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "social_buttons.pinterest_cookie_description": '<?php echo strtr((string)$_smarty_tpl->__("social_buttons.pinterest_cookie_description",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "social_buttons.twitter_cookie_title": '<?php echo strtr((string)$_smarty_tpl->__("social_buttons.twitter_cookie_title",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "social_buttons.twitter_cookie_description": '<?php echo strtr((string)$_smarty_tpl->__("social_buttons.twitter_cookie_description",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "social_buttons.vkontakte_cookie_title": '<?php echo strtr((string)$_smarty_tpl->__("social_buttons.vkontakte_cookie_title",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "social_buttons.vkontakte_cookie_description": '<?php echo strtr((string)$_smarty_tpl->__("social_buttons.vkontakte_cookie_description",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "social_buttons.yandex_cookie_title": '<?php echo strtr((string)$_smarty_tpl->__("social_buttons.yandex_cookie_title",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            "social_buttons.yandex_cookie_description": '<?php echo strtr((string)$_smarty_tpl->__("social_buttons.yandex_cookie_description",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php }
}
}
