<?php /* Smarty version Smarty-3.1.7, created on 2016-09-12 18:03:02
         compiled from "C:\xampp\htdocs\crm\includes\runtime/../../layouts/vlayout\modules\Vtiger\EditView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:560357d6edd6275ce3-13943066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a6c0dcaf20d23724a08d4c4155a611a9b875d80' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\EditView.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '560357d6edd6275ce3-13943066',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57d6edd62844a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d6edd62844a')) {function content_57d6edd62844a($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("EditViewBlocks.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("EditViewActions.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>