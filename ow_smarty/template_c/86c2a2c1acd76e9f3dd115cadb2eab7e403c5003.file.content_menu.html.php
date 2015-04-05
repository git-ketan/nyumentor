<?php /* Smarty version Smarty-3.1.12, created on 2015-04-01 14:25:55
         compiled from "/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/content_menu.html" */ ?>
<?php /*%%SmartyHeaderCode:1931327493551c6263187dd5-76152968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86c2a2c1acd76e9f3dd115cadb2eab7e403c5003' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/content_menu.html',
      1 => 1416930874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1931327493551c6263187dd5-76152968',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_551c626323b624_05363443',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551c626323b624_05363443')) {function content_551c626323b624_05363443($_smarty_tpl) {?><div class="ow_content_menu_wrap">
<ul class="ow_content_menu clearfix">
 	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <li class="<?php echo $_smarty_tpl->tpl_vars['item']->value['class'];?>
 <?php if ($_smarty_tpl->tpl_vars['item']->value['active']){?> active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><span<?php if ($_smarty_tpl->tpl_vars['item']->value['iconClass']){?> class="<?php echo $_smarty_tpl->tpl_vars['item']->value['iconClass'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</span></a></li>
	<?php } ?>
</ul>
</div><?php }} ?>