<?php /* Smarty version Smarty-3.1.7, created on 2017-01-12 18:38:38
         compiled from "/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/Reports/MoveReports.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1120967215877cd2ec8aec3-84323340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '316f13fff9b1bdb387240da0ecc33912cdbf9a6b' => 
    array (
      0 => '/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/Reports/MoveReports.tpl',
      1 => 1482942406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1120967215877cd2ec8aec3-84323340',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'SELECTED_IDS' => 0,
    'EXCLUDED_IDS' => 0,
    'VIEWNAME' => 0,
    'FOLDERS' => 0,
    'FOLDER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5877cd2ed2700',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5877cd2ed2700')) {function content_5877cd2ed2700($_smarty_tpl) {?>
<div id="moveReportsContainer" class='modelContainer'><div class="modal-header"><button data-dismiss="modal" class="close" title="<?php echo vtranslate('LBL_CLOSE');?>
">x</button><h3><?php echo vtranslate('LBL_MOVE_REPORT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h3></div><form class="form-horizontal contentsBackground" id="moveReports" method="post" action="index.php"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><input type="hidden" name="action" value="MoveReports" /><input type="hidden" name="selected_ids" value=<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['SELECTED_IDS']->value);?>
 /><input type="hidden" name="excluded_ids" value=<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['EXCLUDED_IDS']->value);?>
 /><input type="hidden" name="viewname" value="<?php echo $_smarty_tpl->tpl_vars['VIEWNAME']->value;?>
" /><div class="modal-body"><div class="row-fluid verticalBottomSpacing"><span class="span4"><?php echo vtranslate('LBL_FOLDERS_LIST',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<span class="redColor">*</span></span><span class="span8 row-fluid"><select class="chzn-select span11" name="folderid"><optgroup label="<?php echo vtranslate('LBL_FOLDERS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><?php  $_smarty_tpl->tpl_vars['FOLDER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FOLDER']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FOLDERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FOLDER']->key => $_smarty_tpl->tpl_vars['FOLDER']->value){
$_smarty_tpl->tpl_vars['FOLDER']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->getId();?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['FOLDER']->value->getName(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php } ?></optgroup></select></span></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form></div><?php }} ?>