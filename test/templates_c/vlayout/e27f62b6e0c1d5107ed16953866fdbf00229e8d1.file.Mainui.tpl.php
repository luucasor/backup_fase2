<?php /* Smarty version Smarty-3.1.7, created on 2017-01-09 17:04:54
         compiled from "/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/MailManager/Mainui.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5051743435873c2b6bc8cd2-87710699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e27f62b6e0c1d5107ed16953866fdbf00229e8d1' => 
    array (
      0 => '/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/MailManager/Mainui.tpl',
      1 => 1482942406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5051743435873c2b6bc8cd2-87710699',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MAILBOX' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5873c2b6d23aa',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5873c2b6d23aa')) {function content_5873c2b6d23aa($_smarty_tpl) {?>

<input type="hidden" name="refresh_timeout" id="refresh_timeout" value="<?php echo $_smarty_tpl->tpl_vars['MAILBOX']->value->refreshTimeOut();?>
"/><?php }} ?>