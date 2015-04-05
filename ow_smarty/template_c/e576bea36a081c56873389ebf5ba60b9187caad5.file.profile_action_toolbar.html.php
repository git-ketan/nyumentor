<?php /* Smarty version Smarty-3.1.12, created on 2015-04-01 14:26:29
         compiled from "/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/profile_action_toolbar.html" */ ?>
<?php /*%%SmartyHeaderCode:1254840212551c62857999f5-32230911%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e576bea36a081c56873389ebf5ba60b9187caad5' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/profile_action_toolbar.html',
      1 => 1416930874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1254840212551c62857999f5-32230911',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'toolbar' => 0,
    'action' => 0,
    'groups' => 0,
    'group' => 0,
    'cmpsMarkup' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_551c628581d8e7_49905521',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551c628581d8e7_49905521')) {function content_551c628581d8e7_49905521($_smarty_tpl) {?><div class="ow_profile_gallery_action_toolbar ow_profile_action_toolbar_wrap clearfix ow_stdmargin">
    <ul class="ow_bl ow_profile_action_toolbar clearfix ow_small ow_left">
        <?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['toolbar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value){
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
            <li>
                <a <?php echo $_smarty_tpl->tpl_vars['action']->value['attrs'];?>
 >
                    <?php echo $_smarty_tpl->tpl_vars['action']->value['label'];?>

                </a>
            </li>
        <?php } ?>
    </ul>

    <?php  $_smarty_tpl->tpl_vars["group"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["group"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["group"]->key => $_smarty_tpl->tpl_vars["group"]->value){
$_smarty_tpl->tpl_vars["group"]->_loop = true;
?>
        <?php echo $_smarty_tpl->tpl_vars['group']->value;?>

    <?php } ?>

    <?php echo $_smarty_tpl->tpl_vars['cmpsMarkup']->value;?>

</div>
<?php }} ?>