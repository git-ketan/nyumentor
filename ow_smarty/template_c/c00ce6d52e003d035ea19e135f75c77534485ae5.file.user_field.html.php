<?php /* Smarty version Smarty-3.1.12, created on 2015-04-01 13:58:56
         compiled from "/usr/local/ampps/www/nyumentor/ow_plugins/mailbox/views/components/user_field.html" */ ?>
<?php /*%%SmartyHeaderCode:1872408679551c5c103df710-02089556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c00ce6d52e003d035ea19e135f75c77534485ae5' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_plugins/mailbox/views/components/user_field.html',
      1 => 1416930876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1872408679551c5c103df710-02089556',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'input' => 0,
    'defaultAvatarUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_551c5c10418ce1_10488751',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551c5c10418ce1_10488751')) {function content_551c5c10418ce1_10488751($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.text.php';
?><?php echo $_smarty_tpl->tpl_vars['input']->value;?>

<input name="mailbox_new_message_user" id="mailbox_new_message_user" type="text" class="invitation userFieldInputControl" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" placeholder="<?php echo smarty_function_text(array('key'=>'mailbox+to'),$_smarty_tpl);?>
" />
<div style="display: block;" class="ow_mailchat_autocomplete" id="userFieldAutocompleteControl">
    <div class="ow_mailchat_autocomplete_inner">
        <ul style="display: block;" id="userFieldUserList">
            <li class="clearfix" style="display: none;" id="userFieldUserListItem-notfound">
                <span class="ow_chat_user_not_found"><?php echo smarty_function_text(array('key'=>"mailbox+user_not_found"),$_smarty_tpl);?>
</span>
            </li>
        </ul>
    </div>
</div>

<ul style="display: none;" id="userFieldUserListPrototype">
    <li style="display: none;" id="userFieldUserListItemPrototype" class="userFieldUserListItem">
        <a class="clearfix ow_chat_item" href="javascript://">
            <span class="ow_chat_item_photo_wrap">
                <span class="ow_chat_item_photo">
                    <span class="ow_chat_in_item_photo"><img width="32px" height="32px" alt="" src="<?php echo $_smarty_tpl->tpl_vars['defaultAvatarUrl']->value;?>
" id="userFieldUserListItemAvatarUrl"></span>
                </span>
            </span>
            <span class="ow_chat_item_author">
                <span class="ow_chat_in_item_author" id="userFieldUserListItemUsername"></span>
            </span>
        </a>
    </li>
</ul>
<?php }} ?>