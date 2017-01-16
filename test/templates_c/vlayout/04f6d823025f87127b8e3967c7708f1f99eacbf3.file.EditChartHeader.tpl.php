<?php /* Smarty version Smarty-3.1.7, created on 2017-01-12 18:32:43
         compiled from "/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/Reports/EditChartHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1553068025877cbcbcf34a7-07423897%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04f6d823025f87127b8e3967c7708f1f99eacbf3' => 
    array (
      0 => '/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/Reports/EditChartHeader.tpl',
      1 => 1482942406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1553068025877cbcbcf34a7-07423897',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORD_ID' => 0,
    'QUALIFIED_MODULE' => 0,
    'REPORT_MODEL' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5877cbcbd6257',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5877cbcbd6257')) {function content_5877cbcbd6257($_smarty_tpl) {?>
<div class="editContainer" style="padding-left: 1%;padding-right: 3%"><h3><?php if ($_smarty_tpl->tpl_vars['RECORD_ID']->value==''){?><?php echo vtranslate('LBL_CREATING_CHART_REPORT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }else{ ?><?php echo vtranslate('LBL_EDITING_CHART_REPORT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 : <?php echo $_smarty_tpl->tpl_vars['REPORT_MODEL']->value->get('reportname');?>
<?php }?></h3><hr><div><ul class="crumbs marginLeftZero"><li class="first step"  style="z-index:9" id="step1"><a><span class="stepNum">1</span><span class="stepText"><?php echo vtranslate('LBL_REPORT_DETAILS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></a></li><li style="z-index:8" class="step" id="step2"><a><span class="stepNum">2</span><span class="stepText"><?php echo vtranslate('LBL_FILTERS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></a></li><li class="step last" style="z-index:7" id="step3"><a><span class="stepNum">3</span><span class="stepText"><?php echo vtranslate('LBL_SELECT_CHART',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></a></li></ul></div><div class="clearfix"></div></div><?php }} ?>