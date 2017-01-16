<?php /* Smarty version Smarty-3.1.7, created on 2017-01-16 19:23:33
         compiled from "/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/Accounts/EditViewBlocks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1426354898587d1b38393cb5-22783474%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd4a65185976fd677180c25a2f16627b4f266279' => 
    array (
      0 => '/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/Accounts/EditViewBlocks.tpl',
      1 => 1484594599,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1426354898587d1b38393cb5-22783474',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_587d1b383f291',
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587d1b383f291')) {function content_587d1b383f291($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("EditViewBlocks.tpl",'Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("EditVehiclesView.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script>

    picklistChange();

    $("#picklist_cf_1027").on("change", function() {
        picklistChange();
    });
    
    function picklistChange(){
        var picklist = document.getElementById("picklist_cf_1027");
        var itemSelecionado = picklist.options[picklist.selectedIndex].value;
        var campoOutros = $("#Contacts_editView_fieldName_cf_1029");
        var tituloCampoOutros = $("#label_cf_1029");

        if (itemSelecionado === 'Outros') {
            tituloCampoOutros.show();
            campoOutros.prop("required", "true");
            campoOutros.show();
            campoOutros.focus();
        } else {
            tituloCampoOutros.hide();
            campoOutros.prop("required", "");
            campoOutros.hide();
        }
        return false;
    }
    
    focusFirstName();
    
    function focusFirstName(){
        var firstname = $("#Contacts_editView_fieldName_firstname");
        firstname.focus();
        firstname.val(firstname.val());
    }


</script>
<?php }} ?>