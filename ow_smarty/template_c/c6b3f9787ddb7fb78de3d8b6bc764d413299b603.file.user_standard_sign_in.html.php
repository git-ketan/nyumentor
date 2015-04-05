<?php /* Smarty version Smarty-3.1.12, created on 2015-04-01 13:58:46
         compiled from "/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/controllers/user_standard_sign_in.html" */ ?>
<?php /*%%SmartyHeaderCode:688054025551c5c06e7b666-61061321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6b3f9787ddb7fb78de3d8b6bc764d413299b603' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/controllers/user_standard_sign_in.html',
      1 => 1416930874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '688054025551c5c06e7b666-61061321',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sign_in_form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_551c5c06edef59_72589954',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551c5c06edef59_72589954')) {function content_551c5c06edef59_72589954($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/block.style.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.ow_sign_in_wrap {
	position:absolute;
	top:200px;
	left:50%;
	margin:0 0 0 -351px;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<div class="ow_sign_in_cont">
    <?php echo $_smarty_tpl->tpl_vars['sign_in_form']->value;?>

</div>
<?php }} ?>