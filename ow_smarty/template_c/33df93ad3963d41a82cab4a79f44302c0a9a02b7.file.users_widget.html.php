<?php /* Smarty version Smarty-3.1.12, created on 2015-04-01 13:52:26
         compiled from "/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/users_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:182515528551c5a8abc13f9-88640636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33df93ad3963d41a82cab4a79f44302c0a9a02b7' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/users_widget.html',
      1 => 1416930874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182515528551c5a8abc13f9-88640636',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'widgetId' => 0,
    'data' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_551c5a8accf426_88152337',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551c5a8accf426_88152337')) {function content_551c5a8accf426_88152337($_smarty_tpl) {?><?php if (!is_callable('smarty_function_decorator')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.decorator.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['menu']->value)){?><?php echo $_smarty_tpl->tpl_vars['menu']->value;?>
<?php }?>
<div id="<?php echo $_smarty_tpl->tpl_vars['widgetId']->value;?>
">
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
		<div id="<?php echo $_smarty_tpl->tpl_vars['item']->value['contId'];?>
" style="display:<?php if ($_smarty_tpl->tpl_vars['item']->value['active']){?>block<?php }else{ ?>none<?php }?>;"><?php echo $_smarty_tpl->tpl_vars['item']->value['users'];?>
</div>
		<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['toolbarId'])){?><div id="<?php echo $_smarty_tpl->tpl_vars['item']->value['toolbarId'];?>
"  style="display: none;"><?php echo smarty_function_decorator(array('name'=>'box_toolbar','class'=>"clearfix",'itemList'=>$_smarty_tpl->tpl_vars['item']->value['toolbar']),$_smarty_tpl);?>
</div><?php }?>
	<?php } ?>
</div><?php }} ?>