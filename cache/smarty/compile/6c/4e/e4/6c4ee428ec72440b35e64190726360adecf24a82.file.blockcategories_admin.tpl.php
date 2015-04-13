<?php /* Smarty version Smarty-3.1.19, created on 2015-04-06 19:33:36
         compiled from "C:\Users\Lucas Martinez\Documents\wamp\www\prestashop\modules\blockcategories\views\blockcategories_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1765522c3709e6c60-10432523%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c4ee428ec72440b35e64190726360adecf24a82' => 
    array (
      0 => 'C:\\Users\\Lucas Martinez\\Documents\\wamp\\www\\prestashop\\modules\\blockcategories\\views\\blockcategories_admin.tpl',
      1 => 1425640160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1765522c3709e6c60-10432523',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'helper' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5522c370a2ad06_79906573',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5522c370a2ad06_79906573')) {function content_5522c370a2ad06_79906573($_smarty_tpl) {?>
<div class="form-group">
	<label class="control-label col-lg-3">
		<span class="label-tooltip" data-toggle="tooltip" data-html="true" title="" data-original-title="<?php echo smartyTranslate(array('s'=>'You can upload a maximum of 3 images.','mod'=>'blockcategories'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'Thumbnails','mod'=>'blockcategories'),$_smarty_tpl);?>

		</span>
	</label>
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['helper']->value;?>

	</div>
</div>
<?php }} ?>
