<?php /* Smarty version Smarty-3.1.12, created on 2015-04-01 13:59:15
         compiled from "/usr/local/ampps/www/nyumentor/ow_system_plugins/base/decorators/box_cap.html" */ ?>
<?php /*%%SmartyHeaderCode:1456673678551c5c231a55f2-48571704%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0b928f2e3eda3fb403a6c6df25e52e5f7cd1f8b' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_system_plugins/base/decorators/box_cap.html',
      1 => 1416930874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1456673678551c5c231a55f2-48571704',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_551c5c232569a7_79995764',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551c5c232569a7_79995764')) {function content_551c5c232569a7_79995764($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.text.php';
?>
<div class="ow_box_cap<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['type'])){?>_<?php echo $_smarty_tpl->tpl_vars['data']->value['type'];?>
<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['data']->value['addClass'])){?> <?php echo $_smarty_tpl->tpl_vars['data']->value['addClass'];?>
<?php }?>">
	<div class="ow_box_cap_right">
		<div class="ow_box_cap_body">
			<h3 class="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['iconClass'])){?><?php echo $_smarty_tpl->tpl_vars['data']->value['iconClass'];?>
<?php }else{ ?>ow_ic_file<?php }?>">
			<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['href'])){?><a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['href'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['extraString'])){?><?php echo $_smarty_tpl->tpl_vars['data']->value['extraString'];?>
<?php }?>><?php }?>
			<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['langLabel'])){?>
			   <?php echo smarty_function_text(array('key'=>$_smarty_tpl->tpl_vars['data']->value['langLabel']),$_smarty_tpl);?>

			<?php }else{ ?>
			   <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['label'])){?><?php echo $_smarty_tpl->tpl_vars['data']->value['label'];?>
<?php }else{ ?>&nbsp;<?php }?>
		    <?php }?>
		    <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['href'])){?></a><?php }?>
			</h3>
		   <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['content'])){?><?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>
<?php }?>
		</div>
	</div>
</div><?php }} ?>