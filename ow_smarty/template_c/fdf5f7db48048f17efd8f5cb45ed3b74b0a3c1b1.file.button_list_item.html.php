<?php /* Smarty version Smarty-3.1.12, created on 2015-04-05 11:50:21
         compiled from "/usr/local/ampps/www/nyumentor/ow_system_plugins/base/decorators/button_list_item.html" */ ?>
<?php /*%%SmartyHeaderCode:244987737552183ed7c62c5-57414767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdf5f7db48048f17efd8f5cb45ed3b74b0a3c1b1' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_system_plugins/base/decorators/button_list_item.html',
      1 => 1416930874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '244987737552183ed7c62c5-57414767',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_552183ed7f1762_72560997',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552183ed7f1762_72560997')) {function content_552183ed7f1762_72560997($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.text.php';
?>
<span class="ow_blitem<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['class'])){?> <?php echo $_smarty_tpl->tpl_vars['data']->value['class'];?>
<?php }?>"><span><input type="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['type'])&&$_smarty_tpl->tpl_vars['data']->value['type']=='submit'){?>submit<?php }else{ ?>button<?php }?>"  value="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['langLabel'])){?><?php echo smarty_function_text(array('key'=>$_smarty_tpl->tpl_vars['data']->value['langLabel']),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['data']->value['label'];?>
<?php }?>"<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['buttonName'])){?> name="<?php echo $_smarty_tpl->tpl_vars['data']->value['buttonName'];?>
"<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['data']->value['id'])){?> id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['data']->value['class'])){?> class="<?php echo $_smarty_tpl->tpl_vars['data']->value['class'];?>
"<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['data']->value['extraString'])){?><?php echo $_smarty_tpl->tpl_vars['data']->value['extraString'];?>
<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['onclick'])){?>onclick="<?php echo $_smarty_tpl->tpl_vars['data']->value['onclick'];?>
"<?php }?> /></span></span><?php }} ?>