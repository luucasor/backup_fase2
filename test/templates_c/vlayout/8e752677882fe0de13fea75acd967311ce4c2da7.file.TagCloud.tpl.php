<?php /* Smarty version Smarty-3.1.7, created on 2017-01-12 19:09:10
         compiled from "/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/dashboards/TagCloud.tpl" */ ?>
<?php /*%%SmartyHeaderCode:264831975877d45636c120-74777945%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e752677882fe0de13fea75acd967311ce4c2da7' => 
    array (
      0 => '/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/dashboards/TagCloud.tpl',
      1 => 1482942406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '264831975877d45636c120-74777945',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5877d456419e5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5877d456419e5')) {function content_5877d456419e5($_smarty_tpl) {?>
<div class="dashboardWidgetHeader"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/WidgetHeader.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><div class="dashboardWidgetContent" style='padding:5px'><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/TagCloudContents.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>	 <?php }} ?>