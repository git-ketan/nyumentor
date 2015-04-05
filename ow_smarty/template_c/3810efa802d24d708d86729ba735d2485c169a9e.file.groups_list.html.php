<?php /* Smarty version Smarty-3.1.12, created on 2015-04-01 14:26:01
         compiled from "/usr/local/ampps/www/nyumentor/ow_plugins/groups/views/controllers/groups_list.html" */ ?>
<?php /*%%SmartyHeaderCode:848983761551c6269897879-44532061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3810efa802d24d708d86729ba735d2485c169a9e' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_plugins/groups/views/controllers/groups_list.html',
      1 => 1416930878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '848983761551c6269897879-44532061',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listType' => 0,
    'hideCreateNew' => 0,
    'showCreate' => 0,
    'authMsg' => 0,
    'menu' => 0,
    'list' => 0,
    'group' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_551c6269b58261_99253577',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551c6269b58261_99253577')) {function content_551c6269b58261_99253577($_smarty_tpl) {?><?php if (!is_callable('smarty_function_add_content')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.add_content.php';
if (!is_callable('smarty_function_decorator')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.decorator.php';
if (!is_callable('smarty_block_script')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/block.script.php';
if (!is_callable('smarty_function_url_for_route')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.url_for_route.php';
if (!is_callable('smarty_function_text')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.text.php';
?><div class="clearfix"><?php echo smarty_function_add_content(array('key'=>'groups.add_content.list.top','listType'=>$_smarty_tpl->tpl_vars['listType']->value),$_smarty_tpl);?>
</div>

<?php if (empty($_smarty_tpl->tpl_vars['hideCreateNew']->value)&&!empty($_smarty_tpl->tpl_vars['showCreate']->value)){?>
    <div class="ow_right"><?php echo smarty_function_decorator(array('name'=>'button','class'=>'ow_ic_add','id'=>'btn-create-new-group','langLabel'=>'groups+add_new'),$_smarty_tpl);?>
</div>
    <?php if (!empty($_smarty_tpl->tpl_vars['authMsg']->value)){?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            $('#btn-create-new-group').click(function() { OW.authorizationLimitedFloatbox(<?php echo $_smarty_tpl->tpl_vars['authMsg']->value;?>
); });
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }else{ ?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                $('#btn-create-new-group').click(function(){location.href='<?php echo smarty_function_url_for_route(array('for'=>"groups-create"),$_smarty_tpl);?>
'})
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>
<?php }?>


<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>


<?php echo smarty_function_add_content(array('key'=>'groups.content.list.after_menu','listType'=>$_smarty_tpl->tpl_vars['listType']->value),$_smarty_tpl);?>


<div class="ow_group_list clearfix">
    <div class="ow_automargin ow_superwide">
      <?php if (empty($_smarty_tpl->tpl_vars['list']->value)){?>
        <div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>"groups+listing_no_items_msg"),$_smarty_tpl);?>
</div>
      <?php }else{ ?>
          <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value){
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['group']->key;
?>
                <?php echo smarty_function_decorator(array('name'=>'ipc','addClass'=>'ow_smallmargin','data'=>$_smarty_tpl->tpl_vars['group']->value,'infoString'=>"<a href=\"".((string)$_smarty_tpl->tpl_vars['group']->value['url'])."\">".((string)$_smarty_tpl->tpl_vars['group']->value['title'])."</a>"),$_smarty_tpl);?>

          <?php } ?>
          <br />
          <?php echo $_smarty_tpl->tpl_vars['paging']->value;?>

      <?php }?>
    </div>
</div>

<div class="clearfix"><?php echo smarty_function_add_content(array('key'=>'groups.add_content.list.bottom','listType'=>$_smarty_tpl->tpl_vars['listType']->value),$_smarty_tpl);?>
</div><?php }} ?>