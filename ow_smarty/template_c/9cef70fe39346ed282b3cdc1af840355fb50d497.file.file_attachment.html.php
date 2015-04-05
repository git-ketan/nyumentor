<?php /* Smarty version Smarty-3.1.12, created on 2015-04-01 13:58:56
         compiled from "/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/file_attachment.html" */ ?>
<?php /*%%SmartyHeaderCode:528329967551c5c102d6157-52728978%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cef70fe39346ed282b3cdc1af840355fb50d497' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/file_attachment.html',
      1 => 1416930874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '528329967551c5c102d6157-52728978',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_551c5c1031bda0_22793973',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551c5c1031bda0_22793973')) {function content_551c5c1031bda0_22793973($_smarty_tpl) {?><div id="<?php echo $_smarty_tpl->tpl_vars['data']->value['uid'];?>
">
    <div class="ow_file_attachment_preview clearfix"<?php if (empty($_smarty_tpl->tpl_vars['data']->value['showPreview'])){?> style="display:none;"<?php }?>></div>
    <?php if (empty($_smarty_tpl->tpl_vars['data']->value['selector'])){?>
    <div class="clearfix ow_status_update_btn_block">
        <span class="ow_attachment_icons">
            <div id="nfa-feed1" class="ow_attachments">
              <span class="buttons clearfix">
                  <a title="Attach" href="javascript://" class="attach"></a>
              </span>
            </div>
        </span>
    </div>
    <?php }?>
</div><?php }} ?>