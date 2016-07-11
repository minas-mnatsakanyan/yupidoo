<?php /* Smarty version Smarty-3.1.19, created on 2016-07-04 15:13:49
         compiled from "C:\xampp-portable\htdocs\yupido\admin1295pfxdl\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21965577ab56d211db0-29596253%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33d944eeeea5936da4f89e1ae59c86a229bfd051' => 
    array (
      0 => 'C:\\xampp-portable\\htdocs\\yupido\\admin1295pfxdl\\themes\\default\\template\\content.tpl',
      1 => 1425629360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21965577ab56d211db0-29596253',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_577ab56d235039_61910749',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577ab56d235039_61910749')) {function content_577ab56d235039_61910749($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
