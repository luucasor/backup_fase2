<?php /* Smarty version Smarty-3.1.7, created on 2017-01-13 16:23:26
         compiled from "/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/Settings/ModuleDesigner/Custom.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3566188125877de9052d945-79074182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb5e88d038d0fb9e98d4f4f1fe3056d85d021cfd' => 
    array (
      0 => '/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/Settings/ModuleDesigner/Custom.tpl',
      1 => 1484324590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3566188125877de9052d945-79074182',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5877de9054fac',
  'variables' => 
  array (
    'MODULE' => 0,
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5877de9054fac')) {function content_5877de9054fac($_smarty_tpl) {?><script type="text/javascript" src="layouts/vlayout/modules/Settings/<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
/resources/CustomScript.js"></script>

<h2><?php echo vtranslate('LBL_CUSTOM_VALUES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h2>

<table>
<tr>
<td colspan="2">
<?php echo vtranslate('LBL_CUSTOM_VALUES_DESCRIPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

</td>
</tr>
<tr>
<td><?php echo vtranslate('LBL_MY_VARIABLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td>
<td>
<select name="myVariable">
<option value="value1"><?php echo vtranslate('LBL_MY_VALUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 1</option>
<option value="value2"><?php echo vtranslate('LBL_MY_VALUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 2</option>
</select>
</td>
</tr>
</table><?php }} ?>