<?php /* Smarty version Smarty-3.1.12, created on 2015-04-01 13:52:27
         compiled from "/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/console.html" */ ?>
<?php /*%%SmartyHeaderCode:280524110551c5a8b2a2df1-23643816%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '577f8d357488d01012328432e0ab6242395dd3c0' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/console.html',
      1 => 1416930874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '280524110551c5a8b2a2df1-23643816',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_551c5a8b2d5d13_33055576',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551c5a8b2d5d13_33055576')) {function content_551c5a8b2d5d13_33055576($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/block.style.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


html div.ow_console_list_wrapper
{
    min-height: 0px;
    max-height: 257px;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="ow_console clearfix">
    <div class="ow_console_body clearfix">
        <div style="ow_floatright">
            <?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value){
$_smarty_tpl->tpl_vars["item"]->_loop = true;
?>
                <?php echo $_smarty_tpl->tpl_vars['item']->value;?>

            <?php } ?>
        </div>
    </div>
</div><?php }} ?>