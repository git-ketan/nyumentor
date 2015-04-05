<?php /* Smarty version Smarty-3.1.12, created on 2015-04-05 12:21:11
         compiled from "/usr/local/ampps/www/nyumentor/ow_plugins/video/views/controllers/video_view.html" */ ?>
<?php /*%%SmartyHeaderCode:9278846355218b270f0fd3-88478942%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4666fe55e21ac3f5134dd9ebc983df3f7b2624d8' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_plugins/video/views/controllers/video_view.html',
      1 => 1416930878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9278846355218b270f0fd3-88478942',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'toolbar' => 0,
    'clip' => 0,
    'comments' => 0,
    'username' => 0,
    'displayName' => 0,
    'rate' => 0,
    'tags' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55218b2719d465_52067472',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55218b2719d465_52067472')) {function content_55218b2719d465_52067472($_smarty_tpl) {?><?php if (!is_callable('smarty_block_block_decorator')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/block.block_decorator.php';
if (!is_callable('smarty_function_component')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.component.php';
if (!is_callable('smarty_function_add_content')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.add_content.php';
if (!is_callable('smarty_function_text')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_user_link')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.user_link.php';
if (!is_callable('smarty_function_format_date')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.format_date.php';
?><div class="clearfix">
	<div class="ow_superwide ow_left">

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','type'=>'empty','addClass'=>'ow_video_player ow_stdmargin','toolbar'=>$_smarty_tpl->tpl_vars['toolbar']->value)); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>'ow_video_player ow_stdmargin','toolbar'=>$_smarty_tpl->tpl_vars['toolbar']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php echo smarty_function_component(array('class'=>'VIDEO_CMP_VideoPlayer','id'=>$_smarty_tpl->tpl_vars['clip']->value->id),$_smarty_tpl);?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>'ow_video_player ow_stdmargin','toolbar'=>$_smarty_tpl->tpl_vars['toolbar']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	   <div class="ow_video_description ow_stdmargin"><?php echo $_smarty_tpl->tpl_vars['clip']->value->description;?>
</div>
       <?php echo smarty_function_add_content(array('key'=>'socialsharing.get_sharing_buttons','title'=>$_smarty_tpl->tpl_vars['clip']->value->title,'description'=>$_smarty_tpl->tpl_vars['clip']->value->description,'entityType'=>'video','entityId'=>$_smarty_tpl->tpl_vars['clip']->value->id),$_smarty_tpl);?>


       <?php echo smarty_function_add_content(array('key'=>'video.video_view.content.between_video_and_wall'),$_smarty_tpl);?>

	   <?php echo $_smarty_tpl->tpl_vars['comments']->value;?>

	</div>

	<div class="ow_supernarrow ow_right">
       <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','iconClass'=>'ow_ic_video','langLabel'=>'video+video_info','addClass'=>'ow_small ow_stdmargin')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','iconClass'=>'ow_ic_video','langLabel'=>'video+video_info','addClass'=>'ow_small ow_stdmargin'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	       <table class="ow_table_3 ow_nomargin">
	           <tr class="ow_tr_first">
	               <td class="ow_label"><?php echo smarty_function_text(array('key'=>'base+by'),$_smarty_tpl);?>
</td>
	               <td><?php if ($_smarty_tpl->tpl_vars['username']->value&&$_smarty_tpl->tpl_vars['displayName']->value){?><?php echo smarty_function_user_link(array('username'=>$_smarty_tpl->tpl_vars['username']->value,'name'=>$_smarty_tpl->tpl_vars['displayName']->value),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['displayName']->value;?>
<?php }?></td>
	           </tr>
	           <tr class="ow_tr_last">
	               <td class="ow_label"><?php echo smarty_function_text(array('key'=>'video+added'),$_smarty_tpl);?>
</td>
	               <td><?php echo smarty_function_format_date(array('timestamp'=>$_smarty_tpl->tpl_vars['clip']->value->addDatetime),$_smarty_tpl);?>
</td>
	           </tr>
	       </table>
	   <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','iconClass'=>'ow_ic_video','langLabel'=>'video+video_info','addClass'=>'ow_small ow_stdmargin'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


       <?php echo smarty_function_component(array('class'=>'VIDEO_CMP_OtherVideoList','exclude'=>$_smarty_tpl->tpl_vars['clip']->value->id,'itemsNum'=>3),$_smarty_tpl);?>


	   <?php if (!empty($_smarty_tpl->tpl_vars['rate']->value)){?><?php echo $_smarty_tpl->tpl_vars['rate']->value;?>
<?php }?>
           <?php if (!empty($_smarty_tpl->tpl_vars['tags']->value)){?><?php echo $_smarty_tpl->tpl_vars['tags']->value;?>
<?php }?>
	</div>
</div><?php }} ?>