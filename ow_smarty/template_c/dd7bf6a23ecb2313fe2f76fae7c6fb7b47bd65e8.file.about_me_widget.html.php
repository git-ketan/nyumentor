<?php /* Smarty version Smarty-3.1.12, created on 2015-04-01 14:26:29
         compiled from "/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/about_me_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:1106582697551c62853bb4a9-02067309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd7bf6a23ecb2313fe2f76fae7c6fb7b47bd65e8' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/about_me_widget.html',
      1 => 1416930874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1106582697551c62853bb4a9-02067309',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ownerMode' => 0,
    'noContent' => 0,
    'contentText' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_551c628542e549_89551626',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551c628542e549_89551626')) {function content_551c628542e549_89551626($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_block_form')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_input')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_submit')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.submit.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>



.ow_about_me_widget {
    padding: 5px 4px 10px;
    overflow: hidden;
}


<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>



<div class="ow_highbox ow_about_me_widget">
    <?php if ($_smarty_tpl->tpl_vars['ownerMode']->value){?>
        <div class="ow_center">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"about_me_form")); $_block_repeat=true; echo smarty_block_form(array('name'=>"about_me_form"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <div class="form_auto_click"> 
                    <div class="ow_smallmargin"><?php echo smarty_function_input(array('name'=>"about_me"),$_smarty_tpl);?>
</div>
                    <div class="<?php if ($_smarty_tpl->tpl_vars['noContent']->value){?>ow_submit_auto_click<?php }?>">
                        <?php echo smarty_function_submit(array('name'=>"save"),$_smarty_tpl);?>

                    </div>
                </div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"about_me_form"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
    <?php }elseif($_smarty_tpl->tpl_vars['contentText']->value){?>
            <?php echo $_smarty_tpl->tpl_vars['contentText']->value;?>

    <?php }?>

</div><?php }} ?>