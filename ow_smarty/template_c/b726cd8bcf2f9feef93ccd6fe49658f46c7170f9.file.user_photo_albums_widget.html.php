<?php /* Smarty version Smarty-3.1.12, created on 2015-04-05 12:23:03
         compiled from "/usr/local/ampps/www/nyumentor/ow_plugins/photo/views/components/user_photo_albums_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:80040490955218b972f5301-86499535%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b726cd8bcf2f9feef93ccd6fe49658f46c7170f9' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_plugins/photo/views/components/user_photo_albums_widget.html',
      1 => 1416930878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80040490955218b972f5301-86499535',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'showTitles' => 0,
    'albums' => 0,
    'user' => 0,
    'album' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55218b974b5c62_69128816',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55218b974b5c62_69128816')) {function content_55218b974b5c62_69128816($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url_for_route')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.url_for_route.php';
if (!is_callable('smarty_function_text')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.text.php';
?><div class="clearfix ow_lp_albums">	
    <?php if ($_smarty_tpl->tpl_vars['showTitles']->value){?>
	<?php  $_smarty_tpl->tpl_vars['album'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['album']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['albums']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['album']->key => $_smarty_tpl->tpl_vars['album']->value){
$_smarty_tpl->tpl_vars['album']->_loop = true;
?>
            <div class="clearfix ow_smallmargin">
                <div class="ow_lp_wrapper">
		   <?php $_smarty_tpl->_capture_stack[0][] = array('url', null, null); ob_start(); ?><?php echo smarty_function_url_for_route(array('for'=>"photo_user_album:[user=>".((string)$_smarty_tpl->tpl_vars['user']->value).", album=>".((string)$_smarty_tpl->tpl_vars['album']->value['dto']->id)."]"),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		   <a href="<?php echo Smarty::$_smarty_vars['capture']['url'];?>
"><img title="<?php echo $_smarty_tpl->tpl_vars['album']->value['dto']->name;?>
" src="<?php echo $_smarty_tpl->tpl_vars['album']->value['cover'];?>
" width="100" height="100" /></a>
                </div>
                <div class="ow_lp_label ow_small">
                    <a href="<?php echo Smarty::$_smarty_vars['capture']['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['album']->value['dto']->name;?>
</a>
                </div>
            </div>
	<?php }
if (!$_smarty_tpl->tpl_vars['album']->_loop) {
?>
	    <div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>'photo+no_photo_found'),$_smarty_tpl);?>
</div>
	<?php } ?>
    <?php }else{ ?>
        <div class="ow_lp_photos ow_center">
            <?php  $_smarty_tpl->tpl_vars['album'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['album']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['albums']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['album']->key => $_smarty_tpl->tpl_vars['album']->value){
$_smarty_tpl->tpl_vars['album']->_loop = true;
?>
                <?php $_smarty_tpl->_capture_stack[0][] = array('url', null, null); ob_start(); ?>
                    <?php echo smarty_function_url_for_route(array('for'=>"photo_user_album:[user=>".((string)$_smarty_tpl->tpl_vars['user']->value).", album=>".((string)$_smarty_tpl->tpl_vars['album']->value['dto']->id)."]"),$_smarty_tpl);?>

                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                <a class="ow_lp_wrapper" href="<?php echo Smarty::$_smarty_vars['capture']['url'];?>
"><img title="<?php echo $_smarty_tpl->tpl_vars['album']->value['dto']->name;?>
" src="<?php echo $_smarty_tpl->tpl_vars['album']->value['cover'];?>
" /></a>
            <?php }
if (!$_smarty_tpl->tpl_vars['album']->_loop) {
?>
                <div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>'photo+no_photo_found'),$_smarty_tpl);?>
</div>
            <?php } ?>
    </div>
<?php }?>
</div><?php }} ?>