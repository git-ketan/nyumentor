<?php /* Smarty version Smarty-3.1.12, created on 2015-04-01 13:52:26
         compiled from "/usr/local/ampps/www/nyumentor/ow_system_plugins/base/decorators/avatar_item.html" */ ?>
<?php /*%%SmartyHeaderCode:381960222551c5a8a98b506-33012204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca3e1e5326d9578a184ba314e4bdaa70c910efd3' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_system_plugins/base/decorators/avatar_item.html',
      1 => 1416930874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '381960222551c5a8a98b506-33012204',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_551c5a8ab31350_30019620',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551c5a8ab31350_30019620')) {function content_551c5a8ab31350_30019620($_smarty_tpl) {?>
<div class="ow_avatar<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['class'])){?> <?php echo $_smarty_tpl->tpl_vars['data']->value['class'];?>
<?php }?>">
<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['url'])){?>
<a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['url'];?>
"><img alt=""<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['title'])){?> title="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
"<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['attrs'])){?><?php echo $_smarty_tpl->tpl_vars['data']->value['attrs'];?>
<?php }?> src="<?php echo $_smarty_tpl->tpl_vars['data']->value['src'];?>
" /></a>
<?php }else{ ?>
<img alt="" <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['title'])){?> title="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
"<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['attrs'])){?><?php echo $_smarty_tpl->tpl_vars['data']->value['attrs'];?>
<?php }?> src="<?php echo $_smarty_tpl->tpl_vars['data']->value['src'];?>
" />
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['label'])){?><span class="ow_avatar_label"<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['labelColor'])){?> style="background-color: <?php echo $_smarty_tpl->tpl_vars['data']->value['labelColor'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['data']->value['label'];?>
</span><?php }?>
</div><?php }} ?>