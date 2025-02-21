<?php
/* Smarty version 4.3.0, created on 2025-02-21 11:11:08
  from 'C:\OSPanel\domains\csCart\design\backend\templates\common\tools.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67b8351ce5e062_74061030',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c31d980e7474c0afb109eab5a3da21c5a8a47fb2' => 
    array (
      0 => 'C:\\OSPanel\\domains\\csCart\\design\\backend\\templates\\common\\tools.tpl',
      1 => 1728378216,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67b8351ce5e062_74061030 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\csCart\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),));
if ($_smarty_tpl->tpl_vars['skip_check_permissions']->value || fn_check_html_view_permissions($_smarty_tpl->tpl_vars['tools_list']->value)) {
$_smarty_tpl->_assignInScope('icon_first_tools', (($tmp = $_smarty_tpl->tpl_vars['icon_first_tools']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('icon_first', (($tmp = $_smarty_tpl->tpl_vars['icon_first']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>
<div class="btn-group <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tool_meta']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if (!$_smarty_tpl->tpl_vars['hide_tools']->value && $_smarty_tpl->tpl_vars['tools_list']->value) {?>
    <a class="<?php if ($_smarty_tpl->tpl_vars['override_meta']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['override_meta']->value, ENT_QUOTES, 'UTF-8');
} else { ?>btn<?php }?> btn dropdown-toggle" data-toggle="dropdown">
        <?php if ($_smarty_tpl->tpl_vars['icon']->value && $_smarty_tpl->tpl_vars['icon_first_tools']->value) {?>
            <span class="btn__icon <?php if ($_smarty_tpl->tpl_vars['link_text']->value) {?>btn__icon--with-text<?php }?>">
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->tpl_vars['icon']->value),$_smarty_tpl);?>

            </span>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['link_text']->value) {?>
            <?php echo $_smarty_tpl->tpl_vars['link_text']->value;?>

        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['icon']->value && !$_smarty_tpl->tpl_vars['icon_first_tools']->value) {?>
            <span class="btn__icon btn__icon--last <?php if ($_smarty_tpl->tpl_vars['link_text']->value) {?>btn__icon--with-text<?php }?>">
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->tpl_vars['icon']->value),$_smarty_tpl);?>

            </span>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['caret']->value) {?><span class="caret"></span><?php }?>
    </a>
    <ul id="tools_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
" class="dropdown-menu cm-smart-position">
        <?php echo $_smarty_tpl->tpl_vars['tools_list']->value;?>

    </ul>
    <?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['hide_actions']->value) {?>
        <?php if (fn_check_view_permissions($_smarty_tpl->tpl_vars['tool_href']->value)) {?>
            <a class="<?php if ($_smarty_tpl->tpl_vars['tool_override_meta']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tool_override_meta']->value, ENT_QUOTES, 'UTF-8');
} else { ?>btn<?php }?> cm-tooltip" <?php if ($_smarty_tpl->tpl_vars['tool_id']->value) {?> id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tool_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['tool_href']->value) {?> href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['tool_href']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['tool_onclick']->value) {?> onclick="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tool_onclick']->value, ENT_QUOTES, 'UTF-8');?>
; return false;"<?php }?> <?php if ($_smarty_tpl->tpl_vars['title']->value) {?>title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['meta_data']->value) {
echo $_smarty_tpl->tpl_vars['meta_data']->value;
}?>>
                <?php if ($_smarty_tpl->tpl_vars['icon_first']->value) {?>
                    <span class="btn__icon <?php if ($_smarty_tpl->tpl_vars['link_text']->value) {?>btn__icon--with-text<?php }?>">
                        <?php if ($_smarty_tpl->tpl_vars['icon']->value) {?>
                            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->tpl_vars['icon']->value),$_smarty_tpl);?>

                        <?php } else { ?>
                            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-plus"),$_smarty_tpl);?>

                        <?php }?>
                    </span>
                <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['link_text']->value;?>

                <?php if (!$_smarty_tpl->tpl_vars['icon_first']->value) {?>
                    <span class="btn__icon btn__icon--last <?php if ($_smarty_tpl->tpl_vars['link_text']->value) {?>btn__icon--with-text<?php }?>">
                        <?php if ($_smarty_tpl->tpl_vars['icon']->value) {?>
                            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->tpl_vars['icon']->value),$_smarty_tpl);?>

                        <?php } else { ?>
                            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-plus"),$_smarty_tpl);?>

                        <?php }?>
                    </span>
                <?php }?>
            </a>
        <?php }?>
    <?php }?>
</div>
<?php }
}
}
