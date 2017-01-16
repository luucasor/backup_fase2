<?php /* Smarty version Smarty-3.1.7, created on 2016-12-28 17:00:29
         compiled from "/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/Potentials/ContactInfoView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6501428255863efad163935-07230400%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '217dea18eb0f749f7f7f4f1bedfe3d436a95491c' => 
    array (
      0 => '/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/Potentials/ContactInfoView.tpl',
      1 => 1482942406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6501428255863efad163935-07230400',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONTACT' => 0,
    'VEHICLES' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5863efad1d42d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5863efad1d42d')) {function content_5863efad1d42d($_smarty_tpl) {?>
<table id="contactInfo-table" style="margin-bottom:15px;margin-right:40px;" class="table table-bordered"><thead><tr><th colspan="4">Informações do Contato</th></tr></thead><tbody><tr><td class="fieldLabel" style="border-top: 1px solid #ddd"><label class="muted pull-right marginRight10px" width="10px;">Nome</label></td><td style="border-top: 1px solid #ddd" colspan="3"><span type="text" name="" disabled><?php echo $_smarty_tpl->tpl_vars['CONTACT']->value->getFirstname();?>
</span></td></tr><tr><td class="fieldLabel" style="border-top: 1px solid #ddd"><label class="muted pull-right marginRight10px" width="10px;">Email</label></td><td style="border-top: 1px solid #ddd"><span type="text" name="" disabled><?php echo $_smarty_tpl->tpl_vars['CONTACT']->value->getEmail();?>
</span></td><td class="fieldLabel" style="border-top: 1px solid #ddd"><label class="muted pull-right marginRight10px" width="10px;">Celular</label></td><td style="border-top: 1px solid #ddd"><span type="text" name="" disabled><?php echo $_smarty_tpl->tpl_vars['CONTACT']->value->getMobile();?>
</span></td></tr><tr><td class="fieldLabel" style="border-top: 1px solid #ddd"><label class="muted pull-right marginRight10px" width="10px;">Fonte do Contato</label></td><td style="border-top: 1px solid #ddd"><span type="text" name="" disabled><?php echo $_smarty_tpl->tpl_vars['CONTACT']->value->getLeadsource();?>
</span></td><td class="fieldLabel" style="border-top: 1px solid #ddd"><label class="muted pull-right marginRight10px" width="10px;">Telefone Fixo</label></td><td style="border-top: 1px solid #ddd"><span type="text" name="" disabled><?php echo $_smarty_tpl->tpl_vars['CONTACT']->value->getPhone();?>
</span></td></tr><tr><td class="fieldLabel" style="border-top: 1px solid #ddd"><label class="muted pull-right marginRight10px" width="10px;">Status do Contato</label></td><td style="border-top: 1px solid #ddd"><span type="text" name="" disabled><?php echo $_smarty_tpl->tpl_vars['CONTACT']->value->getStatus();?>
</span></td><td class="fieldLabel" style="border-top: 1px solid #ddd"><label class="muted pull-right marginRight10px" width="10px;">Entidade Gestora</label></td><td style="border-top: 1px solid #ddd"><span type="text" name="" disabled><?php echo $_smarty_tpl->tpl_vars['CONTACT']->value->getEntity();?>
</span></td></tr><tr><td class="fieldLabel" style="border-top: 1px solid #ddd"><label class="muted pull-right marginRight10px" width="10px;">Classificação</label></td><td style="border-top: 1px solid #ddd"><span type="text" name="" disabled><?php echo $_smarty_tpl->tpl_vars['CONTACT']->value->getClassification();?>
</span></td><td class="fieldLabel" style="border-top: 1px solid #ddd"></td><td style="border-top: 1px solid #ddd"></td></tr><tr><td class="fieldLabel" style="border-top: 1px solid #ddd"><label class="muted pull-right marginRight10px" width="10px;">Descrição</label></td><td style="border-top: 1px solid #ddd" colspan="3"><span type="text" name="" disabled><?php echo $_smarty_tpl->tpl_vars['CONTACT']->value->getDescription();?>
</span></td></tr><tr><td class="fieldLabel" style="text-align: center; border-top: 1px solid #ddd"><label class="muted marginRight10px" width="10px;">Tipo de Veículo</label></td><td class="fieldLabel" style="text-align: center; border-top: 1px solid #ddd"><label class="muted marginRight10px" width="10px;">Modelo</label></td><td class="fieldLabel" style="text-align: center; border-top: 1px solid #ddd"><label class="muted marginRight10px" width="10px;">Placa</label></td><td class="fieldLabel" style="text-align: center; border-top: 1px solid #ddd"><label class="muted marginRight10px" width="10px;">Ano</label></td></tr><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['VEHICLES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?><tr><td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['item']->value->getType();?>
</td><td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['item']->value->getModel();?>
</td><td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['item']->value->getCarPlate();?>
</td><td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['item']->value->getYear();?>
</td></tr><?php } ?><tr><td class="fieldLabel" id="nreg" style="border-top: 1px solid #ddd;text-align: left;" colspan="5"><label class="muted pull-right marginRight10px" width="10px;"><?php echo count($_smarty_tpl->tpl_vars['VEHICLES']->value);?>
 Veículo(s)</label></td></tr></tbody></table><?php }} ?>