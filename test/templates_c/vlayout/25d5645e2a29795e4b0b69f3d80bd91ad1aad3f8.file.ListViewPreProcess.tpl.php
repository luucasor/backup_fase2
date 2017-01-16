<?php /* Smarty version Smarty-3.1.7, created on 2016-12-28 17:00:22
         compiled from "/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/ListViewPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12922847195863efa690b620-25097244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25d5645e2a29795e4b0b69f3d80bd91ad1aad3f8' => 
    array (
      0 => '/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/ListViewPreProcess.tpl',
      1 => 1482942406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12922847195863efa690b620-25097244',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'CURRENT_USER_MODEL' => 0,
    'LEFTPANELHIDE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5863efa69f5a5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5863efa69f5a5')) {function content_5863efa69f5a5($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("Header.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("BasicHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="bodyContents"><div class="mainContainer row-fluid"><?php $_smarty_tpl->tpl_vars['LEFTPANELHIDE'] = new Smarty_variable($_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('leftpanelhide'), null, 0);?><div class="span2 row-fluid <?php if ($_smarty_tpl->tpl_vars['LEFTPANELHIDE']->value=='1'){?> hide <?php }?>" id="leftPanel" style="min-height:550px;"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ListViewSidebar.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><div class="contentsDiv <?php if ($_smarty_tpl->tpl_vars['LEFTPANELHIDE']->value!='1'){?> span10 <?php }?>marginLeftZero" id="rightPanel" style="min-height:550px;"><div id="toggleButton" class="toggleButton" title="<?php echo vtranslate('LBL_LEFT_PANEL_SHOW_HIDE','Vtiger');?>
"><i id="tButtonImage" class="<?php if ($_smarty_tpl->tpl_vars['LEFTPANELHIDE']->value!='1'){?>icon-chevron-left<?php }else{ ?>icon-chevron-right<?php }?>"></i></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ListViewHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>