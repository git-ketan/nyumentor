<?php /* Smarty version Smarty-3.1.12, created on 2015-04-05 12:32:09
         compiled from "/usr/local/ampps/www/nyumentor/ow_system_plugins/admin/views/controllers/settings_page.html" */ ?>
<?php /*%%SmartyHeaderCode:24805296655218db95d0c27-67967659%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '104c74e46849f135a7c1956c1ea3c9511cedc371' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_system_plugins/admin/views/controllers/settings_page.html',
      1 => 1416930874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24805296655218db95d0c27-67967659',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'faviconEnabled' => 0,
    'faviconSrc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55218db963d365_32809450',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55218db963d365_32809450')) {function content_55218db963d365_32809450($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_label')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_input')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_error')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.error.php';
if (!is_callable('smarty_function_desc')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.desc.php';
if (!is_callable('smarty_function_text')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_submit')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.submit.php';
?><?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'page_settings')); $_block_repeat=true; echo smarty_block_form(array('name'=>'page_settings'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<table class="ow_table_1 ow_form">
   <tr class="ow_alt2 ow_tr_first">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'head_code'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'head_code'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'head_code'),$_smarty_tpl);?>
</td>
        <td class="ow_desc ow_small">
            <?php echo smarty_function_desc(array('name'=>'head_code'),$_smarty_tpl);?>

        </td>
    </tr>
    <tr class="ow_alt1">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'bottom_code'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'bottom_code'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'bottom_code'),$_smarty_tpl);?>
</td>
        <td class="ow_desc ow_small">
            <?php echo smarty_function_desc(array('name'=>'bottom_code'),$_smarty_tpl);?>

        </td>
    </tr>
    <tr class="ow_alt2 ow_tr_last">
        <td class="ow_label"><label><?php echo smarty_function_label(array('name'=>'favicon'),$_smarty_tpl);?>
 <?php echo smarty_function_input(array('name'=>'enable_favicon'),$_smarty_tpl);?>
</label></td>
        <td class="ow_value">
            <div id="favicon_desabled"<?php if (!empty($_smarty_tpl->tpl_vars['faviconEnabled']->value)){?> style="display:none;"<?php }?>><?php echo smarty_function_text(array('key'=>'admin+page_settings_no_favicon_label'),$_smarty_tpl);?>
</div>
            <div id="favicon_enabled"<?php if (empty($_smarty_tpl->tpl_vars['faviconEnabled']->value)){?> style="display:none;"<?php }?>><img src="<?php echo $_smarty_tpl->tpl_vars['faviconSrc']->value;?>
" /> <?php echo smarty_function_input(array('name'=>'favicon'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'favicon'),$_smarty_tpl);?>
</div>
        </td>
        <td class="ow_desc ow_small">
            <?php echo smarty_function_desc(array('name'=>'favicon'),$_smarty_tpl);?>

        </td>
    </tr>
</table>
<div class="clearfix ow_stdmargin"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>'save','class'=>'ow_ic_save ow_positive'),$_smarty_tpl);?>
</div></div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'page_settings'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>