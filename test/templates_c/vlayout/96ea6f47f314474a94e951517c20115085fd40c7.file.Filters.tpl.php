<?php /* Smarty version Smarty-3.1.7, created on 2017-01-13 16:23:26
         compiled from "/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/Settings/ModuleDesigner/Filters.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2007322205877de90512668-06340915%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96ea6f47f314474a94e951517c20115085fd40c7' => 
    array (
      0 => '/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/Settings/ModuleDesigner/Filters.tpl',
      1 => 1484324590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2007322205877de90512668-06340915',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5877de90529dd',
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5877de90529dd')) {function content_5877de90529dd($_smarty_tpl) {?><table id="md-filters-table">
<tr>
<td>
<div id="md-filters-toolbar">
	<h2><?php echo vtranslate('LBL_FILTER_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h2>
	
	<ul id="md-filter-fields-list">
	<!-- Fields added with JS -->
	</ul>
</div>
</td>
<td>

<div id="md-add-filter-btn">
	<img src="layouts/vlayout/modules/Settings/<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
/assets/images/filter.png" alt="<?php echo vtranslate('LBL_ADD_FILTER_ALT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"/> <a href="#" onclick="md_addFilter(); return false;"><?php echo vtranslate('LBL_ADD_FILTER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a>
</div>

<div>
<ul id="md-filters-ul">
<!-- Filters added with JS -->
</ul>
</div>
</td>
</table><?php }} ?>