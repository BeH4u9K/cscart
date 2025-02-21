<?php
/* Smarty version 4.3.0, created on 2025-02-21 11:12:18
  from 'C:\OSPanel\domains\csCart\design\backend\templates\common\select_popup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67b83562595723_94415767',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cec1234d204f0e8df38f2c8b7b2786df33a2711' => 
    array (
      0 => 'C:\\OSPanel\\domains\\csCart\\design\\backend\\templates\\common\\select_popup.tpl',
      1 => 1728378216,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/notify_checkboxes.tpl' => 1,
  ),
),false)) {
function content_67b83562595723_94415767 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\csCart\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'C:\\OSPanel\\domains\\csCart\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'C:\\OSPanel\\domains\\csCart\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('active','hidden','disabled','pending','new','active','disabled','hidden','pending','new'));
$_smarty_tpl->_assignInScope('notify_customer_status', true);
$_smarty_tpl->_assignInScope('notify_department_status', true);
$_smarty_tpl->_assignInScope('notify_vendor_status', true);
$_smarty_tpl->_assignInScope('_update_controller', (($tmp = $_smarty_tpl->tpl_vars['update_controller']->value ?? null)===null||$tmp==='' ? "tools" ?? null : $tmp));
$_smarty_tpl->_assignInScope('custom_href', (($tmp = $_smarty_tpl->tpl_vars['custom_href']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('status', (($tmp = $_smarty_tpl->tpl_vars['status']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));
$_smarty_tpl->_assignInScope('text_class', '');
$_smarty_tpl->_assignInScope('status_long_length', 10);
if ($_smarty_tpl->tpl_vars['items_status']->value) {?>
    <?php $_smarty_tpl->_assignInScope('items_status_text', (($tmp = $_smarty_tpl->tpl_vars['items_status']->value[$_smarty_tpl->tpl_vars['status']->value] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['default_status_text']->value ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('is_items_status_text_long', mb_strlen($_smarty_tpl->tpl_vars['items_status_text']->value, 'UTF-8') > $_smarty_tpl->tpl_vars['status_long_length']->value);?>
    <?php $_smarty_tpl->_assignInScope('text_class', $_smarty_tpl->tpl_vars['is_items_status_text_long']->value ? "status--long" : '');
}
if ($_smarty_tpl->tpl_vars['type']->value) {?>
    <?php $_smarty_tpl->_assignInScope('type_class', smarty_modifier_replace($_smarty_tpl->tpl_vars['type']->value,"_","-"));
}?>

<?php if (!$_smarty_tpl->tpl_vars['non_editable']->value) {?>
    <?php $_smarty_tpl->_assignInScope('has_permission', fn_check_permissions($_smarty_tpl->tpl_vars['_update_controller']->value,"update_status","admin","POST",array("table"=>$_smarty_tpl->tpl_vars['table']->value)));?>
    <?php if (!$_smarty_tpl->tpl_vars['has_permission']->value) {?>
        <?php $_smarty_tpl->_assignInScope('non_editable', true);?>
    <?php }
}?>

<?php if ($_smarty_tpl->tpl_vars['non_editable']->value || $_smarty_tpl->tpl_vars['display']->value == "text") {?>
    <span class="view-status view-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['status']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['text_class']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['type_class']->value) {?>view-status--type view-status--type-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type_class']->value, ENT_QUOTES, 'UTF-8');
}?>" <?php if ($_smarty_tpl->tpl_vars['items_status']->value && $_smarty_tpl->tpl_vars['is_items_status_text_long']->value) {?>title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['items_status_text']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php if ($_smarty_tpl->tpl_vars['items_status']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['items_status_text']->value, ENT_QUOTES, 'UTF-8');
} else {
if ($_smarty_tpl->tpl_vars['status']->value == "A") {
echo $_smarty_tpl->__("active");
} elseif ($_smarty_tpl->tpl_vars['status']->value == "H") {
echo $_smarty_tpl->__("hidden");
} elseif ($_smarty_tpl->tpl_vars['status']->value == "D") {
echo $_smarty_tpl->__("disabled");
} elseif ($_smarty_tpl->tpl_vars['status']->value == "P") {
echo $_smarty_tpl->__("pending");
} elseif ($_smarty_tpl->tpl_vars['status']->value == "N") {
echo $_smarty_tpl->__("new");
}
}?></span>
<?php } else {
$_smarty_tpl->_assignInScope('prefix', (($tmp = $_smarty_tpl->tpl_vars['prefix']->value ?? null)===null||$tmp==='' ? "select" ?? null : $tmp));
$_smarty_tpl->_assignInScope('btn_meta', (($tmp = $_smarty_tpl->tpl_vars['btn_meta']->value ?? null)===null||$tmp==='' ? "btn btn-link" ?? null : $tmp));
$_smarty_tpl->_assignInScope('popup_additional_class', $_smarty_tpl->tpl_vars['popup_additional_class']->value);?>
<div class="cm-popup-box <?php if (!$_smarty_tpl->tpl_vars['hide_for_vendor']->value) {?>dropdown<?php }?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['popup_additional_class']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if (!$_smarty_tpl->tpl_vars['hide_for_vendor']->value) {?>
        <a href="#" <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>id="sw_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_wrap"<?php }?> class="<?php if ($_smarty_tpl->tpl_vars['btn_meta']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['btn_meta']->value, ENT_QUOTES, 'UTF-8');
}?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['text_class']->value, ENT_QUOTES, 'UTF-8');?>
 status-dropdown status-dropdown-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['status']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['type_class']->value) {?>status-dropdown--type status-dropdown--type-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type_class']->value, ENT_QUOTES, 'UTF-8');
}?> btn dropdown-toggle<?php if ($_smarty_tpl->tpl_vars['id']->value) {?> cm-combination<?php }?> <?php if ($_smarty_tpl->tpl_vars['text_wrap']->value) {?>dropdown-toggle--text-wrap<?php }?>" <?php if ($_smarty_tpl->tpl_vars['items_status']->value && $_smarty_tpl->tpl_vars['is_items_status_text_long']->value) {?>title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['items_status_text']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> data-toggle="dropdown"><?php }
if ($_smarty_tpl->tpl_vars['items_status']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['items_status_text']->value, ENT_QUOTES, 'UTF-8');
} else {
if ($_smarty_tpl->tpl_vars['status']->value == "A") {
echo $_smarty_tpl->__("active");
} elseif ($_smarty_tpl->tpl_vars['status']->value == "D") {
echo $_smarty_tpl->__("disabled");
} elseif ($_smarty_tpl->tpl_vars['status']->value == "H") {
echo $_smarty_tpl->__("hidden");
} elseif ($_smarty_tpl->tpl_vars['status']->value == "P") {
echo $_smarty_tpl->__("pending");
} elseif ($_smarty_tpl->tpl_vars['status']->value == "N") {
echo $_smarty_tpl->__("new");
}
}
if (!$_smarty_tpl->tpl_vars['hide_for_vendor']->value) {?><span class="caret status-caret"></span></a>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['id']->value && !$_smarty_tpl->tpl_vars['hide_for_vendor']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['table']->value && $_smarty_tpl->tpl_vars['object_id_name']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "_extra", null, null);?>&table=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['table']->value, ENT_QUOTES, 'UTF-8');?>
&id_name=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id_name']->value, ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>
            <ul class="dropdown-menu">
            <?php if (!$_smarty_tpl->tpl_vars['items_status']->value) {?>
                <?php $_smarty_tpl->_assignInScope('items_status', fn_get_default_statuses($_smarty_tpl->tpl_vars['status']->value,$_smarty_tpl->tpl_vars['hidden']->value));?>
                <?php $_smarty_tpl->_assignInScope('extra_params', "&table=".((string)$_smarty_tpl->tpl_vars['table']->value)."&id_name=".((string)$_smarty_tpl->tpl_vars['object_id_name']->value));?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('extra_params', ((string)$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, '_extra')).((string)$_smarty_tpl->tpl_vars['extra']->value));?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['st_return_url']->value) {?>
                <?php $_smarty_tpl->_assignInScope('return_url', rawurlencode((string)$_smarty_tpl->tpl_vars['st_return_url']->value));?>
                <?php $_smarty_tpl->_assignInScope('extra_params', ((string)$_smarty_tpl->tpl_vars['extra_params']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['return_url']->value));?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['items_status']->value) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items_status']->value, 'val', false, 'st');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['st']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
                <?php $_smarty_tpl->_assignInScope('st', (($tmp = $_smarty_tpl->tpl_vars['st']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));?>
                <li <?php if ($_smarty_tpl->tpl_vars['status']->value == $_smarty_tpl->tpl_vars['st']->value) {?>class="disabled"<?php }?>>
                    <a
                        class="<?php if ($_smarty_tpl->tpl_vars['text_wrap']->value) {?>dropdown--text-wrap<?php }?> <?php if ($_smarty_tpl->tpl_vars['confirm']->value) {?>cm-confirm <?php }?>status-link status-link-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['st']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['type_class']->value) {?>status-link--type status-link--type-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type_class']->value, ENT_QUOTES, 'UTF-8');
}?> <?php if ($_smarty_tpl->tpl_vars['status']->value == $_smarty_tpl->tpl_vars['st']->value) {?>active<?php } else { ?>cm-ajax cm-post<?php if ($_smarty_tpl->tpl_vars['ajax_full_render']->value) {?> cm-ajax-full-render<?php }
}?> <?php if ($_smarty_tpl->tpl_vars['status_meta']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['status_meta']->value, ENT_QUOTES, 'UTF-8');
}?>"
                        <?php if ($_smarty_tpl->tpl_vars['status_target_id']->value) {?> data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['status_target_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['custom_href']->value) {?>
                            href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['custom_href']->value, ENT_QUOTES, 'UTF-8');?>
"
                        <?php } else { ?>
                            href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['_update_controller']->value).".update_status?id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&status=".((string)$_smarty_tpl->tpl_vars['st']->value).((string)$_smarty_tpl->tpl_vars['extra_params']->value).((string)$_smarty_tpl->tpl_vars['dynamic_object']->value)), ENT_QUOTES, 'UTF-8');?>
"
                        <?php }?>
                        onclick="return fn_check_object_status(this, '<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['st']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
', '<?php if ($_smarty_tpl->tpl_vars['statuses']->value) {
echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['statuses']->value[$_smarty_tpl->tpl_vars['st']->value]['params']['color'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');
}?>');"
                        <?php if ($_smarty_tpl->tpl_vars['st_result_ids']->value) {?>data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['st_result_ids']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                        data-ca-event="ce.update_object_status_callback"
                        <?php if (mb_strlen($_smarty_tpl->tpl_vars['val']->value, 'UTF-8') > $_smarty_tpl->tpl_vars['status_long_length']->value) {?>data-ca-select-popup-is-long-status="true"<?php }?>
                        title="<?php if ($_smarty_tpl->tpl_vars['custom_title']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['custom_title']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8');
}?>"
                    ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8');?>
</a>
                </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "list_items", null, null);?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/notify_checkboxes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

            <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'list_items'))) {?>
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'list_items');?>

            <?php }?>
        </ul>
        <?php if (!$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'avail_box')) {?>
        <?php echo smarty_function_script(array('src'=>"js/tygh/select_popup.js"),$_smarty_tpl);?>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "avail_box", null, null);?>Y<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php }?>
    <?php }?>
</div>
<?php }
}
}
