<?php /* Smarty version Smarty-3.1.12, created on 2015-04-05 12:43:21
         compiled from "/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:209761652155219059215b47-03716456%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1132786bbac8adee76184c42571066237ebd939b' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/sidebar.html',
      1 => 1416930874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209761652155219059215b47-03716456',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'componentList' => 0,
    'component' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5521905925f513_24692746',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5521905925f513_24692746')) {function content_5521905925f513_24692746($_smarty_tpl) {?><?php if (!is_callable('smarty_block_script')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/block.script.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    DND_InterfaceFix.fix('.ow_sidebar');
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php  $_smarty_tpl->tpl_vars["component"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["component"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['componentList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["component"]->key => $_smarty_tpl->tpl_vars["component"]->value){
$_smarty_tpl->tpl_vars["component"]->_loop = true;
?>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sb_component'][0][0]->tplComponent(array('uniqName'=>$_smarty_tpl->tpl_vars['component']->value['uniqName']),$_smarty_tpl);?>

<?php } ?><?php }} ?>