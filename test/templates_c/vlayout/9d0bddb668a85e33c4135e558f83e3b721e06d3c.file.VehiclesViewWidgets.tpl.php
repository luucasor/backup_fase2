<?php /* Smarty version Smarty-3.1.7, created on 2016-12-28 17:00:52
         compiled from "/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/Contacts/VehiclesViewWidgets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7942606045863efc45596f8-19997549%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d0bddb668a85e33c4135e558f83e3b721e06d3c' => 
    array (
      0 => '/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/Contacts/VehiclesViewWidgets.tpl',
      1 => 1482942406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7942606045863efc45596f8-19997549',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'VEHICLES' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5863efc45b69b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5863efc45b69b')) {function content_5863efc45b69b($_smarty_tpl) {?>
<div class="summaryWidgetContainer"><div><div class="widget_header row-fluid"><span class="span8 margin0px"><h4>Veículos</h4></span></div><div class="widget_contents"><table id="veiculos-table" name="veiculos-table" class="table table-striped table-bordered" cellspacing="0" heigth="100%"><thead><tr><th>Tipo</th><th>Modelo</th><th>Placa</th><th>Ano</th></tr></thead><tbody><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['VEHICLES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?><tr><td style='width: 100px;'><?php echo $_smarty_tpl->tpl_vars['item']->value->getType();?>
</td><td style='width: 100px;'><?php echo $_smarty_tpl->tpl_vars['item']->value->getModel();?>
</td><td style='width: 100px;'><?php echo $_smarty_tpl->tpl_vars['item']->value->getCarPlate();?>
</td><td style='width: 100px;'><?php echo $_smarty_tpl->tpl_vars['item']->value->getYear();?>
</td></tr><?php } ?></tbody><tfoot><tr><td id="nreg" style="text-align: left;" class="fieldLabel" colspan="5"></td></tr></tfoot></table></div></div></div>
<?php }} ?>