<?php /* Smarty version Smarty-3.1.19, created on 2015-04-06 19:23:49
         compiled from "C:\Users\Lucas Martinez\Documents\wamp\www\prestashop\themes\magicard2\modules\homefeatured\homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:321395522c1250d4038-81809550%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afbcd5aa5e36e31a1f60be1d1dd5669cf84c5a40' => 
    array (
      0 => 'C:\\Users\\Lucas Martinez\\Documents\\wamp\\www\\prestashop\\themes\\magicard2\\modules\\homefeatured\\homefeatured.tpl',
      1 => 1428341004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '321395522c1250d4038-81809550',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5522c125148434_85341955',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5522c125148434_85341955')) {function content_5522c125148434_85341955($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
