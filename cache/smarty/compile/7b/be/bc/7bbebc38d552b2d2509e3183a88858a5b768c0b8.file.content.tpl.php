<?php /* Smarty version Smarty-3.1.19, created on 2017-07-11 09:05:32
         compiled from "C:\xampp\htdocs\www\git\admin\themes\default\template\controllers\shop\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22364596478bc3bdfa9-53548474%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bbebc38d552b2d2509e3183a88858a5b768c0b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\git\\admin\\themes\\default\\template\\controllers\\shop\\content.tpl',
      1 => 1498229114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22364596478bc3bdfa9-53548474',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shops_tree' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_596478bc3c6d76_04884350',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596478bc3c6d76_04884350')) {function content_596478bc3c6d76_04884350($_smarty_tpl) {?>

<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div><?php }} ?>
