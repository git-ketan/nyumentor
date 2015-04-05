<?php /* Smarty version Smarty-3.1.12, created on 2015-04-05 12:58:37
         compiled from "/usr/local/ampps/www/nyumentor/ow_system_plugins/admin/views/controllers/mobile_settings_index.html" */ ?>
<?php /*%%SmartyHeaderCode:1290996031552193ed06e8a0-00546412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d6fc996903a90d92d6f1f2cf692ae96addea762' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_system_plugins/admin/views/controllers/mobile_settings_index.html',
      1 => 1416930874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1290996031552193ed06e8a0-00546412',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_552193ed0aff34_39368195',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552193ed0aff34_39368195')) {function content_552193ed0aff34_39368195($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_text')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_cycle')) include '/usr/local/ampps/www/nyumentor/ow_libraries/smarty3/plugins/function.cycle.php';
if (!is_callable('smarty_function_label')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_input')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_error')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.error.php';
if (!is_callable('smarty_function_desc')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.desc.php';
if (!is_callable('smarty_function_submit')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.submit.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'mobile_settings')); $_block_repeat=true; echo smarty_block_form(array('name'=>'mobile_settings'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <table class="ow_table_1 ow_form">
        <tr class="ow_tr_first">
            <th class="ow_name ow_txtleft" colspan="3">
                <span class="ow_section_icon ow_ic_gear_wheel"><?php echo smarty_function_text(array('key'=>'admin+mobile_settings_tabe_heading'),$_smarty_tpl);?>
</span>
            </th>
        </tr>
        <tr class="<?php echo smarty_function_cycle(array('name'=>"user_input",'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
">
            <td class="ow_label" style="width: 30%;"><?php echo smarty_function_label(array('name'=>'disable_mobile'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>'disable_mobile'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'disable_mobile'),$_smarty_tpl);?>
</td>
            <td class="ow_desc"><?php echo smarty_function_desc(array('name'=>'disable_mobile'),$_smarty_tpl);?>
</td>
        </tr>
    </table>
    <div class="clearfix ow_stdmargin"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>'save','class'=>'ow_ic_save ow_positive'),$_smarty_tpl);?>
</div></div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'mobile_settings'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>