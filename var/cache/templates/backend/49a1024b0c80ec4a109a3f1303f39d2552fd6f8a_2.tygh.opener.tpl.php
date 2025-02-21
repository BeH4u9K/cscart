<?php
/* Smarty version 4.3.0, created on 2025-02-21 11:06:45
  from 'C:\OSPanel\domains\csCart\design\backend\templates\components\notifications_center\opener.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67b83415282b73_52064573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49a1024b0c80ec4a109a3f1303f39d2552fd6f8a' => 
    array (
      0 => 'C:\\OSPanel\\domains\\csCart\\design\\backend\\templates\\components\\notifications_center\\opener.tpl',
      1 => 1728378216,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67b83415282b73_52064573 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\csCart\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('loading','show_more','show_less','notifications_center.no_notifications','notifications_center.notifications','notifications_center.mark_all_as_read','notifications_center.notifications','notifications_center.notifications','notifications_center.notifications','loading'));
?>
<div class="top-bar__btn-wrapper btn-group dropdown-top-menu-item notifications-center__opener-wrapper cm-dropdown-skip-processing"
    data-ca-notifications-center="main"
    data-ca-notifications-center-text-loading="<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->__("loading"), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
"
    data-ca-notifications-center-text-show-more="<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->__("show_more"), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
"
    data-ca-notifications-center-text-show-less="<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->__("show_less"), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
"
    data-ca-notifications-center-text-no-data="<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->__("notifications_center.no_notifications"), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
"
    data-ca-notifications-center-text-notifications="<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->__("notifications_center.notifications"), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
"
    data-ca-notifications-center-text-mark-all-as-read="<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->__("notifications_center.mark_all_as_read"), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
"
>
    <button class="dropdown-toggle dropdown-top-menu-item-link top-bar__btn notifications-center__opener-btn"
        data-toggle="dropdown"
        type="button"
        title="<?php echo $_smarty_tpl->__("notifications_center.notifications");?>
"
    >
        <span class="top-bar__btn-inner notifications-center__opener-btn-inner">
            <span>
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"bell"),$_smarty_tpl);?>

                <span class="cs-notifications-center__counter"
                    data-ca-notifications-center-counter
                    data-ca-notifications-center-count=""></span>
            </span>
        </span>
    </button>
    <ul class="dropdown-menu pull-right notifications-center__root" data-ca-notifications-center-root>
        <div class="cc-dropdown">
            <div class="cc-dropdown__title-wrapper" text="<?php echo $_smarty_tpl->__("notifications_center.notifications");?>
">
                <span class="cc-dropdown__title"><?php echo $_smarty_tpl->__("notifications_center.notifications");?>
</span>
            </div>
            <div class="cc-all-read">
                <div class="cc-all-read--inner"><?php echo $_smarty_tpl->__("loading");?>
</div>
            </div>
        </div>
    </ul>
</div>
<?php }
}
