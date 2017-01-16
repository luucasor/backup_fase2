<?php /* Smarty version Smarty-3.1.7, created on 2016-12-28 17:00:52
         compiled from "/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/Contacts/PotentialViewWidgets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9239937325863efc45bb5f9-14762452%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04d817a1e735a37361cee6bec2b8c7b77b23fadd' => 
    array (
      0 => '/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/Contacts/PotentialViewWidgets.tpl',
      1 => 1482942406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9239937325863efc45bb5f9-14762452',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'POTENTIALS' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5863efc460713',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5863efc460713')) {function content_5863efc460713($_smarty_tpl) {?>
<div class="summaryWidgetContainer"><div><div class="widget_header row-fluid"><span class="span8 margin0px"><h4>Oportunidades</h4></span></div><div class="widget_contents"><table id="oportunidades-table" name="oportunidades-table" class="table table-striped table-bordered" cellspacing="0" heigth="100%"><thead><tr><th>Nº</th><th>Oportunidade</th><th>Data Fechamento</th><th>Fonte do Lead</th></tr></thead><tbody><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['POTENTIALS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?><tr><td style='width: 100px;'><?php echo $_smarty_tpl->tpl_vars['item']->value['potential_no'];?>
</td><td style='width: 100px;'><?php echo $_smarty_tpl->tpl_vars['item']->value['potentialname'];?>
</td><td style='width: 100px;'><?php echo $_smarty_tpl->tpl_vars['item']->value['closingdate'];?>
</td><td style='width: 100px;'><?php echo $_smarty_tpl->tpl_vars['item']->value['leadsource'];?>
</td></tr><?php } ?></tbody></table></div></div></div>
<?php }} ?>