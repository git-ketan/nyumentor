<?php /* Smarty version Smarty-3.1.12, created on 2015-04-01 13:52:27
         compiled from "/usr/local/ampps/www/nyumentor/ow_system_plugins/base/decorators/floatbox.html" */ ?>
<?php /*%%SmartyHeaderCode:1255840885551c5a8b2dcdc6-46381019%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6413572f39f24e710ca9af5ee27bea5dd3939052' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_system_plugins/base/decorators/floatbox.html',
      1 => 1416930874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1255840885551c5a8b2dcdc6-46381019',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_551c5a8b2e6609_43936976',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551c5a8b2e6609_43936976')) {function content_551c5a8b2e6609_43936976($_smarty_tpl) {?>
<div style="display: none" id="floatbox_prototype">

    
    <div class="default">
        <div class="floatbox_canvas floatbox_default">
            <div class="floatbox_preloader_container">
                <div class="floatbox_preloader ow_floatbox_preloader"></div>
            </div>

            <div class="floatbox_container">
				<div class="ow_bg_color">
					<div class="floatbox_header">
						<div class="clearfix floatbox_cap">
							<h3 class="floatbox_title"></h3>
							<div class="ow_box_cap_icons clearfix">
								<a title="close" class="ow_ic_delete close" href="javascript://"></a>
							</div>
					   </div>
					</div>
					<div class="floatbox_body"></div>
					<div class="floatbox_bottom"></div>
				</div>
            </div>
        </div>
    </div>

    
    <div class="empty">
        <div class="floatbox_canvas floatbox_empty">
            <div class="floatbox_preloader_container">
                <div class="floatbox_preloader ow_floatbox_preloader"></div>
            </div>

            <div class="floatbox_container">
				<div class="ow_bg_color">
					<div class="floatbox_header">
						<div class="ow_box_cap_icons clearfix">
							<a title="close" class="ow_ic_delete close" href="javascript://"></a>
						</div>
					</div>
					<div class="floatbox_body"></div>
					<div class="floatbox_bottom"></div>
				</div>
            </div>
        </div>
    </div>

</div><?php }} ?>