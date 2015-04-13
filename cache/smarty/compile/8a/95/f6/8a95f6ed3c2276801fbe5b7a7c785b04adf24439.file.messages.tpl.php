<?php /* Smarty version Smarty-3.1.19, created on 2015-04-06 21:02:19
         compiled from "C:\Users\Lucas Martinez\Documents\wamp\www\prestashop\modules\themeconfigurator\views\templates\admin\messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:256315522d83bf24326-79171657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a95f6ed3c2276801fbe5b7a7c785b04adf24439' => 
    array (
      0 => 'C:\\Users\\Lucas Martinez\\Documents\\wamp\\www\\prestashop\\modules\\themeconfigurator\\views\\templates\\admin\\messages.tpl',
      1 => 1425640160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '256315522d83bf24326-79171657',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'text' => 0,
    'class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5522d83c081364_46097381',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5522d83c081364_46097381')) {function content_5522d83c081364_46097381($_smarty_tpl) {?>

<div id="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-response" <?php if (!isset($_smarty_tpl->tpl_vars['text']->value)) {?>style="display:none;"<?php }?> class="message alert alert-<?php if (isset($_smarty_tpl->tpl_vars['class']->value)&&$_smarty_tpl->tpl_vars['class']->value=='error') {?>danger<?php } else { ?>success<?php }?>">
	<div><?php if (isset($_smarty_tpl->tpl_vars['text']->value)) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['text']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?></div>
</div><?php }} ?>
