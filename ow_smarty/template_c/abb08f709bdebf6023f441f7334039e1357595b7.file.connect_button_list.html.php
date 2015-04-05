<?php /* Smarty version Smarty-3.1.12, created on 2015-04-01 14:29:21
         compiled from "/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/connect_button_list.html" */ ?>
<?php /*%%SmartyHeaderCode:577621330551c63314ae9d2-63322443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abb08f709bdebf6023f441f7334039e1357595b7' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/connect_button_list.html',
      1 => 1416930874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '577621330551c63314ae9d2-63322443',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'buttonList' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_551c63314c3b53_87353170',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551c63314c3b53_87353170')) {function content_551c63314c3b53_87353170($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/block.style.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.connect_button_list {
    padding-top: 5px;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<div class="connect_button_list">
    <?php echo $_smarty_tpl->tpl_vars['buttonList']->value;?>

</div><?php }} ?>