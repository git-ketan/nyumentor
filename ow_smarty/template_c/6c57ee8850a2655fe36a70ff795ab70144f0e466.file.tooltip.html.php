<?php /* Smarty version Smarty-3.1.12, created on 2015-04-01 13:58:56
         compiled from "/usr/local/ampps/www/nyumentor/ow_system_plugins/base/decorators/tooltip.html" */ ?>
<?php /*%%SmartyHeaderCode:1033391160551c5c1058dcd4-26249542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c57ee8850a2655fe36a70ff795ab70144f0e466' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_system_plugins/base/decorators/tooltip.html',
      1 => 1416930874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1033391160551c5c1058dcd4-26249542',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_551c5c105ed788_63623459',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551c5c105ed788_63623459')) {function content_551c5c105ed788_63623459($_smarty_tpl) {?>
<div class="ow_tooltip <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['addClass'])){?> <?php echo $_smarty_tpl->tpl_vars['data']->value['addClass'];?>
<?php }?>">
    <div class="ow_tooltip_tail">
        <span></span>
    </div>
    <div class="ow_tooltip_body">
        <?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>

    </div>
</div><?php }} ?>