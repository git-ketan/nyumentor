<?php /* Smarty version Smarty-3.1.12, created on 2015-04-01 14:25:52
         compiled from "/usr/local/ampps/www/nyumentor/ow_plugins/groups/views/components/groups_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:1750896022551c626073fe72-98995613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b0ef3b4896ed6f93e771ec74b56a4b905368224' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_plugins/groups/views/components/groups_widget.html',
      1 => 1416930878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1750896022551c626073fe72-98995613',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'menuItems' => 0,
    'showTitles' => 0,
    'popular' => 0,
    'item' => 0,
    'latest' => 0,
    'toolbars' => 0,
    'createUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_551c6260a859f4_93366430',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551c6260a859f4_93366430')) {function content_551c6260a859f4_93366430($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_block_script')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/block.script.php';
if (!is_callable('smarty_function_text')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_decorator')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.decorator.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    .ow_lp_groups .ow_lp_wrapper{
        width: 75px;
        float: left;
        margin-right: -80px;
    }

    .ow_lp_groups .ow_lp_wrapper_inline {
        display:inline-block;
        margin:0 3px 3px 0;
        width:75px;
    }


<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    var $tb_container = $(".ow_box_toolbar_cont", $("#groups-list_widget").parents('.ow_box, .ow_box_empty').get(0));

    $("#groups-widget-menu-popular").click(function(){
        $tb_container.html($("#groups-widget-toolbar-popular").html());
    });

    $("#groups-widget-menu-latest").click(function(){
        $tb_container.html($("#groups-widget-toolbar-latest").html());
    });

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div id="groups-list_widget">

    <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>


    <?php if (!empty($_smarty_tpl->tpl_vars['menuItems']->value)){?>
        <div class="ow_lp_groups ow_hidden" id="<?php echo $_smarty_tpl->tpl_vars['menuItems']->value[1]['contId'];?>
">
            <?php if ($_smarty_tpl->tpl_vars['showTitles']->value){?>
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['popular']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                   <div class="clearfix ow_smallmargin">
                       <div class="ow_lp_wrapper">
                           <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
">
                                <img title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="75" />
                           </a>
                       </div>
                       <div class="ow_lp_label ow_small">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                            <br />
                            <?php echo smarty_function_text(array('key'=>"groups+listing_users_label",'count'=>$_smarty_tpl->tpl_vars['item']->value['users']),$_smarty_tpl);?>

                       </div>
                   </div>
                <?php } ?>
            <?php }else{ ?>
                <div class="ow_center">
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['popular']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?><a class="ow_lp_wrapper_inline" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><img title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="75" /></a><?php } ?>
                </div>
            <?php }?>
        </div>

        <div class="ow_lp_groups" id="<?php echo $_smarty_tpl->tpl_vars['menuItems']->value[0]['contId'];?>
">
            <?php if ($_smarty_tpl->tpl_vars['showTitles']->value){?>
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['latest']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                   <div class="clearfix ow_smallmargin">
                       <div class="ow_lp_wrapper">
                           <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
">
                                <img title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="75" />
                           </a>
                       </div>
                       <div class="ow_lp_label ow_small">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                            <br />
                            <?php echo smarty_function_text(array('key'=>"groups+listing_users_label",'count'=>$_smarty_tpl->tpl_vars['item']->value['users']),$_smarty_tpl);?>

                       </div>
                   </div>
                <?php } ?>
            <?php }else{ ?>
                <div class="ow_center ">
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['latest']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?><a class="ow_lp_wrapper_inline" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><img title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="75" /></a><?php } ?></div>
            <?php }?>
        </div>

        <div id="groups-widget-toolbar-latest" style="display: none"><?php echo smarty_function_decorator(array('name'=>'box_toolbar','itemList'=>$_smarty_tpl->tpl_vars['toolbars']->value['latest']),$_smarty_tpl);?>
</div>
        <div id="groups-widget-toolbar-popular" style="display: none"><?php echo smarty_function_decorator(array('name'=>'box_toolbar','itemList'=>$_smarty_tpl->tpl_vars['toolbars']->value['popular']),$_smarty_tpl);?>
</div>

    <?php }else{ ?>
        <div class="ow_nocontent" id="groups-create-btn-c">
            <?php echo smarty_function_text(array('key'=>'groups+groups_widget_empty'),$_smarty_tpl);?>
, <a href="<?php echo $_smarty_tpl->tpl_vars['createUrl']->value;?>
"><?php echo smarty_function_text(array('key'=>'groups+add_new'),$_smarty_tpl);?>
</a>
        </div>
    <?php }?>

</div>
<?php }} ?>