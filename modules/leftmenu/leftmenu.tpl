
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="{$modules_dir}leftmenu/css/leftmenu.css"> 
<script type="text/javascript" src="{$modules_dir}leftmenu/js/leftmenu.js"></script>

<!-- Block mymodule -->
<div id="leftmenumagicard">
	<header>
		<a href="">
			<img id="logo" class="logo img-responsive" src="{$logo_url}" alt="{$shop_name|escape:'html':'UTF-8'}"{if isset($logo_image_width) && $logo_image_width} width="{$logo_image_width}"{/if}{if isset($logo_image_height) && $logo_image_height} height="{$logo_image_height}"{/if}/>
		</a>
		<form id="searchbox" method="get" action="{$link->getPageLink('search', null, null, null, false, null, true)|escape:'html':'UTF-8'}" >
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="{l s='Rechercher un article' mod='blocksearch'}" value="{$search_query|escape:'htmlall':'UTF-8'|stripslashes}" />
			<button type="submit" name="submit_search" id="searchmagicard">
				<span>{l s='' mod='blocksearch'}</span>
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
		<img id="facebooklogo" src="{$img_dir}facebooklogo.png">
		<img id="twitterlogo" src="{$img_dir}twitter.png">
		</div>
		<div class="deco2"></div>
		
		 
	</footer>
</div>
<!-- /Block mymodule -->
