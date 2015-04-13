<?php /* Smarty version Smarty-3.1.19, created on 2015-04-12 14:41:13
         compiled from "C:\Users\Lucas Martinez\Documents\wamp\www\prestashop\modules\leftmenu\leftmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12335524fe1c8e53a1-31713675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0074007c5bc20d3712b9c0effc8bb50eaec1b18e' => 
    array (
      0 => 'C:\\Users\\Lucas Martinez\\Documents\\wamp\\www\\prestashop\\modules\\leftmenu\\leftmenu.tpl',
      1 => 1428842470,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12335524fe1c8e53a1-31713675',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5524fe1c8e7573_83532802',
  'variables' => 
  array (
    'modules_dir' => 0,
    'logo_url' => 0,
    'shop_name' => 0,
    'logo_image_width' => 0,
    'logo_image_height' => 0,
    'link' => 0,
    'search_query' => 0,
    'img_dir' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5524fe1c8e7573_83532802')) {function content_5524fe1c8e7573_83532802($_smarty_tpl) {?>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['modules_dir']->value;?>
leftmenu/css/leftmenu.css"> 
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['modules_dir']->value;?>
leftmenu/js/leftmenu.js"></script>

<!-- Block mymodule -->
<div id="leftmenumagicard">
	<header>
		<a href="">
			<img id="logo" class="logo img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['logo_image_width']->value)&&$_smarty_tpl->tpl_vars['logo_image_width']->value) {?> width="<?php echo $_smarty_tpl->tpl_vars['logo_image_width']->value;?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['logo_image_height']->value)&&$_smarty_tpl->tpl_vars['logo_image_height']->value) {?> height="<?php echo $_smarty_tpl->tpl_vars['logo_image_height']->value;?>
"<?php }?>/>
		</a>
		<form id="searchbox" method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search',null,null,null,false,null,true), ENT_QUOTES, 'UTF-8', true);?>
" >
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Rechercher un article','mod'=>'blocksearch'),$_smarty_tpl);?>
" value="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" />
			<button type="submit" name="submit_search" id="searchmagicard">
				<span><?php echo smartyTranslate(array('s'=>'','mod'=>'blocksearch'),$_smarty_tpl);?>
</span>
			</button>
		</form>
	</header>
	<section>
		<div id="tabs">
		  <ul id="onglets">
		    <li><a href="#parcourir">Parcourir</a></li>
		    <li><a href="#panier">Panier</a></li>
		  </ul>
		  <div id="parcourir">
		    <div id="accordion">
			  <p>Vampire</p>
			  <div>
			    <ul>
			    	<li>The Camarilla</li>
			    	<li>Gehenna</li>
			    	<li>Legacies of Blood</li>
			    	<li>Final nights</li>
			    	<li>Sword of Caine</li>
			    </ul>
			  </div>
			  <p>World of Warcraft TCG</p>
			  <div>
			    <ul>
			    	<li>The Camarilla</li>
			    	<li>Gehenna</li>
			    	<li>Legacies of Blood</li>
			    	<li>Final nights</li>
			    	<li>Sword of Caine</li>
			    </ul>
			  </div>
			  <p>Magic</p>
			  <div>
			    <ul>
			    	<li>The Camarilla</li>
			    	<li>Gehenna</li>
			    	<li>Legacies of Blood</li>
			    	<li>Final nights</li>
			    	<li>Sword of Caine</li>
			    </ul>
			  </div>
		  </div>
		  </div>
		  <div id="panier">
		    <p>Morbi tincidunt, dui sit amet facilisis feugiat</p>
		  </div>		
	</section>
	<footer>
		<a href="" id="inscription">S'inscrire gratuitement</a>
		<a href="" id="connexion"> Se connecter</a>
		<div class="deco1"></div>
		<div id="logosociaux">
		<img id="facebooklogo" src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
facebooklogo.png">
		<img id="twitterlogo" src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
twitter.png">
		</div>
		<div class="deco2"></div>
		
		 
	</footer>
</div>
<!-- /Block mymodule -->
<?php }} ?>
