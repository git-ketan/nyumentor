<?php /* Smarty version Smarty-3.1.12, created on 2015-04-05 12:19:33
         compiled from "/usr/local/ampps/www/nyumentor/ow_plugins/video/views/controllers/add_index.html" */ ?>
<?php /*%%SmartyHeaderCode:184999805655218ac5c9d622-92885860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8033994017981cc7f357a1221730017c42c7e816' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_plugins/video/views/controllers/add_index.html',
      1 => 1416930878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184999805655218ac5c9d622-92885860',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'auth_msg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55218ac5cf1bc3_65400995',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55218ac5cf1bc3_65400995')) {function content_55218ac5cf1bc3_65400995($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_block_form')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_label')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_input')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_error')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.error.php';
if (!is_callable('smarty_function_submit')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.submit.php';
?>
<p class="ow_smallmargin"><?php echo smarty_function_text(array('key'=>'video+video_add_tip'),$_smarty_tpl);?>
</p>

<div class="ow_superwide ow_automargin ow_stdmargin">
    
    <?php if (!$_smarty_tpl->tpl_vars['auth_msg']->value){?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'videoAddForm')); $_block_repeat=true; echo smarty_block_form(array('name'=>'videoAddForm'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


		<table class="ow_table_1 ow_form">
		    <tr class="ow_alt2 ow_tr_first">
		        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'code'),$_smarty_tpl);?>
</td>
		        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'code'),$_smarty_tpl);?>
 <br /> <?php echo smarty_function_error(array('name'=>'code'),$_smarty_tpl);?>
</td>
		        <td class="ow_desc ow_small"><?php echo smarty_function_text(array('key'=>'video+code_desc'),$_smarty_tpl);?>
</td>
		    </tr>
		    <tr class="ow_alt1">
		        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'title'),$_smarty_tpl);?>
</td>
		        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'title'),$_smarty_tpl);?>
 <br /> <?php echo smarty_function_error(array('name'=>'title'),$_smarty_tpl);?>
</td>
		        <td class="ow_desc"></td>
		    </tr>
		    <tr class="ow_alt2">
		        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'description'),$_smarty_tpl);?>
</td>
		        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'description'),$_smarty_tpl);?>
 <br /> <?php echo smarty_function_error(array('name'=>'description'),$_smarty_tpl);?>
</td>
		        <td class="ow_desc ow_small"><?php echo smarty_function_text(array('key'=>'video+description_desc'),$_smarty_tpl);?>
</td>
		    </tr>
		    <tr class="ow_alt1 ow_tr_last">
		        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'tags'),$_smarty_tpl);?>
</td>
		        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'tags'),$_smarty_tpl);?>
</td>
		        <td class="ow_desc ow_small"><?php echo smarty_function_text(array('key'=>'video+tags_desc'),$_smarty_tpl);?>
</td>
		    </tr>
		</table>
		<div class="clearfix ow_stdmargin"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>'add','class'=>'ow_ic_add ow_positive'),$_smarty_tpl);?>
</div></div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'videoAddForm'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }else{ ?>
        <div class="ow_anno ow_std_margin ow_nocontent"><?php echo $_smarty_tpl->tpl_vars['auth_msg']->value;?>
</div>
    <?php }?>

</div><?php }} ?>