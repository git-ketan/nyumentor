<?php /* Smarty version Smarty-3.1.12, created on 2015-04-01 13:52:26
         compiled from "/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/controllers/component_panel.html" */ ?>
<?php /*%%SmartyHeaderCode:469805932551c5a8ae57749-73258488%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bdb1b52079ecf2eda0aaff521858c36d77c8b49' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/controllers/component_panel.html',
      1 => 1416930874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '469805932551c5a8ae57749-73258488',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'permissionMessage' => 0,
    'profileActionToolbar' => 0,
    'componentPanel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_551c5a8ae99a93_07181902',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551c5a8ae99a93_07181902')) {function content_551c5a8ae99a93_07181902($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['permissionMessage']->value)){?>
    <div class="ow_anno ow_center">
        <?php echo $_smarty_tpl->tpl_vars['permissionMessage']->value;?>

    </div>
<?php }else{ ?>
	<?php if (isset($_smarty_tpl->tpl_vars['profileActionToolbar']->value)){?>
		<?php echo $_smarty_tpl->tpl_vars['profileActionToolbar']->value;?>

	<?php }?>

	<?php echo $_smarty_tpl->tpl_vars['componentPanel']->value;?>

<?php }?><?php }} ?>