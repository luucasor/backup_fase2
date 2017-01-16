<?php /* Smarty version Smarty-3.1.7, created on 2017-01-13 16:23:26
         compiled from "/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/Settings/ModuleDesigner/Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17085821265877de901b6b16-49301197%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '097bb696cd4b348efbb09b9a036d0c3765de4c39' => 
    array (
      0 => '/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/Settings/ModuleDesigner/Index.tpl',
      1 => 1484324590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17085821265877de901b6b16-49301197',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5877de9031dc9',
  'variables' => 
  array (
    'MODULE' => 0,
    'QUALIFIED_MODULE' => 0,
    'DEFAULT_LANGUAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5877de9031dc9')) {function content_5877de9031dc9($_smarty_tpl) {?><div class="row-fluid widget_header" style="margin-top: 10px;">
	<div class="span12">
		<a href="index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&view=Index&parent=Settings"><h3><?php echo vtranslate('LBL_MODULEDESIGNER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></a>
		<hr/>
	</div>
</div>

<div id="md-container">
	<div id="md-header">
		<div id="md-tab-general" class="md-tab"><img src="layouts/vlayout/modules/Settings/<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
/assets/images/config.png" alt="<?php echo vtranslate('LBL_GENERAL_ALT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /> <?php echo vtranslate('LBL_GENERAL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div>
		<div id="md-tab-blocks-fields" class="md-tab"><img src="layouts/vlayout/modules/Settings/<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
/assets/images/field.png" alt="<?php echo vtranslate('LBL_BLOCKS_FIELDS_ALT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /> <?php echo vtranslate('LBL_BLOCKS_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div>
		<div id="md-tab-custom-links" class="md-tab"><img src="layouts/vlayout/modules/Settings/<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
/assets/images/link.png" alt="<?php echo vtranslate('LBL_CUSTOM_LINKS_ALT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /> <?php echo vtranslate('LBL_CUSTOM_LINKS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div>
		<div id="md-tab-related-lists" class="md-tab"><img src="layouts/vlayout/modules/Settings/<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
/assets/images/related.png" alt="<?php echo vtranslate('LBL_RELATED_LISTS_ALT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /> <?php echo vtranslate('LBL_RELATED_LISTS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div>
		<div id="md-tab-events" class="md-tab"><img src="layouts/vlayout/modules/Settings/<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
/assets/images/event.png" alt="<?php echo vtranslate('LBL_EVENTS_ALT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /> <?php echo vtranslate('LBL_EVENTS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div>
		<div id="md-tab-filters" class="md-tab"><img src="layouts/vlayout/modules/Settings/<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
/assets/images/filter.png" alt="<?php echo vtranslate('LBL_FILTERS_ALT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /> <?php echo vtranslate('LBL_FILTERS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div>
		<div id="md-tab-custom" class="md-tab"><img src="layouts/vlayout/modules/Settings/<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
/assets/images/custom.png" alt="<?php echo vtranslate('LBL_CUSTOM_ALT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /> <?php echo vtranslate('LBL_CUSTOM',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div>
		<div id="md-tab-export" class="md-tab"><img src="layouts/vlayout/modules/Settings/<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
/assets/images/export.png" alt="<?php echo vtranslate('LBL_EXPORT_ALT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /> <?php echo vtranslate('LBL_EXPORT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div>
	</div><!-- md-header -->	
	
	<div id="md-body">
			<div id="md-trash" class="md-trash"></div>
	
			<div id="md-page-general" class="md-page">
				<?php echo $_smarty_tpl->getSubTemplate ((('modules/Settings/').($_smarty_tpl->tpl_vars['MODULE']->value)).('/General.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div><!-- md-page-general -->
			
			<div id="md-page-blocks-fields" class="md-page">
				<?php echo $_smarty_tpl->getSubTemplate ((('modules/Settings/').($_smarty_tpl->tpl_vars['MODULE']->value)).('/BlocksFields.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div><!-- md-page-blocks-fields -->
			
			<div id="md-page-custom-links" class="md-page">
				<?php echo $_smarty_tpl->getSubTemplate ((('modules/Settings/').($_smarty_tpl->tpl_vars['MODULE']->value)).('/CustomLinks.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div><!-- md-page-custom-links -->
			
			<div id="md-page-related-lists" class="md-page">
				<?php echo $_smarty_tpl->getSubTemplate ((('modules/Settings/').($_smarty_tpl->tpl_vars['MODULE']->value)).('/RelatedLists.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div><!-- md-page-related-list -->
			
			<div id="md-page-events" class="md-page">
				<?php echo $_smarty_tpl->getSubTemplate ((('modules/Settings/').($_smarty_tpl->tpl_vars['MODULE']->value)).('/Events.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div><!-- md-page-events -->
			
			<div id="md-page-filters" class="md-page">
				<?php echo $_smarty_tpl->getSubTemplate ((('modules/Settings/').($_smarty_tpl->tpl_vars['MODULE']->value)).('/Filters.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div><!-- md-page-filters -->
			
			<div id="md-page-custom" class="md-page">
				<?php echo $_smarty_tpl->getSubTemplate ((('modules/Settings/').($_smarty_tpl->tpl_vars['MODULE']->value)).('/Custom.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div><!-- md-page-custom -->
			
			<div id="md-page-export" class="md-page">
				<?php echo $_smarty_tpl->getSubTemplate ((('modules/Settings/').($_smarty_tpl->tpl_vars['MODULE']->value)).('/Export.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div><!-- md-page-export -->	
			
			
	</div><!-- md-body -->
	
</div><!-- md-container -->

<input type="hidden" id="md-default-language" value="<?php echo $_smarty_tpl->tpl_vars['DEFAULT_LANGUAGE']->value;?>
" />
<a id="md-edit-popup-link" data-fancybox-type="iframe" href="#">Edit popup link</a><?php }} ?>