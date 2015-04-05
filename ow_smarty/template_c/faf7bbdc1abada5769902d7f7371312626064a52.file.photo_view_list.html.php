<?php /* Smarty version Smarty-3.1.12, created on 2015-04-01 14:26:04
         compiled from "/usr/local/ampps/www/nyumentor/ow_plugins/photo/views/controllers/photo_view_list.html" */ ?>
<?php /*%%SmartyHeaderCode:2045927619551c626cab5c95-23440590%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'faf7bbdc1abada5769902d7f7371312626064a52' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_plugins/photo/views/controllers/photo_view_list.html',
      1 => 1416930878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2045927619551c626cab5c95-23440590',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listType' => 0,
    'pageHead' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_551c626cb0b903_68218469',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551c626cb0b903_68218469')) {function content_551c626cb0b903_68218469($_smarty_tpl) {?><?php if (!is_callable('smarty_function_add_content')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.add_content.php';
if (!is_callable('smarty_function_component')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.component.php';
?>

<div class="clearfix"><?php echo smarty_function_add_content(array('key'=>'photo.add_content.list.top','listType'=>$_smarty_tpl->tpl_vars['listType']->value),$_smarty_tpl);?>
</div>

<?php echo $_smarty_tpl->tpl_vars['pageHead']->value;?>


<?php echo smarty_function_component(array('class'=>"PHOTO_CMP_PhotoList",'type'=>$_smarty_tpl->tpl_vars['listType']->value),$_smarty_tpl);?>

<?php }} ?>