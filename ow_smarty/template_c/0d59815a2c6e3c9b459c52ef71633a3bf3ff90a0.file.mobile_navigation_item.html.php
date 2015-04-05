<?php /* Smarty version Smarty-3.1.12, created on 2015-04-05 12:41:16
         compiled from "/usr/local/ampps/www/nyumentor/ow_system_plugins/admin/views/components/mobile_navigation_item.html" */ ?>
<?php /*%%SmartyHeaderCode:95228193055218fdc545839-92048419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d59815a2c6e3c9b459c52ef71633a3bf3ff90a0' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_system_plugins/admin/views/components/mobile_navigation_item.html',
      1 => 1416930874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95228193055218fdc545839-92048419',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55218fdc574767_85313585',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55218fdc574767_85313585')) {function content_55218fdc574767_85313585($_smarty_tpl) {?><div class="clearfix component <?php if (isset($_smarty_tpl->tpl_vars['item']->value['custom'])&&$_smarty_tpl->tpl_vars['item']->value['custom']){?>dnd-item-custom<?php }?>" data-key="<?php echo $_smarty_tpl->tpl_vars['item']->value['key'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['item']->value['type'])){?>data-type=<?php echo $_smarty_tpl->tpl_vars['item']->value['type'];?>
<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['item']->value['custom'])){?>data-custom=<?php echo $_smarty_tpl->tpl_vars['item']->value['custom'];?>
<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['item']->value['data'])){?>data-data="<?php echo $_smarty_tpl->tpl_vars['item']->value['data'];?>
"<?php }?>>
    <div class="schem_component dd_handle">
        <div class="ow_dnd_schem_item schem_component">
            <span class="ow_label dnd-title">
                <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>

            </span>
            <span class="action dnd-actions">
                <a class="ow_ic_gear_wheel dnd-control dd_edit" href="javascript://;" data-action="edit">&nbsp;</a>
                <a class="ow_ic_delete close dnd-control dd_delete" href="javascript://;" data-action="delete">&nbsp;</a>
            </span>
        </div>
    </div>
</div><?php }} ?>