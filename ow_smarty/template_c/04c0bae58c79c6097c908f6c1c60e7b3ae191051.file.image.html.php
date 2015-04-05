<?php /* Smarty version Smarty-3.1.12, created on 2015-04-05 12:11:20
         compiled from "/usr/local/ampps/www/nyumentor/ow_plugins/newsfeed/views/formats/image.html" */ ?>
<?php /*%%SmartyHeaderCode:1722818972552188d82db355-99666584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04c0bae58c79c6097c908f6c1c60e7b3ae191051' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_plugins/newsfeed/views/formats/image.html',
      1 => 1416930876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1722818972552188d82db355-99666584',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_552188d8313045_23704304',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552188d8313045_23704304')) {function content_552188d8313045_23704304($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_more')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/modifier.more.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['vars']->value['status'])){?><div class="ow_newsfeed_body_status ow_smallmargin"><?php echo smarty_modifier_more($_smarty_tpl->tpl_vars['vars']->value['status'],300);?>
</div><?php }?>

<div class="ow_newsfeed_large_image clearfix">
    <div class="ow_newsfeed_item_picture">
        <a <?php if (empty($_smarty_tpl->tpl_vars['vars']->value['url'])){?>href="<?php echo $_smarty_tpl->tpl_vars['vars']->value['image'];?>
" onclick="OW.showImageInFloatBox(this.href); return false;"<?php }else{ ?>href="<?php echo $_smarty_tpl->tpl_vars['vars']->value['url'];?>
"<?php }?>>
            <img src="<?php echo $_smarty_tpl->tpl_vars['vars']->value['image'];?>
"></a>
    </div>
</div><?php }} ?>