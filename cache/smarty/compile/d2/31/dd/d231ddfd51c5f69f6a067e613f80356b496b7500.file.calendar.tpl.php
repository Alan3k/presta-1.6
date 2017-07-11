<?php /* Smarty version Smarty-3.1.19, created on 2017-07-11 09:05:32
         compiled from "C:\xampp\htdocs\www\git\admin\themes\default\template\controllers\stats\calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14037596478bc68e1d3-84640246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd231ddfd51c5f69f6a067e613f80356b496b7500' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\git\\admin\\themes\\default\\template\\controllers\\stats\\calendar.tpl',
      1 => 1498229114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14037596478bc68e1d3-84640246',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_596478bc693171_82675605',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596478bc693171_82675605')) {function content_596478bc693171_82675605($_smarty_tpl) {?>

<div id="statsContainer" class="col-md-9">
	<?php echo $_smarty_tpl->getSubTemplate ("../../form_date_range_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
