<?php /* Smarty version Smarty-3.1.7, created on 2016-12-28 17:01:06
         compiled from "/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/EditView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7951582355863efd2403e01-82836895%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d44ccae709fe2ca3ca8c328ff72a093941670aa' => 
    array (
      0 => '/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/EditView.tpl',
      1 => 1482942406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7951582355863efd2403e01-82836895',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5863efd241de1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5863efd241de1')) {function content_5863efd241de1($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("EditViewBlocks.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("EditViewActions.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>