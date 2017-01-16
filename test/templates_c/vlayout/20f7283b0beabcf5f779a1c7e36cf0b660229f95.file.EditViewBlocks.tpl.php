<?php /* Smarty version Smarty-3.1.7, created on 2016-12-28 17:01:06
         compiled from "/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/Contacts/EditViewBlocks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20835762935863efd2421836-52979341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20f7283b0beabcf5f779a1c7e36cf0b660229f95' => 
    array (
      0 => '/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/Contacts/EditViewBlocks.tpl',
      1 => 1482942406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20835762935863efd2421836-52979341',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5863efd247587',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5863efd247587')) {function content_5863efd247587($_smarty_tpl) {?>

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