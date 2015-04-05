<?php /* Smarty version Smarty-3.1.12, created on 2015-04-05 12:21:56
         compiled from "/usr/local/ampps/www/nyumentor/ow_plugins/newsfeed/views/formats/video.html" */ ?>
<?php /*%%SmartyHeaderCode:125354899555218b54b8e3f0-17183355%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87cfd5911df4c3e060849e53708a51a37dd86d45' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_plugins/newsfeed/views/formats/video.html',
      1 => 1416930876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125354899555218b54b8e3f0-17183355',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vars' => 0,
    'uniqId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55218b54bfbce1_61868782',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55218b54bfbce1_61868782')) {function content_55218b54bfbce1_61868782($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_modifier_more')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/modifier.more.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.ow_newsfeed_video_embed embed, .ow_newsfeed_video_embed object, .ow_newsfeed_video_embed iframe {
    height: 220px;
    width: 300px;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if (!empty($_smarty_tpl->tpl_vars['vars']->value['status'])){?><div class="ow_newsfeed_body_status ow_smallmargin"><?php echo smarty_modifier_more($_smarty_tpl->tpl_vars['vars']->value['status'],300);?>
</div><?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['vars']->value['image'])){?>
<div class="clearfix ow_newsfeed_oembed_atch" id="<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
">
    <div class="ow_newsfeed_item_picture">
        <a href="<?php if (!empty($_smarty_tpl->tpl_vars['vars']->value['url'])){?><?php echo $_smarty_tpl->tpl_vars['vars']->value['url'];?>
<?php }else{ ?>javascript://<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['vars']->value['image'];?>
" /><div class="ow_oembed_video_cover"></div></a>
    </div>
    <div class="ow_newsfeed_item_content">
        <a class="ow_newsfeed_item_title" href="<?php if (!empty($_smarty_tpl->tpl_vars['vars']->value['url'])){?><?php echo $_smarty_tpl->tpl_vars['vars']->value['url'];?>
<?php }else{ ?>javascript://<?php }?>"><?php echo $_smarty_tpl->tpl_vars['vars']->value['title'];?>
</a>
        <div class="ow_remark ow_smallmargin"><?php echo $_smarty_tpl->tpl_vars['vars']->value['description'];?>
</div>
        <div class="ow_newsfeed_action_activity event_newsfeed_activity">[ph:activity]</div>
    </div>
</div>
<?php }elseif(!empty($_smarty_tpl->tpl_vars['vars']->value['embed'])){?>
    <div class="ow_newsfeed_video_embed" id="<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['vars']->value['embed'];?>
</div>
    <div class="ow_newsfeed_action_activity event_newsfeed_activity">[ph:activity]</div>
<?php }?><?php }} ?>