<?php /* Smarty version Smarty-3.1.12, created on 2015-04-01 14:26:29
         compiled from "/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/user_view_widget_table.html" */ ?>
<?php /*%%SmartyHeaderCode:242210873551c6285678405-28420612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe9f4cc790646ca87d3c77f2204a687526d81fc4' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/user_view_widget_table.html',
      1 => 1416930874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '242210873551c6285678405-28420612',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ownerMode' => 0,
    'adminMode' => 0,
    'superAdminProfile' => 0,
    'profileEditUrl' => 0,
    'sectionsHtml' => 0,
    'html' => 0,
    'displayName' => 0,
    'avatarUrl' => 0,
    'userId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_551c62857235c1_28634752',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551c62857235c1_28634752')) {function content_551c62857235c1_28634752($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_block_script')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/block.script.php';
if (!is_callable('smarty_function_text')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_add_content')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.add_content.php';
?><?php if ($_smarty_tpl->tpl_vars['ownerMode']->value||($_smarty_tpl->tpl_vars['adminMode']->value&&!$_smarty_tpl->tpl_vars['superAdminProfile']->value)){?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        

            .ow_edit_profile_link
            {
                position: absolute;
                right: 0px;
                top: 0px;
            }
        
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        
            (function(){
                $(".user_profile_data").hover(
                  function(){
                    $("#edit-profile").fadeIn();
                  },
                  function(){
                    $("#edit-profile").fadeOut();
                  }
              );
           }());
       
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<div class="user_profile_data" style="position:relative">
     <?php if ($_smarty_tpl->tpl_vars['ownerMode']->value||($_smarty_tpl->tpl_vars['adminMode']->value&&!$_smarty_tpl->tpl_vars['superAdminProfile']->value)){?>
         <div style="display: none;" id="edit-profile" class="ow_edit_profile_link">
                <a class="ow_lbutton" href="<?php echo $_smarty_tpl->tpl_vars['profileEditUrl']->value;?>
"><?php echo smarty_function_text(array('key'=>'base+edit_profile_link'),$_smarty_tpl);?>
</a>
         </div>
     <?php }?>

    <?php  $_smarty_tpl->tpl_vars['html'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['html']->_loop = false;
 $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sectionsHtml']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['html']->key => $_smarty_tpl->tpl_vars['html']->value){
$_smarty_tpl->tpl_vars['html']->_loop = true;
 $_smarty_tpl->tpl_vars['section']->value = $_smarty_tpl->tpl_vars['html']->key;
?>
        <?php echo $_smarty_tpl->tpl_vars['html']->value;?>

    <?php } ?>
 </div>

<?php echo smarty_function_add_content(array('key'=>'socialsharing.get_sharing_buttons','title'=>$_smarty_tpl->tpl_vars['displayName']->value,'image'=>$_smarty_tpl->tpl_vars['avatarUrl']->value,'entityType'=>'user','entityId'=>$_smarty_tpl->tpl_vars['userId']->value),$_smarty_tpl);?>

<?php }} ?>