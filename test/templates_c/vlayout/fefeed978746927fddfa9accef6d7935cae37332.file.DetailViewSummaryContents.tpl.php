<?php /* Smarty version Smarty-3.1.7, created on 2016-12-28 17:00:29
         compiled from "/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/Potentials/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13701845225863efad108c16-72067084%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fefeed978746927fddfa9accef6d7935cae37332' => 
    array (
      0 => '/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/Potentials/DetailViewSummaryContents.tpl',
      1 => 1482942406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13701845225863efad108c16-72067084',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5863efad15f8b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5863efad15f8b')) {function content_5863efad15f8b($_smarty_tpl) {?>
<div class="container-fluid"><div class="panel panel-default"><div class="panel-heading"></div></br><div class="panel-body"><div class="collapse" id="collapseExample"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ContactInfoView.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>