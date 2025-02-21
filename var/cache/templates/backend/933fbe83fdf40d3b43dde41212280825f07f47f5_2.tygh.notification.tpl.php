<?php
/* Smarty version 4.3.0, created on 2025-02-21 11:06:37
  from 'C:\OSPanel\domains\csCart\design\backend\templates\common\notification.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67b8340d8e8941_08347522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '933fbe83fdf40d3b43dde41212280825f07f47f5' => 
    array (
      0 => 'C:\\OSPanel\\domains\\csCart\\design\\backend\\templates\\common\\notification.tpl',
      1 => 1728378216,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67b8340d8e8941_08347522 (Smarty_Internal_Template $_smarty_tpl) {
if (!defined("AJAX_REQUEST")) {?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "notification_content", null, null);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, fn_get_notifications(''), 'message', false, 'key');
$_smarty_tpl->tpl_vars['message']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->do_else = false;
if ($_smarty_tpl->tpl_vars['message']->value['type'] == "I") {?><div class="cm-notification-content cm-notification-content-extended notification-content-extended <?php if ($_smarty_tpl->tpl_vars['message']->value['message_state'] == "I") {?> cm-auto-hide<?php }?>" data-ca-notification-key="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
"><h1><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['message']->value['title'], ENT_QUOTES, 'UTF-8');?>
<span class="cm-notification-close close popup-close <?php if ($_smarty_tpl->tpl_vars['message']->value['message_state'] == "S") {?> cm-notification-close-ajax<?php }?>"></span></h1><div class="notification-body-extended"><?php echo $_smarty_tpl->tpl_vars['message']->value['message'];?>
</div></div><?php } else { ?><div class="alert cm-notification-content<?php if ($_smarty_tpl->tpl_vars['message']->value['type'] == "N") {?> alert-success<?php } elseif ($_smarty_tpl->tpl_vars['message']->value['type'] == "W") {?> alert-warning<?php } elseif ($_smarty_tpl->tpl_vars['message']->value['type'] == "E") {?> alert-error<?php } elseif ($_smarty_tpl->tpl_vars['message']->value['type'] == "S") {?> alert-info<?php }?> <?php if ($_smarty_tpl->tpl_vars['message']->value['message_state'] == "I") {?> cm-auto-hide<?php }?>" id="notification_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-notification-key="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
"><button type="button" class="close cm-notification-close<?php if ($_smarty_tpl->tpl_vars['message']->value['message_state'] == "S") {?> cm-notification-close-ajax<?php }?>" <?php if ($_smarty_tpl->tpl_vars['message']->value['message_state'] != "S") {?>data-dismiss="alert"<?php }?>>&times;</button><?php if ($_smarty_tpl->tpl_vars['message']->value['title']) {?><strong><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['message']->value['title'], ENT_QUOTES, 'UTF-8');?>
</strong><?php }
echo $_smarty_tpl->tpl_vars['message']->value['message'];?>
</div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['view_mode']->value == "simple") {?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'notification_content');?>

<?php }?>

<div class="cm-notification-container alert-wrap <?php if ($_smarty_tpl->tpl_vars['view_mode']->value == "simple") {?>notification-container-top<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['view_mode']->value != "simple") {?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'notification_content');?>

    <?php }?>
</div>

<?php }
}
}
