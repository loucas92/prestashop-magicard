<?php /* Smarty version Smarty-3.1.19, created on 2015-04-06 18:51:11
         compiled from "C:\Users\Lucas Martinez\Documents\wamp\www\prestashop\admin\themes\default\template\controllers\modules\modal_not_trusted_blocked.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211385522b97fb25fb0-87525241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a7b2568f07d1f89f8619a9e76573536c5948c06' => 
    array (
      0 => 'C:\\Users\\Lucas Martinez\\Documents\\wamp\\www\\prestashop\\admin\\themes\\default\\template\\controllers\\modules\\modal_not_trusted_blocked.tpl',
      1 => 1425640160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211385522b97fb25fb0-87525241',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5522b97fb5e739_44810559',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5522b97fb5e739_44810559')) {function content_5522b97fb5e739_44810559($_smarty_tpl) {?>

<div class="modal-body">
	<div class="alert alert-warning">
		<h3><?php echo smartyTranslate(array('s'=>'This module could not be verified by PrestaShop.'),$_smarty_tpl);?>
</h3>

		<p><?php echo smartyTranslate(array('s'=>"This generally happens when the module isn't distributed through our official marketplace, PrestaShop Addons - or when your server failed to communicate with PrestaShop Addons."),$_smarty_tpl);?>
</p>
	</div>

	<div class="row">
		<div class="col-sm-2" style="text-align: center;">
			<img id="untrusted-module-logo" class="" src="" alt="">
		</div>
		<div class="col-sm-10">
			<table class="table">
				<tr>
					<td><?php echo smartyTranslate(array('s'=>'Module'),$_smarty_tpl);?>
</td>
					<td><strong><span class="module-display-name-placeholder"></span></strong></td>
				</tr>
				<tr>
					<td><?php echo smartyTranslate(array('s'=>'Author'),$_smarty_tpl);?>
</td>
					<td><strong><span class="author-name-placeholder"></span></strong></td>
				</tr>
			</table>
		</div>

		<div class="col-sm-12" style="text-align: center; padding-top: 12px;">
			<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo smartyTranslate(array('s'=>'Back to modules list'),$_smarty_tpl);?>
</button>
		</div>
	</div>
</div>

<div class="modal-footer">
	<div class="alert alert-info">
		<p><?php echo smartyTranslate(array('s'=>'Since you may not have installed this module from PrestaShop Addons, we cannot assert that the module is complying with our safety requirements (e.g. that it is not adding some undisclosed functionalities such as ads, hidden links, spam, etc...).'),$_smarty_tpl);?>
</p>

		<p><?php echo smartyTranslate(array('s'=>'You can search for similar modules on the official marketplace.'),$_smarty_tpl);?>
</p>

		<p><?php echo smartyTranslate(array('s'=>"[1]Click here to browse our catalog on PrestaShop Addons[/1].",'tags'=>array('<a class="catalog-link" href="#">')),$_smarty_tpl);?>

	</div>
</div><?php }} ?>
