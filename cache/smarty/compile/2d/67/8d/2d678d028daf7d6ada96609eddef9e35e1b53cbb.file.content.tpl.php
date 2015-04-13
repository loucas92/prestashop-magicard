<?php /* Smarty version Smarty-3.1.19, created on 2015-04-06 19:09:17
         compiled from "C:\Users\Lucas Martinez\Documents\wamp\www\prestashop\admin668ztrmzw\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:53245522bdbd90f392-13380247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d678d028daf7d6ada96609eddef9e35e1b53cbb' => 
    array (
      0 => 'C:\\Users\\Lucas Martinez\\Documents\\wamp\\www\\prestashop\\admin668ztrmzw\\themes\\default\\template\\content.tpl',
      1 => 1425640160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53245522bdbd90f392-13380247',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5522bdbd948841_72051111',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5522bdbd948841_72051111')) {function content_5522bdbd948841_72051111($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
