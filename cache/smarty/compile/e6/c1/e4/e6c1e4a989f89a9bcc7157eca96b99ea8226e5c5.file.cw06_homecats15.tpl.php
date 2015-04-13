<?php /* Smarty version Smarty-3.1.19, created on 2015-04-07 14:59:41
         compiled from "C:\Users\Lucas Martinez\Documents\wamp\www\prestashop\modules\cw06_homecats\cw06_homecats15.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180175523d4bd2e96e4-61649353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6c1e4a989f89a9bcc7157eca96b99ea8226e5c5' => 
    array (
      0 => 'C:\\Users\\Lucas Martinez\\Documents\\wamp\\www\\prestashop\\modules\\cw06_homecats\\cw06_homecats15.tpl',
      1 => 1357588002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180175523d4bd2e96e4-61649353',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'subcategories' => 0,
    'subcategory' => 0,
    'link' => 0,
    'mediumSize' => 0,
    'img_cat_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5523d4bd4076a7_82292979',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5523d4bd4076a7_82292979')) {function content_5523d4bd4076a7_82292979($_smarty_tpl) {?>
	<?php if (isset($_smarty_tpl->tpl_vars['subcategories']->value)) {?>
	<h2><?php echo smartyTranslate(array('s'=>'Nos catégories','mod'=>'cw06_homecats'),$_smarty_tpl);?>
</h2>
		<!-- Subcategories -->
		<div id="subcategories">
			<ul class="inline_list">
			<?php  $_smarty_tpl->tpl_vars['subcategory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subcategory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subcategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->key => $_smarty_tpl->tpl_vars['subcategory']->value) {
$_smarty_tpl->tpl_vars['subcategory']->_loop = true;
?>
				<li class="clearfix">
					<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['subcategory']->value['id_category'],$_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['subcategory']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="img">
						<?php if ($_smarty_tpl->tpl_vars['subcategory']->value['id_image']) {?>
							<img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getCatImageLink($_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite'],$_smarty_tpl->tpl_vars['subcategory']->value['id_image'],'medium_default');?>
" alt="" width="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['height'];?>
" />
						<?php } else { ?>
							<img src="<?php echo $_smarty_tpl->tpl_vars['img_cat_dir']->value;?>
default-medium_default.jpg" alt="" width="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['height'];?>
" />
						<?php }?>
					</a>
					<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['subcategory']->value['id_category'],$_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="cat_name"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['subcategory']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a>
					<?php if ($_smarty_tpl->tpl_vars['subcategory']->value['description']) {?>
						<p class="cat_desc"><?php echo $_smarty_tpl->tpl_vars['subcategory']->value['description'];?>
</p>
					<?php }?>
				</li>
			<?php } ?>
			</ul>
			<br class="clear"/>
		</div>
		
	<?php }?>
<?php }} ?>
