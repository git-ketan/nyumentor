<?php /* Smarty version Smarty-3.1.12, created on 2015-04-01 16:35:36
         compiled from "/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/avatar_change.html" */ ?>
<?php /*%%SmartyHeaderCode:1557905399551c80c849aa90-52399062%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0346be2aa8253aa6ebdfe5786d69f91b4aa7adef' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/avatar_change.html',
      1 => 1416930874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1557905399551c80c849aa90-52399062',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'minSize' => 0,
    'displayPreloader' => 0,
    'step' => 0,
    'hideSteps' => 0,
    'library' => 0,
    'section' => 0,
    'limit' => 0,
    'image' => 0,
    'fadeImage' => 0,
    'offset' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_551c80c851bcd4_28314303',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551c80c851bcd4_28314303')) {function content_551c80c851bcd4_28314303($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/block.style.php';
if (!is_callable('smarty_function_text')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_decorator')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.decorator.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

.ow_photo_upload_wrap * {
    box-sizing: border-box;
}
.ow_photo_upload_wrap {
    border-bottom: 1px solid transparent;
}
.ow_photo_dragndrop {
    display: inline-block;
    width: 100%;
    line-height: 84px;
    text-align: center;
    cursor: pointer;
    font-weight: normal;
    border-radius: 4px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    position: relative;
    padding: 4px;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
}
.ow_photo_dragndrop div {
    bottom: 4px;
    left: 4px;
    position: absolute;
    right: 4px;
    top: 4px;
}
.ow_photo_upload_bottom {
    position: relative;
}
.ow_photo_list {
    margin: -4px 0 16px;
}
.ow_photo_upload_delimeter {
    border-width: 1px 0 0 0;
    margin: 0 0 12px 0;
    min-height: 1px;
}
.ow_photo_upload_delimeter span {
    line-height: 18px;
    margin-top: -12px;
    padding: 0 8px;
    display: inline-block;
}
.ow_photo_library_wrap {
    min-height: 160px;
    max-height: 450px;
    overflow: hidden;
    margin-left: -4px;
    margin-right: -4px;
}
.ow_photo_list_wrap.ow_photo_avatar_list div.ow_photo_item_wrap {
    width: 120px;
    padding: 5px;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    float: left;
    height: auto;
    position: relative;
}
.ow_photo_list_wrap div.ow_photo_item {
    background-position: center center;
    background-size: cover;
    border-radius: 3px;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    cursor: pointer;
    position: relative;
    width: 100%;
}
.ow_photo_item_wrap img {
    border-radius: 4px 4px 0 0;
    height: auto;
    width: 100%;
}
h3.ow_photo_avatar_album_name {
    text-transform: uppercase;
    font-size: 14px;
    font-weight: normal;
    font-family: 'UbuntuBold',"Trebuchet MS","Helvetica CY",sans-serif;
    margin-left: 4px;
}
.ow_photo_avatar_album_more {
    position: absolute;
    width: 100%;
    top: 50%;
    margin-top: -7px;
    text-align: center;
}
.ow_photo_avatar_album_more a,
.ow_photo_avatar_album_more a:hover {
    line-height: 14px;
    font-size: 11px;
    text-decoration: none;
    text-transform: uppercase;
    font-weight: bold;
}
.ow_photo_avatar_album_more.ow_preloader {
    height: 16px;
    margin-top: -8px;
}
.ow_photo_avatar_album_more.ow_preloader a {
    display: none;
}
.ow_photo_avatar_hover .ow_photo_avatar_album_more a {
    color: #fff;
}
.ow_photo_avatar_hover {
    width: 100%;
    height: 100%;
    position: absolute;
    background-color: rgba(0,0,0,0.65);
    top: 0px;
    left: 0px;
    border-radius: 4px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    opacity: 0;
    transition: opacity 0.3s;
    -moz-transition: opacity 0.3s;
    -webkit-transition: opacity 0.3s;
}
.ow_photo_library_inner .ow_photo_item_wrap:hover .ow_photo_avatar_hover {
    opacity: 1;
}
.ow_avatar_crop_area {
    text-align: center;
    margin-right: 16px;
}
.ow_avatar_crop_result {
    text-align: center;
}
.ow_avatar_crop_result p {
    text-align: left;
}
#avatar-change-preloader {
    width: 100%;
    height: 200px;
    background-repeat: no-repeat;
    background-position: center center;
}
.avatar_crop_preview_wrap {
    overflow: hidden;
    margin-bottom: 16px;
}
.avatar_crop_target_wrap {
    min-height: <?php echo $_smarty_tpl->tpl_vars['minSize']->value;?>
px;
}
.avatar_crop_preview_wrap img {
    width : 100%;
}
.jcrop-holder {
    display: inline-block;
}

.ow_avatar_preloader .ow_photo_avatar_preloader{
    display:block;
}

.ow_photo_avatar_preloader {
    bottom: 0;
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    display:none;
}
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div id="avatar-change-preloader" class="ow_bg_color" <?php if (!$_smarty_tpl->tpl_vars['displayPreloader']->value){?>style="display: none;"<?php }?>></div>

<div id="avatar-change-step-1"<?php if ($_smarty_tpl->tpl_vars['step']->value==2||$_smarty_tpl->tpl_vars['hideSteps']->value){?> style="display: none;"<?php }?>>
    <div class="ow_photo_upload_wrap">
        <div class="ow_photo_dragndrop<?php if (!empty($_smarty_tpl->tpl_vars['library']->value)){?> ow_stdmargin<?php }?>">
            <div id="avatar-drop-area" ondragover="return false;"></div>
            <span id="avatar-drop-area-label"><?php echo smarty_function_text(array('key'=>'base+drag_image_or_browse'),$_smarty_tpl);?>
</span>
        </div>

        <div class="ow_hidden"><input type="file" id="avatar-change-file-input" name="avatar_file" /></div>

        <?php if (!empty($_smarty_tpl->tpl_vars['library']->value)){?>
        <div id="photo-album-form" class="ow_photo_upload_bottom clearfix">
            <div class="ow_photo_upload_delimeter ow_txtcenter ow_border">
                <span class="ow_bg_color"><?php echo smarty_function_text(array('key'=>'base+avatar_choose_from_library'),$_smarty_tpl);?>
</span>
            </div>
        </div>
        <?php }?>
    </div>

    <?php if (!empty($_smarty_tpl->tpl_vars['library']->value)){?>
    <div class="ow_photo_library_wrap" style="height: 450px;">
    <div class="ow_photo_library_inner">

    <?php $_smarty_tpl->_capture_stack[0][] = array('default', "fadeImage", null); ob_start(); ?><img src="data:image/png;base64,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" alt="" /><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php  $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['section']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['library']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['section']->key => $_smarty_tpl->tpl_vars['section']->value){
$_smarty_tpl->tpl_vars['section']->_loop = true;
?>
    <?php $_smarty_tpl->tpl_vars['offset'] = new Smarty_variable(0, null, 0);?>
    <div class="ow_photo_list_wrap ow_photo_avatar_list">
        <h3 class="ow_photo_avatar_album_name ow_smallmargin"><?php echo $_smarty_tpl->tpl_vars['section']->value['label'];?>
</h3>
        <div id="browse-photo" class="ow_photo_list clearfix">
            <?php if (!empty($_smarty_tpl->tpl_vars['section']->value['list'])){?>
            <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['section']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['image']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['image']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['image']->iteration++;
 $_smarty_tpl->tpl_vars['image']->last = $_smarty_tpl->tpl_vars['image']->iteration === $_smarty_tpl->tpl_vars['image']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['image']['last'] = $_smarty_tpl->tpl_vars['image']->last;
?>
            <div class="ow_photo_item_wrap" <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['image']['last']&&$_smarty_tpl->tpl_vars['section']->value['count']>$_smarty_tpl->tpl_vars['limit']->value){?>style="display: none;"<?php }?>>
                <div style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['image']->value['url'];?>
);" class="ow_photo_item">
                    <?php echo $_smarty_tpl->tpl_vars['fadeImage']->value;?>

                    <div class="ow_photo_avatar_hover">
                        <div class="ow_photo_avatar_album_more">
                            <a class="avatar_select" href="javascript://" data-url="<?php echo $_smarty_tpl->tpl_vars['image']->value['bigUrl'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['image']->value['entityType'];?>
" data-eid="<?php echo $_smarty_tpl->tpl_vars['image']->value['entityId'];?>
"><?php echo smarty_function_text(array('key'=>'base+avatar_crop'),$_smarty_tpl);?>
</a>
                        </div>
                    </div>
                    <div class="ow_preloader ow_photo_avatar_preloader"></div>
                </div>
            </div>
            <?php $_smarty_tpl->tpl_vars['offset'] = new Smarty_variable($_smarty_tpl->tpl_vars['offset']->value+1, null, 0);?>
            <?php } ?>
            <?php if ($_smarty_tpl->tpl_vars['section']->value['count']>$_smarty_tpl->tpl_vars['limit']->value){?>
            <div class="ow_photo_item_wrap">
            <div class="ow_photo_item" style="background-image: none;">
                <div class="ow_photo_avatar_album_more">
                    <a class="avatar_load_more" href="javascript://" data-type="<?php echo $_smarty_tpl->tpl_vars['section']->value['entityType'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['section']->value['entityId'];?>
" data-offset="<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
"><?php echo smarty_function_text(array('key'=>'base+view_more_label'),$_smarty_tpl);?>
</a>
                </div>
                <?php echo $_smarty_tpl->tpl_vars['fadeImage']->value;?>

            </div>
            </div>
            <?php }?>
            <?php }?>
        </div>
    </div>
    <?php } ?>

    </div>
    </div>
    <?php }?>
</div>

<div id="avatar-change-step-2" class="ow_avatar_crop_wrap clearfix"<?php if ($_smarty_tpl->tpl_vars['step']->value==1||$_smarty_tpl->tpl_vars['hideSteps']->value){?> style="display: none;"<?php }?>>
    <div class="ow_photo_upload_delimeter ow_border ow_smallmargin"></div>
    <div class="clearfix">
        <div class="ow_avatar_crop_area ow_left">
            <h4><?php echo smarty_function_text(array('key'=>'base+avatar_picture'),$_smarty_tpl);?>
</h4>
            <div class="avatar_crop_target_wrap"><img id="avatar-crop-target" src="" alt="" /></div>
        </div>
        <div class="ow_avatar_crop_result ow_right">
            <h4><?php echo smarty_function_text(array('key'=>'base+avatar_preview'),$_smarty_tpl);?>
</h4>
            <div class="avatar_crop_preview_wrap"><img id="avatar-crop-preview" src="" alt="" /></div>
            <p class="ow_small"><?php echo smarty_function_text(array('key'=>'base+avatar_crop_instructions'),$_smarty_tpl);?>
</p>
        </div>
    </div>

    <div class="ow_photo_upload_delimeter ow_border" style="margin-top: 16px;"></div>

    <div class="clearfix">
        <span class="ow_right"><?php echo smarty_function_decorator(array('name'=>'button','langLabel'=>'base+avatar_apply_crop','class'=>'ow_ic_cut','id'=>'avatar-crop-btn'),$_smarty_tpl);?>
</span>
        <span class="ow_left"><?php echo smarty_function_decorator(array('name'=>'button','langLabel'=>'base+back','class'=>"ow_ic_left_arrow",'id'=>'avatar-crop-back-btn'),$_smarty_tpl);?>
</span>
    </div>
</div>
<?php }} ?>