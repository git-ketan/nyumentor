<?php /* Smarty version Smarty-3.1.12, created on 2015-04-01 13:52:26
         compiled from "/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/custom_html_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:1172969118551c5a8a71aac0-46473767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9bf28df2264f76b2f73d2ffb3413a831c67226c' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/custom_html_widget.html',
      1 => 1416930874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1172969118551c5a8a71aac0-46473767',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_551c5a8a7558e7_55759247',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551c5a8a7558e7_55759247')) {function content_551c5a8a7558e7_55759247($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.text.php';
?><div class="ow_custom_html_widget">
	<?php if ($_smarty_tpl->tpl_vars['content']->value){?>
		<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

	<?php }else{ ?>
            <div class="ow_nocontent">
                <?php echo smarty_function_text(array('key'=>"base+custom_html_widget_no_content"),$_smarty_tpl);?>

            </div>
	<?php }?>
</div><?php }} ?>