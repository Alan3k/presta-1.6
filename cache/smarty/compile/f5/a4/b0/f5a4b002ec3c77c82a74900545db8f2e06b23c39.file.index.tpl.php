<?php /* Smarty version Smarty-3.1.19, created on 2017-07-11 09:05:29
         compiled from "C:\xampp\htdocs\www\git\themes\default-bootstrap\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7262596478b9558e21-79929229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5a4b002ec3c77c82a74900545db8f2e06b23c39' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\git\\themes\\default-bootstrap\\index.tpl',
      1 => 1498229114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7262596478b9558e21-79929229',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOOK_HOME_TAB_CONTENT' => 0,
    'HOOK_HOME_TAB' => 0,
    'HOOK_HOME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_596478b957a995_92595296',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596478b957a995_92595296')) {function content_596478b957a995_92595296($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)) {?>
    <?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)) {?>
        <ul id="home-page-tabs" class="nav nav-tabs clearfix">
			<?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value;?>

		</ul>
	<?php }?>
	<div class="tab-content"><?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value;?>
</div>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME']->value)) {?>
	<div class="clearfix"><?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>
</div>
<?php }?><?php }} ?>
