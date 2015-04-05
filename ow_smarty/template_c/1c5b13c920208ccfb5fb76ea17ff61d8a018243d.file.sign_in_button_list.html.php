<?php /* Smarty version Smarty-3.1.12, created on 2015-04-01 14:29:21
         compiled from "/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/sign_in_button_list.html" */ ?>
<?php /*%%SmartyHeaderCode:1054413641551c63314c9598-54572389%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c5b13c920208ccfb5fb76ea17ff61d8a018243d' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/sign_in_button_list.html',
      1 => 1416930874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1054413641551c63314c9598-54572389',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cmp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_551c63314d52a5_37838224',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551c63314d52a5_37838224')) {function content_551c63314d52a5_37838224($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.text.php';
?><div class="connect_button_cont clearfix"><span class="ow_connect_text"><?php echo smarty_function_text(array('key'=>'admin+sign_in_button_list_text'),$_smarty_tpl);?>
</span><?php echo $_smarty_tpl->tpl_vars['cmp']->value;?>
</div><?php }} ?>