<?php /* Smarty version Smarty-3.1.12, created on 2015-04-01 14:26:07
         compiled from "/usr/local/ampps/www/nyumentor/ow_plugins/video/views/controllers/video_view_list.html" */ ?>
<?php /*%%SmartyHeaderCode:88779752551c626fd6c969-81903202%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a839297cd6040839890ffbb572a96a0fbd6d58a9' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_plugins/video/views/controllers/video_view_list.html',
      1 => 1416930878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88779752551c626fd6c969-81903202',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listType' => 0,
    'showAddButton' => 0,
    'videoMenu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_551c626fe0ba90_01446996',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551c626fe0ba90_01446996')) {function content_551c626fe0ba90_01446996($_smarty_tpl) {?><?php if (!is_callable('smarty_function_add_content')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.add_content.php';
if (!is_callable('smarty_function_decorator')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_function_component')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.component.php';
?><div class="clearfix"><?php echo smarty_function_add_content(array('key'=>'video.add_content.list.top','listType'=>$_smarty_tpl->tpl_vars['listType']->value),$_smarty_tpl);?>
</div>

<?php if ($_smarty_tpl->tpl_vars['showAddButton']->value){?>
    <div class="ow_right"><?php echo smarty_function_decorator(array('name'=>'button','class'=>'ow_ic_add','id'=>'btn-add-new-video','langLabel'=>'video+add_new'),$_smarty_tpl);?>
</div>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['videoMenu']->value;?>


<?php echo smarty_function_add_content(array('key'=>'video.content.list.after_menu','listType'=>$_smarty_tpl->tpl_vars['listType']->value),$_smarty_tpl);?>


<?php echo smarty_function_component(array('class'=>'VIDEO_CMP_VideoList','type'=>$_smarty_tpl->tpl_vars['listType']->value,'count'=>5),$_smarty_tpl);?>


<?php echo smarty_function_add_content(array('key'=>'video.content.list.bottom','listType'=>$_smarty_tpl->tpl_vars['listType']->value),$_smarty_tpl);?>
<?php }} ?>