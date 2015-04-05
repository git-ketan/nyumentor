<?php /* Smarty version Smarty-3.1.12, created on 2015-04-01 13:58:56
         compiled from "/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/console_dropdown_list.html" */ ?>
<?php /*%%SmartyHeaderCode:1744368245551c5c1067c106-38176583%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02608595681c1ec1eeef6e0b99529a147b126682' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/console_dropdown_list.html',
      1 => 1416930874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1744368245551c5c1067c106-38176583',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'label' => 0,
    'counter' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_551c5c10703947_61854387',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551c5c10703947_61854387')) {function content_551c5c10703947_61854387($_smarty_tpl) {?><a href="javascript://" class="ow_console_item_link"><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</a>

<span <?php if (empty($_smarty_tpl->tpl_vars['counter']->value['number'])){?>style="display: none;"<?php }?> class="ow_count_wrap OW_ConsoleItemCounter" >
    <span class="<?php if ($_smarty_tpl->tpl_vars['counter']->value['active']){?>ow_count_active<?php }?> ow_count_bg OW_ConsoleItemCounterPlace">
        <span class="ow_count OW_ConsoleItemCounterNumber" <?php if (empty($_smarty_tpl->tpl_vars['counter']->value['number'])){?>style="visibility: hidden;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['counter']->value['number'];?>
</span>
    </span>
</span>
<?php }} ?>