<?php /* Smarty version Smarty-3.1.7, created on 2016-12-28 17:00:55
         compiled from "/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/Google/map.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14821994035863efc723d2b0-37088535%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ac28e201314da1c9151fe874ad758df3efc118f' => 
    array (
      0 => '/opt/lampp/htdocs/crm/includes/runtime/../../layouts/vlayout/modules/Google/map.tpl',
      1 => 1482942406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14821994035863efc723d2b0-37088535',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORD' => 0,
    'SOURCE_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5863efc72b174',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5863efc72b174')) {function content_5863efc72b174($_smarty_tpl) {?>
<script type="text/javascript" src="layouts/vlayout/modules/Google/resources/map.js"></script>

<span id="map_record" class="hide"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value;?>
</span>
<span id="map_module" class="hide"><?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
</span>
<div id="map_canvas">
    <span id="map_address" class="hide"></span>
    <img id="map_link" class="pull-right icon-share cursorPointer"></img>
</div>

<?php }} ?>