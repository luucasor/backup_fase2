<?php /* Smarty version Smarty-3.1.7, created on 2017-01-13 16:23:26
         compiled from "/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/Settings/ModuleDesigner/Export.tpl" */ ?>
<?php /*%%SmartyHeaderCode:472898225877de905548a8-46151034%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73ac955dc62dbd75f7ccca6f36ab8b666ac4641b' => 
    array (
      0 => '/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/Settings/ModuleDesigner/Export.tpl',
      1 => 1484324590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '472898225877de905548a8-46151034',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5877de905642e',
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5877de905642e')) {function content_5877de905642e($_smarty_tpl) {?><button onclick="md_makePackage(false)"><?php echo vtranslate('LBL_MAKE_PACKAGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><br /><br />
<button onclick="md_makePackage(true)"><?php echo vtranslate('LBL_CREATE_AND_INSTALL_PACKAGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><?php }} ?>