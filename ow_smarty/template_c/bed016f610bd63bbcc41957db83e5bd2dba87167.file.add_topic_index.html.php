<?php /* Smarty version Smarty-3.1.12, created on 2015-04-05 12:09:36
         compiled from "/usr/local/ampps/www/nyumentor/ow_plugins/forum/views/controllers/add_topic_index.html" */ ?>
<?php /*%%SmartyHeaderCode:40855870755218870c374d4-03470933%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bed016f610bd63bbcc41957db83e5bd2dba87167' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_plugins/forum/views/controllers/add_topic_index.html',
      1 => 1416930876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40855870755218870c374d4-03470933',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isHidden' => 0,
    'componentForumCaption' => 0,
    'breadcrumb' => 0,
    'authMsg' => 0,
    'enableAttachments' => 0,
    'attachments' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55218870ce3229_01866352',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55218870ce3229_01866352')) {function content_55218870ce3229_01866352($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_text')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_input')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_error')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.error.php';
if (!is_callable('smarty_function_label')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.label.php';
if (!is_callable('smarty_function_submit')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.submit.php';
?><?php if ($_smarty_tpl->tpl_vars['isHidden']->value){?>
    <div class="ow_stdmargin">
        <?php echo $_smarty_tpl->tpl_vars['componentForumCaption']->value;?>

    </div>
<?php echo $_smarty_tpl->tpl_vars['breadcrumb']->value;?>

<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['authMsg']->value){?>
<div class="ow_automargin ow_superwide">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'add-topic-form')); $_block_repeat=true; echo smarty_block_form(array('name'=>'add-topic-form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <table class="ow_table_1 ow_form ow_stdmargin">
        <tr class="ow_alt2 ow_tr_first">
            <td class="ow_label"><?php echo smarty_function_text(array('key'=>'forum+new_topic_subject'),$_smarty_tpl);?>
</td>
            <td class="ow_value">
			<?php echo smarty_function_input(array('name'=>'title'),$_smarty_tpl);?>

			<?php echo smarty_function_error(array('name'=>'title'),$_smarty_tpl);?>

            </td>
        </tr>
        <?php if ($_smarty_tpl->tpl_vars['isHidden']->value){?>
        <?php echo smarty_function_input(array('name'=>'group'),$_smarty_tpl);?>

        <?php }else{ ?>
        <tr class="ow_alt1">
            <td class="ow_label"><?php echo smarty_function_text(array('key'=>'forum+new_topic_group'),$_smarty_tpl);?>
</td>
            <td class="ow_value">
                <?php echo smarty_function_input(array('name'=>'group'),$_smarty_tpl);?>

                <?php echo smarty_function_error(array('name'=>'group'),$_smarty_tpl);?>

            </td>
        </tr>
        <?php }?>
        <tr class="ow_alt2 <?php if (!$_smarty_tpl->tpl_vars['enableAttachments']->value){?>ow_tr_last<?php }?>">
            <td class="ow_label"><?php echo smarty_function_text(array('key'=>'forum+new_topic_body'),$_smarty_tpl);?>
</td>
            <td class="ow_value">
			<?php echo smarty_function_input(array('name'=>'text','class'=>'ow_forum_post_area','id'=>'post_body'),$_smarty_tpl);?>

			<?php echo smarty_function_error(array('name'=>'text'),$_smarty_tpl);?>

            <?php if ($_smarty_tpl->tpl_vars['enableAttachments']->value){?><?php echo $_smarty_tpl->tpl_vars['attachments']->value;?>
<?php }?>
            </td>
        </tr>
        <tr class="ow_alt1">
            <td class="ow_label"><?php echo smarty_function_label(array('name'=>'subscribe'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>'subscribe'),$_smarty_tpl);?>
</td>
        </tr>
    </table>
    <div class="clearfix ow_stdmargin">
        <div class="ow_right">
            <?php echo smarty_function_submit(array('name'=>'post','class'=>'ow_positive'),$_smarty_tpl);?>

        </div>    
    </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'add-topic-form'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>
<?php }else{ ?>
    <div class="ow_anno ow_std_margin ow_nocontent"><?php echo $_smarty_tpl->tpl_vars['authMsg']->value;?>
</div>
<?php }?>
<?php }} ?>