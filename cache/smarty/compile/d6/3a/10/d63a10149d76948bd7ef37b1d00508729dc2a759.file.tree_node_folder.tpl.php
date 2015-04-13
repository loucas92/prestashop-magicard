<?php /* Smarty version Smarty-3.1.19, created on 2015-04-06 18:51:32
         compiled from "C:\Users\Lucas Martinez\Documents\wamp\www\prestashop\admin\themes\default\template\helpers\tree\tree_node_folder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:302615522b99435f769-40502210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd63a10149d76948bd7ef37b1d00508729dc2a759' => 
    array (
      0 => 'C:\\Users\\Lucas Martinez\\Documents\\wamp\\www\\prestashop\\admin\\themes\\default\\template\\helpers\\tree\\tree_node_folder.tpl',
      1 => 1425640160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '302615522b99435f769-40502210',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5522b9943761f8_05016054',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5522b9943761f8_05016054')) {function content_5522b9943761f8_05016054($_smarty_tpl) {?>
<li class="tree-folder">
	<span class="tree-folder-name">
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
	<ul class="tree">
		<?php echo $_smarty_tpl->tpl_vars['children']->value;?>

	</ul>
</li><?php }} ?>
