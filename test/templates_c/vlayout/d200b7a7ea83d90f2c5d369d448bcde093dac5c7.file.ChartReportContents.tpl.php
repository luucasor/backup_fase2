<?php /* Smarty version Smarty-3.1.7, created on 2017-01-12 18:34:57
         compiled from "/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/Reports/ChartReportContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18019592535877cc51d16bf3-24218431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd200b7a7ea83d90f2c5d369d448bcde093dac5c7' => 
    array (
      0 => '/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/Reports/ChartReportContents.tpl',
      1 => 1482942406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18019592535877cc51d16bf3-24218431',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CHART_TYPE' => 0,
    'DATA' => 0,
    'CLICK_THROUGH' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5877cc51d32c8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5877cc51d32c8')) {function content_5877cc51d32c8($_smarty_tpl) {?>

<input type='hidden' name='charttype' value="<?php echo $_smarty_tpl->tpl_vars['CHART_TYPE']->value;?>
" />
<input type='hidden' name='data' value='<?php echo $_smarty_tpl->tpl_vars['DATA']->value;?>
' />
<input type='hidden' name='clickthrough' value="<?php echo $_smarty_tpl->tpl_vars['CLICK_THROUGH']->value;?>
" />

<br>
<div style="margin:0px 20px;">
	<div class='border1px' style="padding:30px 100px;">
		<div id='chartcontent' style="min-height:400px;" ></div>
		<br>
		<?php if ($_smarty_tpl->tpl_vars['CLICK_THROUGH']->value!='true'){?>
			<div class='row-fluid alert-info' style="padding:20px">
				<span class='span3 offset4'> &nbsp;</span>
				<span class='span alert-info'>
					<i class="icon-info-sign"></i>
					<?php echo vtranslate('LBL_CLICK_THROUGH_NOT_AVAILABLE',$_smarty_tpl->tpl_vars['MODULE']->value);?>

				</span>
			</div>
			<br>
		<?php }?>
	</div>
</div>
<br>
<?php }} ?>