<?php /* Smarty version Smarty-3.1.12, created on 2015-04-05 12:23:03
         compiled from "/usr/local/ampps/www/nyumentor/ow_plugins/video/views/components/user_video_list_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:126428999955218b97544783-60322636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87c599630985adf300a720494e2d9d6ccf1bd7b2' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_plugins/video/views/components/user_video_list_widget.html',
      1 => 1416930878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126428999955218b97544783-60322636',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'showTitles' => 0,
    'clips' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55218b97675bc2_69292277',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55218b97675bc2_69292277')) {function content_55218b97675bc2_69292277($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url_for_route')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.url_for_route.php';
if (!is_callable('smarty_function_text')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.text.php';
?>
<div class="ow_other_video_list">
    <?php if ($_smarty_tpl->tpl_vars['showTitles']->value){?>
		<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['clips']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['clips']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['clips']['iteration']++;
?>
		<div class="ow_other_video_list_item ow_smallmargin clearfix">
            <div class="ow_other_video_thumb ow_left">
	            <a href="<?php echo smarty_function_url_for_route(array('for'=>"view_clip:[id=>".((string)$_smarty_tpl->tpl_vars['c']->value['id'])."]"),$_smarty_tpl);?>
">
	                <?php if ($_smarty_tpl->tpl_vars['c']->value['thumb']!='undefined'){?><img src="<?php echo $_smarty_tpl->tpl_vars['c']->value['thumb'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['c']->value['title'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['c']->value['title'];?>
" /><?php }?>
	            </a>
            </div>
            <div class="ow_other_video_item_title ow_small"><a href="<?php echo smarty_function_url_for_route(array('for'=>"view_clip:[id=>".((string)$_smarty_tpl->tpl_vars['c']->value['id'])."]"),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['title'];?>
</a></div>
		</div>
		<?php }
if (!$_smarty_tpl->tpl_vars['c']->_loop) {
?>
            <div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>'video+no_video_found'),$_smarty_tpl);?>
</div>
		<?php } ?>
    <?php }else{ ?>
    <div class="clearfix ow_center">
        <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['clips']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['clips']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['clips']['iteration']++;
?>
        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['clips']['iteration']==1){?>
            <div class="ow_smallmargin"><?php echo $_smarty_tpl->tpl_vars['c']->value['code'];?>
</div>
        <?php }else{ ?>
	        <a class="ow_other_video_floated" href="<?php echo smarty_function_url_for_route(array('for'=>"view_clip:[id=>".((string)$_smarty_tpl->tpl_vars['c']->value['id'])."]"),$_smarty_tpl);?>
">
	            <?php if ($_smarty_tpl->tpl_vars['c']->value['thumb']!='undefined'){?><img src="<?php echo $_smarty_tpl->tpl_vars['c']->value['thumb'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['c']->value['title'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['c']->value['title'];?>
" /><?php }?>
	        </a>
        <?php }?>
        <?php }
if (!$_smarty_tpl->tpl_vars['c']->_loop) {
?>
            <div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>'video+no_video_found'),$_smarty_tpl);?>
</div>
        <?php } ?>
    </div>        
    <?php }?>
</div><?php }} ?>