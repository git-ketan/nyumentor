<?php /* Smarty version Smarty-3.1.12, created on 2015-04-05 11:59:50
         compiled from "/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/comments_list.html" */ ?>
<?php /*%%SmartyHeaderCode:136722506855218626a38588-21722190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69694e6e19ebd0a05ca4e9873577f918a1e110a8' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/comments_list.html',
      1 => 1416930874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136722506855218626a38588-21722190',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cmpContext' => 0,
    'countToLoad' => 0,
    'loadMoreLabel' => 0,
    'noComments' => 0,
    'comments' => 0,
    'comment' => 0,
    'pages' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55218626bc76b5_89757693',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55218626bc76b5_89757693')) {function content_55218626bc76b5_89757693($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_decorator')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_modifier_more')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/modifier.more.php';
?><div id="<?php echo $_smarty_tpl->tpl_vars['cmpContext']->value;?>
">
    <div class="ow_comments_list">
        <?php if (!empty($_smarty_tpl->tpl_vars['countToLoad']->value)&&$_smarty_tpl->tpl_vars['countToLoad']->value>0){?>
        <div class="ow_comment_list_loader ow_feed_comments_viewall ow_small">
            <a href="javascript://">+<span><?php echo $_smarty_tpl->tpl_vars['countToLoad']->value;?>
</span> <?php echo $_smarty_tpl->tpl_vars['loadMoreLabel']->value;?>
</a>
        </div>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['noComments']->value)){?>
        <div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>"base+comment_no_comments"),$_smarty_tpl);?>
</div>
        <?php }else{ ?>
        <?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value){
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
        <div class="ow_comments_item clearfix">
            <div class="cnx_action" style="display: none"><?php echo $_smarty_tpl->tpl_vars['comment']->value['cnxAction'];?>
</div>
            <div class="ow_comments_item_picture">
                <?php echo smarty_function_decorator(array('name'=>'avatar_item','data'=>$_smarty_tpl->tpl_vars['comment']->value['avatar']),$_smarty_tpl);?>

            </div>
            <div class="ow_comments_item_info">
                <span class="<?php if (!empty($_smarty_tpl->tpl_vars['comment']->value['cnxAction'])){?>ow_comments_date_hover <?php }?>ow_comments_date ow_nowrap ow_tiny ow_remark"><?php echo $_smarty_tpl->tpl_vars['comment']->value['date'];?>
</span>
                <div class="ow_comments_item_header"><a href="<?php echo $_smarty_tpl->tpl_vars['comment']->value['profileUrl'];?>
"><?php echo $_smarty_tpl->tpl_vars['comment']->value['displayName'];?>
</a></div>
                <div class="ow_comments_content ow_smallmargin">
                    <?php if (!empty($_smarty_tpl->tpl_vars['comment']->value['previewMaxChar'])){?>
                    <?php echo smarty_modifier_more($_smarty_tpl->tpl_vars['comment']->value['content'],$_smarty_tpl->tpl_vars['comment']->value['previewMaxChar']);?>

                    <?php }else{ ?>
                    <?php echo $_smarty_tpl->tpl_vars['comment']->value['content'];?>

                    <?php }?>
                </div><?php echo $_smarty_tpl->tpl_vars['comment']->value['content_add'];?>

            </div>
        </div>
        <?php } ?>
        <?php }?>
    </div>
    <?php if (!empty($_smarty_tpl->tpl_vars['pages']->value)){?>
    <div class="ow_paging clearfix ow_stdmargin">
        <span><?php echo smarty_function_text(array('key'=>'base+pages_label'),$_smarty_tpl);?>
</span>
        <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
        <?php if (!isset($_smarty_tpl->tpl_vars['page']->value['pageIndex'])){?>
        <span><?php echo $_smarty_tpl->tpl_vars['page']->value['label'];?>
</span>
        <?php }else{ ?>
        <a href="javascript://" class="page-<?php echo $_smarty_tpl->tpl_vars['page']->value['pageIndex'];?>
<?php if (isset($_smarty_tpl->tpl_vars['page']->value['active'])&&$_smarty_tpl->tpl_vars['page']->value['active']){?> active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['page']->value['label'];?>
</a>
        <?php }?>
        <?php } ?>
    </div>
    <?php }?>
</div>
<?php }} ?>