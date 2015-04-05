<?php /* Smarty version Smarty-3.1.12, created on 2015-04-01 13:56:54
         compiled from "/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/controllers/base_document_page404.html" */ ?>
<?php /*%%SmartyHeaderCode:1432177496551c5b964530f3-56849472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '350a88e108885758003062bd4a4498f24f99bddc' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/controllers/base_document_page404.html',
      1 => 1416930874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1432177496551c5b964530f3-56849472',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base404RedirectMessage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_551c5b9652dd23_81692931',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551c5b9652dd23_81692931')) {function content_551c5b9652dd23_81692931($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.text.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['base404RedirectMessage']->value)){?><?php echo $_smarty_tpl->tpl_vars['base404RedirectMessage']->value;?>
<?php }else{ ?><?php echo smarty_function_text(array('key'=>'base+base_document_404'),$_smarty_tpl);?>
<?php }?>
<?php }} ?>