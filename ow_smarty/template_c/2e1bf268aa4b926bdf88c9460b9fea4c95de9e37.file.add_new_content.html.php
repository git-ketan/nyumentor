<?php /* Smarty version Smarty-3.1.12, created on 2015-04-05 12:44:53
         compiled from "/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/add_new_content.html" */ ?>
<?php /*%%SmartyHeaderCode:1092254976552190b5e9fef0-28870907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e1bf268aa4b926bdf88c9460b9fea4c95de9e37' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/add_new_content.html',
      1 => 1416930874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1092254976552190b5e9fef0-28870907',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_552190b61d6886_44047705',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552190b61d6886_44047705')) {function content_552190b61d6886_44047705($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
<a class="ow_add_content <?php echo $_smarty_tpl->tpl_vars['item']->value['iconClass'];?>
"<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['id'])){?> id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</a>
<?php } ?><?php }} ?>