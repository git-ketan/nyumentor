<?php /* Smarty version Smarty-3.1.12, created on 2015-04-01 14:26:04
         compiled from "/usr/local/ampps/www/nyumentor/ow_plugins/photo/views/components/sort_control.html" */ ?>
<?php /*%%SmartyHeaderCode:2041382798551c626c722009-27441081%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '354ced85654c668e0c6df4bb24ea1fb5b48a943c' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_plugins/photo/views/components/sort_control.html',
      1 => 1416930878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2041382798551c626c722009-27441081',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'itemList' => 0,
    'item' => 0,
    'key' => 0,
    'initSearchEngine' => 0,
    'tag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_551c626c839029_86747455',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551c626c839029_86747455')) {function content_551c626c839029_86747455($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.text.php';
?>

<div class="ow_box_menu ow_fw_menu">
    <span class="ow_explore_photos_show"><?php echo smarty_function_text(array('key'=>"photo+show_by"),$_smarty_tpl);?>
:</span>
    <div class="ow_fw_btns">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['itemList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" list-type="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['isActive']){?> class="active"<?php }?>>
                <span><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</span>
            </a>
        <?php } ?>
    </div>
    <?php if (!empty($_smarty_tpl->tpl_vars['initSearchEngine']->value)){?>
        <div id="photo-list-search" class="ow_right">
            <div class="ow_searchbar clearfix">
                <div class="ow_searchbar_input ow_left">
                    <input id="search-photo" type="text" class="invitation" value="<?php if (!empty($_smarty_tpl->tpl_vars['tag']->value)){?><?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
<?php }else{ ?><?php echo smarty_function_text(array('key'=>'photo+search_invitation'),$_smarty_tpl);?>
<?php }?>">
                    <div class="ow_searchbar_ac_wrap">
                        <ul class="ow_searchbar_ac" style="display: none"></ul>
                        <div class="ow_hidden">
                            <li class="hash-prototype browse-photo-search clearfix" style="display: none">
                                <div class="ow_search_result_tag"></div>
                                <span class="ow_searchbar_ac_count ow_right"></span>
                            </li>
                            <li class="user-prototype browse-photo-search clearfix" style="display: none">
                                <div class="ow_search_result_user ow_mini_avatar ow_left">
                                    <div class="ow_avatar">
                                        <img style="max-width: 100%;" alt="" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D">
                                    </div>
                                    <span class="ow_searchbar_username ow_small"></span>
                                </div>
                                <span class="ow_searchbar_ac_count ow_right"></span>
                            </li>
                        </div>
                    </div>
                    <div class="ow_btn_close_search"></div>
                </div>
                <span class="ow_searchbar_btn ow_ic_lens ow_cursor_pointer ow_left"></span>
            </div>
        </div>
    <?php }?>
</div>
<?php }} ?>