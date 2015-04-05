<?php /* Smarty version Smarty-3.1.12, created on 2015-04-01 13:52:26
         compiled from "/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/widget_menu.html" */ ?>
<?php /*%%SmartyHeaderCode:1442601791551c5a8ab45bd1-06318850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '270dfbd5198874a15e1f0ed81b760bd6bccdc89a' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/widget_menu.html',
      1 => 1416930874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1442601791551c5a8ab45bd1-06318850',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'tab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_551c5a8abb6026_08084189',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551c5a8abb6026_08084189')) {function content_551c5a8abb6026_08084189($_smarty_tpl) {?><div class="clearfix">
	<div class="ow_box_menu">
		<?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value){
$_smarty_tpl->tpl_vars['tab']->_loop = true;
?>
			<a href="javascript://" id="<?php echo $_smarty_tpl->tpl_vars['tab']->value['id'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['tab']->value['active'])&&$_smarty_tpl->tpl_vars['tab']->value['active']){?> class="active"<?php }?>><span><?php echo $_smarty_tpl->tpl_vars['tab']->value['label'];?>
</span></a>
		<?php } ?>
	</div>
</div><?php }} ?>