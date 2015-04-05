<?php /* Smarty version Smarty-3.1.12, created on 2015-04-05 12:21:10
         compiled from "/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/total_score.html" */ ?>
<?php /*%%SmartyHeaderCode:20417319055218b26ea5cb4-42035414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2bfbd44395b617392c58d7714c4fef9c216c7f4' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/total_score.html',
      1 => 1416930874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20417319055218b26ea5cb4-42035414',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55218b26f3e302_16232968',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55218b26f3e302_16232968')) {function content_55218b26f3e302_16232968($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.text.php';
?><div class="ow_smallmargin"><?php echo smarty_function_text(array('key'=>'base+total_score_label','ratesCount'=>$_smarty_tpl->tpl_vars['info']->value['ratesCount'],'avgScore'=>$_smarty_tpl->tpl_vars['info']->value['avgScore']),$_smarty_tpl);?>

<div style="width:65px;margin:0 auto;">
	<div class="inactive_rate_list">
   	<div class="active_rate_list" style="width:<?php if ($_smarty_tpl->tpl_vars['info']->value['width']){?><?php echo $_smarty_tpl->tpl_vars['info']->value['width'];?>
<?php }else{ ?>0<?php }?>%;">
      </div>
   </div>
</div>
</div>
<?php }} ?>