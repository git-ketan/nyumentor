<?php /* Smarty version Smarty-3.1.12, created on 2015-04-01 14:26:29
         compiled from "/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/user_view_section_table.html" */ ?>
<?php /*%%SmartyHeaderCode:1514526021551c628551bf40-15720715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12c716d64cf9f7c975e6c87dc9915c6f269b4e9d' => 
    array (
      0 => '/usr/local/ampps/www/nyumentor/ow_system_plugins/base/views/components/user_view_section_table.html',
      1 => 1416930874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1514526021551c628551bf40-15720715',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sectionName' => 0,
    'display' => 0,
    'questions' => 0,
    'question' => 0,
    'questionsData' => 0,
    'labels' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_551c628566ca28_70600821',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551c628566ca28_70600821')) {function content_551c628566ca28_70600821($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include '/usr/local/ampps/www/nyumentor/ow_smarty/plugin/function.text.php';
?><table class="ow_table_3 ow_nomargin section_<?php echo $_smarty_tpl->tpl_vars['sectionName']->value;?>
 data_table" <?php if (empty($_smarty_tpl->tpl_vars['display']->value)){?>style="display:none;"<?php }?>>
    <tr class="ow_tr_first">
        <tr class="ow_tr_first">
            <th colspan="2" class="ow_section"><span><?php echo smarty_function_text(array('key'=>"base+questions_section_".((string)$_smarty_tpl->tpl_vars['sectionName']->value)."_label"),$_smarty_tpl);?>
</span></th>
        </tr>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['question']->_loop = false;
 $_smarty_tpl->tpl_vars['sort'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['questions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['question']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['question']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value){
$_smarty_tpl->tpl_vars['question']->_loop = true;
 $_smarty_tpl->tpl_vars['sort']->value = $_smarty_tpl->tpl_vars['question']->key;
 $_smarty_tpl->tpl_vars['question']->iteration++;
 $_smarty_tpl->tpl_vars['question']->last = $_smarty_tpl->tpl_vars['question']->iteration === $_smarty_tpl->tpl_vars['question']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['question']['last'] = $_smarty_tpl->tpl_vars['question']->last;
?>
        <?php if (isset($_smarty_tpl->tpl_vars['questionsData']->value[$_smarty_tpl->tpl_vars['question']->value['name']])){?>
            <tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['question']['last']){?>ow_tr_last<?php }?>">
                <td class="ow_label" style="width: 20%"><?php if (empty($_smarty_tpl->tpl_vars['labels']->value[$_smarty_tpl->tpl_vars['question']->value['name']])){?><?php echo smarty_function_text(array('key'=>"base+questions_question_".((string)$_smarty_tpl->tpl_vars['question']->value['name'])."_label"),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['labels']->value[$_smarty_tpl->tpl_vars['question']->value['name']];?>
<?php }?></td>
                <td class="ow_value"><span class="<?php if (!empty($_smarty_tpl->tpl_vars['question']->value['hidden'])){?>ow_field_eye ow_remark profile_hidden_field<?php }?>"><?php echo $_smarty_tpl->tpl_vars['questionsData']->value[$_smarty_tpl->tpl_vars['question']->value['name']];?>
</span></td>
            </tr>
        <?php }?>
    <?php } ?>
</table>


<?php }} ?>