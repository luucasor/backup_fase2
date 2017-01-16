<?php /* Smarty version Smarty-3.1.7, created on 2016-12-28 17:00:32
         compiled from "/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/SummaryWidgets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19315484335863efb04e0dd2-39451584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc2272085f77e80a85bc2d7e71c3dbe1bc6d5d7e' => 
    array (
      0 => '/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/SummaryWidgets.tpl',
      1 => 1482942406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19315484335863efb04e0dd2-39451584',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PAGING_MODEL' => 0,
    'RELATED_MODULE' => 0,
    'RELATED_RECORDS' => 0,
    'FILENAME' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5863efb058f23',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5863efb058f23')) {function content_5863efb058f23($_smarty_tpl) {?>
<input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->get('page');?>
" /><input type="hidden" name="pageLimit" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->get('limit');?>
" /><?php if ($_smarty_tpl->tpl_vars['RELATED_MODULE']->value&&$_smarty_tpl->tpl_vars['RELATED_RECORDS']->value){?><?php $_smarty_tpl->tpl_vars['FILENAME'] = new Smarty_variable(($_smarty_tpl->tpl_vars['RELATED_MODULE']->value).("SummaryWidgetContents.tpl"), null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path($_smarty_tpl->tpl_vars['FILENAME']->value,$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('RELATED_RECORDS'=>$_smarty_tpl->tpl_vars['RELATED_RECORDS']->value), 0);?>
<?php }?><?php }} ?>