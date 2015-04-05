<?php /* Smarty version Smarty-3.1.12, created on 2015-04-01 14:29:01
         compiled from "/usr/local/ampps/www/nyumentor/ow_plugins/fbconnect/views/controllers/admin_index.html" */ ?>
<?php /*%%SmartyHeaderCode:1248053403551c631de50724-57022391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da8c77130a44bd86d72cbf2e72450ee6c58ae3bd' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_plugins/fbconnect/views/controllers/admin_index.html',
      1 => 1416930878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1248053403551c631de50724-57022391',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_551c631dee99e0_84588987',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551c631dee99e0_84588987')) {function content_551c631dee99e0_84588987($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_block_block_decorator')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_function_text')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_cycle')) include '/usr/local/ampps/www/nyumentor/ow_libraries/smarty3/plugins/function.cycle.php';
if (!is_callable('smarty_function_input')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_error')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.error.php';
if (!is_callable('smarty_function_submit')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.submit.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'FBCONNECT_AccessForm')); $_block_repeat=true; echo smarty_block_form(array('name'=>'FBCONNECT_AccessForm'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','addClass'=>'ow_stdmargin','type'=>"empty")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','type'=>"empty"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo smarty_function_text(array('key'=>"fbconnect+register_app_desc"),$_smarty_tpl);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','type'=>"empty"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<table class="ow_table_1 ow_form">
    <tr class="ow_tr_first">
        <th class="ow_name ow_txtleft" colspan="3">
            <span class="ow_section_icon ow_ic_key"><?php echo smarty_function_text(array('key'=>'fbconnect+app_register_title'),$_smarty_tpl);?>
</span>
        </th>
    </tr>
    <tr class="<?php echo smarty_function_cycle(array('name'=>"install",'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
">
        <td class="ow_label"><?php echo smarty_function_text(array('key'=>'fbconnect+access_settings_app_id_label'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'appId'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'appId'),$_smarty_tpl);?>
</td>
        <td class="ow_desc"></td>
    </tr>
    <tr class="<?php echo smarty_function_cycle(array('name'=>"install",'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
 ow_tr_last">
        <td class="ow_label"><?php echo smarty_function_text(array('key'=>'fbconnect+access_settings_api_secret_label'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'secret'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'secret'),$_smarty_tpl);?>
</td>
        <td class="ow_desc"></td>
    </tr>
   
</table>
<div class="clearfix ow_submit"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>'save','class'=>'ow_ic_save'),$_smarty_tpl);?>
</div><div class="ow_right"></div></div>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'FBCONNECT_AccessForm'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>