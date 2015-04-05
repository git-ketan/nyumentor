<?php /* Smarty version Smarty-3.1.12, created on 2015-04-01 14:29:21
         compiled from "/usr/local/ampps/www/nyumentor/ow_plugins/fbconnect/views/components/connect_button.html" */ ?>
<?php /*%%SmartyHeaderCode:9252072551c633140b136-17811607%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf65f99f747341630894d1ed95498dd08e1e43b0' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_plugins/fbconnect/views/components/connect_button.html',
      1 => 1416930878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9252072551c633140b136-17811607',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_551c63314630f7_57660921',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551c63314630f7_57660921')) {function content_551c63314630f7_57660921($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.text.php';
?><a class="fb_button fb_button_medium" onclick="OW_FB.login(); return false;">
    <span class="fb_connect_wrap"><span class="fb_button_text"><?php echo smarty_function_text(array('key'=>"fbconnect+connect_btn_label"),$_smarty_tpl);?>
</span></span>
</a><?php }} ?>