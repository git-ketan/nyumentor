<?php /* Smarty version Smarty-3.1.12, created on 2015-04-01 13:52:26
         compiled from "/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/menu.html" */ ?>
<?php /*%%SmartyHeaderCode:654653356551c5a8aea8849-74018130%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b3a79f961140af7e6d45e9f40100cd99d1fa792' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/menu.html',
      1 => 1416930874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '654653356551c5a8aea8849-74018130',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'class' => 0,
    'data' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_551c5a8aefb130_87300797',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551c5a8aefb130_87300797')) {function content_551c5a8aefb130_87300797($_smarty_tpl) {?><ul class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
 clearfix">
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?><li class="<?php echo $_smarty_tpl->tpl_vars['item']->value['class'];?>
<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['active'])){?> active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"<?php if ($_smarty_tpl->tpl_vars['item']->value['new_window']){?> target="_blank"<?php }?>><span><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</span></a></li><?php } ?>
</ul><?php }} ?>