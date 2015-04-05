<?php /* Smarty version Smarty-3.1.12, created on 2015-04-01 13:58:56
         compiled from "/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/console_list.html" */ ?>
<?php /*%%SmartyHeaderCode:185988755551c5c10604b98-31070233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11b9b9656f2cdda29cb522ecd53306fed517e2cb' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/console_list.html',
      1 => 1416930874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185988755551c5c10604b98-31070233',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'viewAll' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_551c5c1064c5b6_20975192',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551c5c1064c5b6_20975192')) {function content_551c5c1064c5b6_20975192($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.text.php';
?><div class="ow_console_list_wrapper OW_ConsoleListContainer">
    <div class="ow_nocontent OW_ConsoleListNoContent"><?php echo smarty_function_text(array('key'=>'base+no_items'),$_smarty_tpl);?>
</div>
    <ul class="ow_console_list OW_ConsoleList">

    </ul>
    <div class="ow_preloader_content ow_console_list_preloader OW_ConsoleListPreloader" style="visibility: hidden"></div>
</div>

<?php if (!empty($_smarty_tpl->tpl_vars['viewAll']->value)){?>
    <div class="ow_console_view_all_btn_wrap"><a href="<?php echo $_smarty_tpl->tpl_vars['viewAll']->value['url'];?>
" class="ow_console_view_all_btn"><?php echo $_smarty_tpl->tpl_vars['viewAll']->value['label'];?>
</a></div>
<?php }?>
<?php }} ?>