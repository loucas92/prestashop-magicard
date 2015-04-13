<?php /* Smarty version Smarty-3.1.19, created on 2015-04-06 18:51:16
         compiled from "C:\Users\Lucas Martinez\Documents\wamp\www\prestashop\themes\default-bootstrap\modules\blockwishlist\blockwishlist_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92705522b984379573-53266453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '239bdf1e1842314d4da2557e979af3647bfdd9f0' => 
    array (
      0 => 'C:\\Users\\Lucas Martinez\\Documents\\wamp\\www\\prestashop\\themes\\default-bootstrap\\modules\\blockwishlist\\blockwishlist_button.tpl',
      1 => 1425640160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92705522b984379573-53266453',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5522b9843ae3e7_69568160',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5522b9843ae3e7_69568160')) {function content_5522b9843ae3e7_69568160($_smarty_tpl) {?>

<div class="wishlist">
	<a class="addToWishlist wishlistProd_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" href="#" rel="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
', false, 1); return false;">
		<?php echo smartyTranslate(array('s'=>"Add to Wishlist",'mod'=>'blockwishlist'),$_smarty_tpl);?>

	</a>
</div><?php }} ?>
