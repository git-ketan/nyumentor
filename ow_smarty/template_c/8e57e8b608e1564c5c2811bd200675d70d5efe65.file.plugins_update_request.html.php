<?php /* Smarty version Smarty-3.1.12, created on 2015-04-05 11:49:56
         compiled from "/usr/local/ampps/www/nyumentor/ow_system_plugins/admin/views/controllers/plugins_update_request.html" */ ?>
<?php /*%%SmartyHeaderCode:1410219696552183d40ae8a2-66346336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e57e8b608e1564c5c2811bd200675d70d5efe65' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_system_plugins/admin/views/controllers/plugins_update_request.html',
      1 => 1416930874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1410219696552183d40ae8a2-66346336',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mode' => 0,
    'text' => 0,
    'returnUrl' => 0,
    'redirectUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_552183d412ff25_03858576',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552183d412ff25_03858576')) {function content_552183d412ff25_03858576($_smarty_tpl) {?><?php if (!is_callable('smarty_block_block_decorator')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_function_decorator')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_block_form')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_label')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_input')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_submit')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.submit.php';
?><div class="ow_wide ow_automargin">
<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_plugin','langLabel'=>'admin+manage_plugins_update_request_box_cap_label')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_plugin','langLabel'=>'admin+manage_plugins_update_request_box_cap_label'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div style="text-align:center;">
<?php if (!empty($_smarty_tpl->tpl_vars['mode']->value)&&$_smarty_tpl->tpl_vars['mode']->value=='error'){?>
<?php echo $_smarty_tpl->tpl_vars['text']->value;?>
<br /><br />
<?php echo smarty_function_decorator(array('name'=>'button','langLabel'=>'admin+license_form_leave_label','onclick'=>"window.location='".((string)$_smarty_tpl->tpl_vars['returnUrl']->value)."'"),$_smarty_tpl);?>

<?php }elseif(!empty($_smarty_tpl->tpl_vars['mode']->value)&&$_smarty_tpl->tpl_vars['mode']->value=='free'){?>
<?php echo $_smarty_tpl->tpl_vars['text']->value;?>
<br /><br />
<?php echo smarty_function_decorator(array('name'=>'button','langLabel'=>'admin+plugin_update_yes_button_label','onclick'=>"window.location='".((string)$_smarty_tpl->tpl_vars['redirectUrl']->value)."'"),$_smarty_tpl);?>

<?php }else{ ?>
<?php echo $_smarty_tpl->tpl_vars['text']->value;?>

<br /><br />
<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'license-key')); $_block_repeat=true; echo smarty_block_form(array('name'=>'license-key'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smarty_function_label(array('name'=>'key'),$_smarty_tpl);?>
&nbsp;&nbsp;<?php echo smarty_function_input(array('name'=>'key','style'=>'width:160px;'),$_smarty_tpl);?>
<br /><br />
<?php echo smarty_function_submit(array('name'=>'submit'),$_smarty_tpl);?>
&nbsp;&nbsp;&nbsp;<?php echo smarty_function_submit(array('name'=>'button'),$_smarty_tpl);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'license-key'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_plugin','langLabel'=>'admin+manage_plugins_update_request_box_cap_label'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div><?php }} ?>