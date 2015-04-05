<?php /* Smarty version Smarty-3.1.12, created on 2015-04-01 13:52:26
         compiled from "/usr/local/ampps/www/nyumentor/ow_system_plugins/base/decorators/box.html" */ ?>
<?php /*%%SmartyHeaderCode:1444760438551c5a8a7e7551-22393820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a7493d2b11e6c5e2e648a533c608ee654059886' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_system_plugins/base/decorators/box.html',
      1 => 1416930874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1444760438551c5a8a7e7551-22393820',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_551c5a8a8a4026_95931464',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551c5a8a8a4026_95931464')) {function content_551c5a8a8a4026_95931464($_smarty_tpl) {?><?php if (!is_callable('smarty_function_decorator')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.decorator.php';
?><?php if ($_smarty_tpl->tpl_vars['data']->value['capEnabled']){?>
<div class="ow_box_cap<?php echo $_smarty_tpl->tpl_vars['data']->value['capAddClass'];?>
">
	<div class="ow_box_cap_right">
		<div class="ow_box_cap_body">
			<h3 class="<?php echo $_smarty_tpl->tpl_vars['data']->value['iconClass'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['label'];?>
</h3><?php echo $_smarty_tpl->tpl_vars['data']->value['capContent'];?>

		</div>
	</div>
</div>
<?php }?>
<div class="ow_box<?php echo $_smarty_tpl->tpl_vars['data']->value['addClass'];?>
 ow_break_word"<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['style'])){?> style="<?php echo $_smarty_tpl->tpl_vars['data']->value['style'];?>
"<?php }?>>
<?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>

<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['toolbar'])){?>
    <div class="ow_box_toolbar_cont clearfix">
	<?php echo smarty_function_decorator(array('name'=>'box_toolbar','itemList'=>$_smarty_tpl->tpl_vars['data']->value['toolbar']),$_smarty_tpl);?>

    </div>
<?php }?>
<?php if (empty($_smarty_tpl->tpl_vars['data']->value['type'])){?>
	<div class="ow_box_bottom_left"></div>
	<div class="ow_box_bottom_right"></div>
	<div class="ow_box_bottom_body"></div>
	<div class="ow_box_bottom_shadow"></div>
<?php }?>
</div><?php }} ?>