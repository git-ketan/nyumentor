<?php /* Smarty version Smarty-3.1.12, created on 2015-04-01 14:25:55
         compiled from "/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/controllers/user_list_index.html" */ ?>
<?php /*%%SmartyHeaderCode:27327798551c62638026e4-40958380%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51d9bafeb070ce77ba09f8e9cc10467374555ccd' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/controllers/user_list_index.html',
      1 => 1416930874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27327798551c62638026e4-40958380',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'listType' => 0,
    'cmp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_551c6263889868_68548682',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551c6263889868_68548682')) {function content_551c6263889868_68548682($_smarty_tpl) {?><?php if (!is_callable('smarty_function_add_content')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.add_content.php';
?><?php if (isset($_smarty_tpl->tpl_vars['menu']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>
	
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['listType']->value)){?><?php echo smarty_function_add_content(array('key'=>"base.content.user_list_top",'listType'=>$_smarty_tpl->tpl_vars['listType']->value),$_smarty_tpl);?>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['cmp']->value;?>
<?php }} ?>