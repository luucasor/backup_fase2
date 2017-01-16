<?php /* Smarty version Smarty-3.1.7, created on 2017-01-16 19:09:54
         compiled from "/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/Popup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:841718296587d1a82b9e9b6-38644721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c52ad9e64286123dc4a264f03f093eb2f4345672' => 
    array (
      0 => '/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/Popup.tpl',
      1 => 1482942406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '841718296587d1a82b9e9b6-38644721',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_587d1a82c6ca0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587d1a82c6ca0')) {function content_587d1a82c6ca0($_smarty_tpl) {?>
<div id="popupPageContainer" class="contentsDiv"><div class="paddingLeftRight10px"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('PopupSearch.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><div id="popupContents" class="paddingLeftRight10px"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('PopupContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><input type="hidden" class="triggerEventName" value="<?php echo getPurifiedSmartyParameters('triggerEventName');?>
"/></div></div><?php }} ?>