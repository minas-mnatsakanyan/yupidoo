<?php /* Smarty version Smarty-3.1.19, created on 2016-07-06 08:17:13
         compiled from "C:\xampp-portable\htdocs\yupido\admin1295pfxdl\themes\default\template\controllers\cms_content\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19983577cf6c9e3b695-98678850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbc7dcfae991103d96ba60613409ef04d0a8f0f5' => 
    array (
      0 => 'C:\\xampp-portable\\htdocs\\yupido\\admin1295pfxdl\\themes\\default\\template\\controllers\\cms_content\\content.tpl',
      1 => 1425629360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19983577cf6c9e3b695-98678850',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms_breadcrumb' => 0,
    'content' => 0,
    'url_prev' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_577cf6c9eacb36_94996982',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577cf6c9eacb36_94996982')) {function content_577cf6c9eacb36_94996982($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['cms_breadcrumb']->value)) {?>
	<ul class="breadcrumb cat_bar">
		<?php echo $_smarty_tpl->tpl_vars['cms_breadcrumb']->value;?>

	</ul>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php if (isset($_smarty_tpl->tpl_vars['url_prev']->value)) {?>
	<script type="text/javascript">
	$(document).ready(function () {
		var re = /url_preview=(.*)/;
		var url = re.exec(window.location.href);
		if (typeof url !== 'undefined' && url !== null && typeof url[1] !== 'undefined' && url[1] === "1")
			window.open("<?php echo $_smarty_tpl->tpl_vars['url_prev']->value;?>
", "_blank");
	});
	</script>
<?php }?>
<?php }} ?>
