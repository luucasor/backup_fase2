<?php /* Smarty version Smarty-3.1.7, created on 2017-01-13 16:23:35
         compiled from "/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/Settings/ModuleDesigner/GetModulesPopup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16531814885877df54d6a0e3-70752354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd869d6bd3a8f6516d82d62cf5fea39f8db5c9d13' => 
    array (
      0 => '/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/Settings/ModuleDesigner/GetModulesPopup.tpl',
      1 => 1484324590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16531814885877df54d6a0e3-70752354',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5877df54dd2f9',
  'variables' => 
  array (
    'MODULE' => 0,
    'QUALIFIED_MODULE' => 0,
    'LIST_MODULES' => 0,
    'module' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5877df54dd2f9')) {function content_5877df54dd2f9($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="layouts/vlayout/modules/Settings/<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
/resources/PopupUtils.js"></script>
</head>

<body>
<div style="font-family: Arial,Verdana,'Times New Roman',sans-serif;">
<h2><?php echo vtranslate('LBL_MODULES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h2>

<table style="font-size:12px;">
<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LIST_MODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value){
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>
<tr><td><a href="javascript:md_selectModule('<?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
')"><?php echo $_smarty_tpl->tpl_vars['module']->value['tablabel'];?>
</a></td><td><?php echo vtranslate($_smarty_tpl->tpl_vars['module']->value['tablabel'],$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td></tr>
<?php } ?>
</table>
</div>

<script type="text/javascript">
function md_selectModule(moduleName)
{
	//window.parent.md_selectDirectoryTemplate(undefined, moduleName);
	window.parent.md_loadModule(moduleName)
	window.parent.md_closePopup();
}
</script>
</body>
</html><?php }} ?>