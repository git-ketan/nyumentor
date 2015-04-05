<?php /* Smarty version Smarty-3.1.12, created on 2015-04-01 13:52:26
         compiled from "/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/avatar_user_list.html" */ ?>
<?php /*%%SmartyHeaderCode:522680345551c5a8a92cd23-29062260%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6f188211bf4cc6466aec647dbfca8a8d9edc51f' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/avatar_user_list.html',
      1 => 1416930874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '522680345551c5a8a92cd23-29062260',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'css_class' => 0,
    'users' => 0,
    'user' => 0,
    'view_more_array' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_551c5a8a9814f5_54934022',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551c5a8a9814f5_54934022')) {function content_551c5a8a9814f5_54934022($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_decorator')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.decorator.php';
?><div class="ow_lp_avatars<?php if (!empty($_smarty_tpl->tpl_vars['css_class']->value)){?> <?php echo $_smarty_tpl->tpl_vars['css_class']->value;?>
<?php }?>">
    <?php if (empty($_smarty_tpl->tpl_vars['users']->value)){?>
        <div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>'base+empty_user_avatar_list'),$_smarty_tpl);?>
</div>
    <?php }else{ ?>
        <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?><?php echo smarty_function_decorator(array('name'=>'avatar_item','data'=>$_smarty_tpl->tpl_vars['user']->value),$_smarty_tpl);?>
<?php } ?><?php if (!empty($_smarty_tpl->tpl_vars['view_more_array']->value)){?><a href="<?php echo $_smarty_tpl->tpl_vars['view_more_array']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['view_more_array']->value['title'];?>
" class="avatar_list_more_icon"></a><?php }?>
    <?php }?>
    
</div><?php }} ?>