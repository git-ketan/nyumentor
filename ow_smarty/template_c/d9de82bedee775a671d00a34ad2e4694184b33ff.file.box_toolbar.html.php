<?php /* Smarty version Smarty-3.1.12, created on 2015-04-05 12:10:32
         compiled from "/usr/local/ampps/www/nyumentor/ow_system_plugins/base/decorators/box_toolbar.html" */ ?>
<?php /*%%SmartyHeaderCode:1066447339552188a84e76f3-74751328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9de82bedee775a671d00a34ad2e4694184b33ff' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_system_plugins/base/decorators/box_toolbar.html',
      1 => 1416930874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1066447339552188a84e76f3-74751328',
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
  'unifunc' => 'content_552188a8538580_61267784',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552188a8538580_61267784')) {function content_552188a8538580_61267784($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/block.style.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.ow_box_toolbar span{
display:inline-block;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<ul class="ow_box_toolbar ow_remark ow_bl">
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['itemList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>    
    <li <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['id'])){?>id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['item']->value['display'])){?> style="display:<?php echo $_smarty_tpl->tpl_vars['item']->value['display'];?>
"<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['item']->value['class'])){?> class="<?php echo $_smarty_tpl->tpl_vars['item']->value['class'];?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['item']->value['title'])){?> title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"<?php }?>>
        <?php if (isset($_smarty_tpl->tpl_vars['item']->value['href'])){?>
        <a<?php if (isset($_smarty_tpl->tpl_vars['item']->value['click'])){?> onclick="<?php echo $_smarty_tpl->tpl_vars['item']->value['click'];?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['item']->value['rel'])){?> rel="<?php echo $_smarty_tpl->tpl_vars['item']->value['rel'];?>
"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['item']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</a>
        <?php }else{ ?>
        <?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>

        <?php }?>
    </li>
    <?php } ?>
</ul>


<?php }} ?>