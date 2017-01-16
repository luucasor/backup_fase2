<?php /* Smarty version Smarty-3.1.7, created on 2016-12-28 17:00:27
         compiled from "/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/DetailViewSidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12817544665863efabb25c24-35320634%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3840dab4ab1cc6caa26f98929c21b71faec42e7c' => 
    array (
      0 => '/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/DetailViewSidebar.tpl',
      1 => 1482942406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12817544665863efabb25c24-35320634',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5863efabb32db',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5863efabb32db')) {function content_5863efabb32db($_smarty_tpl) {?>
<div class="row-fluid"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SideBar.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>