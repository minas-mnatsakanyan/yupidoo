<?php /* Smarty version Smarty-3.1.19, created on 2016-07-05 08:11:08
         compiled from "C:\xampp\htdocs\yupido\modules\paypalusa\views\templates\hook\express-checkout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11776577ba3dc859b56-82638786%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9ee191af00805df63d974a80b02c1710dcb97bd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yupido\\modules\\paypalusa\\views\\templates\\hook\\express-checkout.tpl',
      1 => 1431864490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11776577ba3dc859b56-82638786',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_name' => 0,
    'paypal_usa_express_checkout_no_token' => 0,
    'paypal_usa_express_checkout_hook_payment' => 0,
    'paypal_usa_action_payment' => 0,
    'paypal_usa_merchant_country_is_mx' => 0,
    'module_dir' => 0,
    'lang_iso' => 0,
    'paypal_usa_action' => 0,
    'paypal_usa_from_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_577ba3dc915ec1_41436713',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577ba3dc915ec1_41436713')) {function content_577ba3dc915ec1_41436713($_smarty_tpl) {?>
" method="post">
img/boton_terminar_compra.png" alt="" style="vertical-align: middle; margin-right: 10px;float: left;" />
</p>

" method="post" onsubmit="$('#paypal_express_checkout_id_product_attribute').val($('#idCombination').val());						$('#paypal_express_checkout_quantity').val($('#quantity_wanted').val());">
" />
/img/accpmark_tarjdeb_mx.png<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
/img/express_checkout_mx.png<?php }?>" alt="" style="float: left;"/>