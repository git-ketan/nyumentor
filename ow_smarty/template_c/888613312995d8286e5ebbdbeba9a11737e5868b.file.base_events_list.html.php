<?php /* Smarty version Smarty-3.1.12, created on 2015-04-01 14:26:10
         compiled from "/usr/local/ampps/www/nyumentor/ow_plugins/event/views/controllers/base_events_list.html" */ ?>
<?php /*%%SmartyHeaderCode:1197169143551c6272632c66-79815909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '888613312995d8286e5ebbdbeba9a11737e5868b' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_plugins/event/views/controllers/base_events_list.html',
      1 => 1416930878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1197169143551c6272632c66-79815909',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listType' => 0,
    'noButton' => 0,
    'contentMenu' => 0,
    'no_events' => 0,
    'events' => 0,
    'event' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_551c62727000b2_89846103',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551c62727000b2_89846103')) {function content_551c62727000b2_89846103($_smarty_tpl) {?><?php if (!is_callable('smarty_function_add_content')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.add_content.php';
if (!is_callable('smarty_function_decorator')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_function_text')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.text.php';
?>
<div class="clearfix"><?php echo smarty_function_add_content(array('key'=>'event.add_content.list.top','listType'=>$_smarty_tpl->tpl_vars['listType']->value),$_smarty_tpl);?>
</div>

<?php if (empty($_smarty_tpl->tpl_vars['noButton']->value)){?><div class="ow_right"><?php echo smarty_function_decorator(array('name'=>'button','class'=>'ow_ic_add add_event_button','langLabel'=>'event+add_new_button_label'),$_smarty_tpl);?>
</div><?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['contentMenu']->value)){?><?php echo $_smarty_tpl->tpl_vars['contentMenu']->value;?>
<?php }?>

<?php echo smarty_function_add_content(array('key'=>'event.content.list.after_menu','listType'=>$_smarty_tpl->tpl_vars['listType']->value),$_smarty_tpl);?>


<div class="ow_event_list clearfix">
    <div class="ow_automargin ow_superwide">
      <?php if (!empty($_smarty_tpl->tpl_vars['no_events']->value)){?>
        <div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>"event+no_events_label"),$_smarty_tpl);?>
</div>
      <?php }else{ ?>
          <?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
$_smarty_tpl->tpl_vars['event']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['event']->key;
?>
                <?php echo smarty_function_decorator(array('name'=>'ipc','addClass'=>'ow_smallmargin','data'=>$_smarty_tpl->tpl_vars['event']->value,'infoString'=>"<a href=\"".((string)$_smarty_tpl->tpl_vars['event']->value['eventUrl'])."\">".((string)$_smarty_tpl->tpl_vars['event']->value['title'])."</a>"),$_smarty_tpl);?>

          <?php } ?>
          <br />
          <?php echo $_smarty_tpl->tpl_vars['paging']->value;?>

      <?php }?>
    </div>
</div>

<div class="clearfix"><?php echo smarty_function_add_content(array('key'=>'event.add_content.list.bottom','listType'=>$_smarty_tpl->tpl_vars['listType']->value),$_smarty_tpl);?>
</div><?php }} ?>