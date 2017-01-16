<?php /* Smarty version Smarty-3.1.7, created on 2016-12-16 12:27:25
         compiled from "C:\xampp\htdocs\crm\includes\runtime/../../layouts/vlayout\modules\Contacts\EditViewBlocks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4015853ddad884246-80817641%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44191d54a3ac71db75bd00883ddf088175d6bbae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\includes\\runtime/../../layouts/vlayout\\modules\\Contacts\\EditViewBlocks.tpl',
      1 => 1481889498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4015853ddad884246-80817641',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5853ddad8c5b9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5853ddad8c5b9')) {function content_5853ddad8c5b9($_smarty_tpl) {?>

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