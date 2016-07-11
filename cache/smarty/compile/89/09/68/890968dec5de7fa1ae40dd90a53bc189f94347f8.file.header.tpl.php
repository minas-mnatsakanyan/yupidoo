<?php /* Smarty version Smarty-3.1.19, created on 2016-07-05 12:24:09
         compiled from "C:\xampp-portable\htdocs\yupido\themes\Yupido\modules\homeslider\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30590577ab579548e52-05817499%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '890968dec5de7fa1ae40dd90a53bc189f94347f8' => 
    array (
      0 => 'C:\\xampp-portable\\htdocs\\yupido\\themes\\Yupido\\modules\\homeslider\\header.tpl',
      1 => 1431361068,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30590577ab579548e52-05817499',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_577ab57963b194_18460021',
  'variables' => 
  array (
    'homeslider' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577ab57963b194_18460021')) {function content_577ab57963b194_18460021($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['homeslider']->value)) {?>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('homeslider_loop'=>intval($_smarty_tpl->tpl_vars['homeslider']->value['loop'])),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('homeslider_width'=>intval($_smarty_tpl->tpl_vars['homeslider']->value['width'])),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('homeslider_speed'=>intval($_smarty_tpl->tpl_vars['homeslider']->value['speed'])),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('homeslider_pause'=>intval($_smarty_tpl->tpl_vars['homeslider']->value['pause'])),$_smarty_tpl);?>

<?php }?><?php }} ?>
