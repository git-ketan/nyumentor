<?php /* Smarty version Smarty-3.1.12, created on 2015-04-05 12:58:33
         compiled from "/usr/local/ampps/www/nyumentor/ow_system_plugins/admin/views/components/mobile_widget_panel.html" */ ?>
<?php /*%%SmartyHeaderCode:1607002300552193e91e63e8-69213584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa28ba2d86702c6efa30332ca2bf30aa8fd83683' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_system_plugins/admin/views/components/mobile_widget_panel.html',
      1 => 1416930874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1607002300552193e91e63e8-69213584',
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
  'unifunc' => 'content_552193e9256114_37309063',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552193e9256114_37309063')) {function content_552193e9256114_37309063($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_function_text')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_decorator')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.decorator.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.ow_mobile_dd_sections {
    width: 300px;
}

.ow_mobile_dd_sections_left,
.ow_mobile_dd_sections_right {
}

.ow_mobile_dd_sections_left .ow_highbox,
.ow_mobile_dd_sections_menu_new,
.ow_mobile_dd_sections_menu_hidden {
    padding: 0px 11px 16px;
}

.ow_mobile_dd_sections_left .ow_highbox {
    padding-top: 6px; 
}

.ow_mobile_dd_sections_menu_new {
    padding-bottom: 15px; 
    border-bottom: 1px solid #ccc; 
    margin-bottom: 5px;
}

.ow_mobile_dd_sections_left {
    margin-right: 8px;
}

.ow_mobile_dd_sections_right {
    border-left: 1px solid #CCCCCC;
    margin-left: 8px;
    margin-top: 5px;
}

.ow_mobile_dd_sections_menu_label {
    color: #ccc; 
    padding: 6px; 
    text-transform: uppercase;
}

.ow_mobile_dd_sections_menu_bottom .ow_mobile_dd_sections_menu_label {
    padding-top: 40px;
}

.ow_mobile_dd_sections_menu_hidden .ow_mobile_dd_sections_menu_label {
    padding-bottom: 7px;
}

.ow_mobile_dd_sections .ow_dnd_schem_item {
    padding-left: 5px;
}

.ow_mobile_dd_sections .dd_delete,
.ow_mobile_dd_sections .dd_edit {
    display: inline-block;
    width: 18px;
    height: 18px;
    background-repeat: no-repeat;
}

.ow_mobile_dd_sections .component .schem_component .action .dd_delete:hover,
.ow_mobile_dd_sections .component .schem_component .action .dd_edit:hover {
    text-decoration: none;
}

.ow_mobile_dd_sections .ow_dnd_schem_item span.action {
    right: 3px;
    top: 7px;
    width: 40px;
}

.ow_mobile_nav_setting_popup {
    width: 500px;
}

/* My classes */

.ow_mobile_dd_sections div.ow_dnd_schem_item {
    background-image: none;
}

.ow_mobile_dnd_section {
    min-height: 34px;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div style="display: none" id="fb_settings">
     <div class="settings_title">
        <?php echo smarty_function_text(array('key'=>"base+widgets_fb_setting_box_title"),$_smarty_tpl);?>

     </div>
     <div class="settings_content component_settings" style="min-height: 300px;"></div>
     <div class="settings_controls component_controls">
         <?php echo smarty_function_decorator(array('name'=>"button",'class'=>"dd_save ow_ic_save",'langLabel'=>"admin+save_btn_label"),$_smarty_tpl);?>

     </div>
 </div>

<div class="ow_dragndrop_sections ow_stdmargin ow_superwide ow_automargin">
    <div class="clearfix" style="overflow: hidden;">
        
        <div class="ow_mobile_dd_sections ow_left ow_column_equal_fix">
            <div class="ow_mobile_dd_sections_left">
                <div class="ow_highbox">
                    <div class="ow_mobile_dd_sections_menu_top" id="place_sections">
                        <div class="ow_mobile_dd_sections_menu_label"><?php echo smarty_function_text(array('key'=>"mobile+admin_widgets_main_section_label"),$_smarty_tpl);?>
</div>
                        <div class="ow_mobile_dnd_section place_section" ow_place_section="mobile.main">
                            <?php if (isset($_smarty_tpl->tpl_vars['componentList']->value['section']["mobile.main"])){?>
                                <?php  $_smarty_tpl->tpl_vars["component"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["component"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['componentList']->value['section']["mobile.main"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["component"]->key => $_smarty_tpl->tpl_vars["component"]->value){
$_smarty_tpl->tpl_vars["component"]->_loop = true;
?>
                                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dd_component'][0][0]->tplComponent(array('uniqName'=>$_smarty_tpl->tpl_vars['component']->value['uniqName'],'render'=>true),$_smarty_tpl);?>

                                <?php } ?>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ow_mobile_dd_sections ow_left ow_column_equal_fix right_section ow_narrow">
            <div class="ow_mobile_dd_sections_right">

                <div class="ow_mobile_dd_sections_menu_new ow_mobile_dnd_section" id="clonable_components">
                    <?php  $_smarty_tpl->tpl_vars["component"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["component"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['componentList']->value['clonable']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["component"]->key => $_smarty_tpl->tpl_vars["component"]->value){
$_smarty_tpl->tpl_vars["component"]->_loop = true;
?>
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dd_component'][0][0]->tplComponent(array('uniqName'=>$_smarty_tpl->tpl_vars['component']->value['uniqName'],'isClone'=>$_smarty_tpl->tpl_vars['component']->value['clone']),$_smarty_tpl);?>

                    <?php } ?>
                </div>

                <div class="ow_mobile_dd_sections_menu_hidden">   
                    <div class="ow_mobile_dd_sections_menu_label"><?php echo smarty_function_text(array('key'=>"mobile+admin_widgets_hidden_section_label"),$_smarty_tpl);?>
</div>

                    <div class="ow_mobile_dnd_section" id="place_components">
                        <?php  $_smarty_tpl->tpl_vars["component"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["component"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['componentList']->value['place']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["component"]->key => $_smarty_tpl->tpl_vars["component"]->value){
$_smarty_tpl->tpl_vars["component"]->_loop = true;
?>
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dd_component'][0][0]->tplComponent(array('uniqName'=>$_smarty_tpl->tpl_vars['component']->value['uniqName'],'isClone'=>$_smarty_tpl->tpl_vars['component']->value['clone']),$_smarty_tpl);?>

                        <?php } ?>
                    </div>

                </div>

            </div>
        </div>

     </div>
</div><?php }} ?>