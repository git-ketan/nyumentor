<?php /* Smarty version Smarty-3.1.12, created on 2015-04-05 12:44:53
         compiled from "/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/my_avatar_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:903484104552190b5d005d7-89057931%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c547ec02915af81b973be9d944df813e5043fae3' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/my_avatar_widget.html',
      1 => 1416930874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '903484104552190b5d005d7-89057931',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'avatar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_552190b5e34296_23456283',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552190b5e34296_23456283')) {function content_552190b5e34296_23456283($_smarty_tpl) {?><?php if (!is_callable('smarty_function_decorator')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.decorator.php';
?>
<div class="ow_my_avatar_widget clearfix">
	<div class="ow_left ow_my_avatar_img"><?php echo smarty_function_decorator(array('name'=>'avatar_item','data'=>$_smarty_tpl->tpl_vars['avatar']->value),$_smarty_tpl);?>
</div>
    <div class="ow_my_avatar_cont">
    	<a href="<?php echo $_smarty_tpl->tpl_vars['avatar']->value['url'];?>
" class="ow_my_avatar_username"><span><?php echo $_smarty_tpl->tpl_vars['avatar']->value['title'];?>
</span></a>
    </div>
</div><?php }} ?>