<?php /* Smarty version Smarty-3.1.7, created on 2017-01-09 17:04:35
         compiled from "/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/EmailTemplates/DetailViewHeaderTitle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:555183795873c2a3e12f25-43998359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0dd716184b30e0336821b1d6305f6431c6e47d47' => 
    array (
      0 => '/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/EmailTemplates/DetailViewHeaderTitle.tpl',
      1 => 1482942406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '555183795873c2a3e12f25-43998359',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5873c2a3ed472',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5873c2a3ed472')) {function content_5873c2a3ed472($_smarty_tpl) {?>
<span class="span10 margin0px"><span class="row-fluid"><span class="recordLabel font-x-x-large textOverflowEllipsis span pushDown" title="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getName();?>
"><span class="templatename"><?php echo decode_html($_smarty_tpl->tpl_vars['RECORD']->value->get('templatename'));?>
</span>&nbsp;</span></span></span><?php }} ?>