<?php /* Smarty version Smarty-3.1.12, created on 2015-04-05 12:12:14
         compiled from "/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/quick_links_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:18711632965521890e48edc7-08802595%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98b8c7c9f7932922af93ac5a4457adf721bb7c88' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/quick_links_widget.html',
      1 => 1416930874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18711632965521890e48edc7-08802595',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5521890e59ad71_41316475',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5521890e59ad71_41316475')) {function content_5521890e59ad71_41316475($_smarty_tpl) {?><table class="ow_nomargin" width="100%">
	<tbody>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		<tr>
			<td class="ow_label"><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</a></td>
			<td class="ow_txtright"><?php if (!empty($_smarty_tpl->tpl_vars['item']->value['active_count'])){?><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['active_count_url'];?>
"><span class="ow_lbutton ow_green"><?php echo $_smarty_tpl->tpl_vars['item']->value['active_count'];?>
</span></a><?php }?></td>
			<td class="ow_txtright"><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['count_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['count'];?>
</a></td>
		</tr>
        <?php } ?>
	</tbody>
</table><?php }} ?>