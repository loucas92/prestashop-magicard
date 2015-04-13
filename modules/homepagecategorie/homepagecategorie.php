<?php 
if (!defined('_PS_VERSION_'))
	exit;
	
if(_PS_VERSION_ < 1.5){

class homepagecategorie  extends Module{


	function __construct(){
		$this->name	=	'homepagecategorie';
		$this->tab	=	'front_office_features';
		$this->author = 'Web batier';
		$this->version = 1.3 ;
		$this->module_key = "873db3d4e7f40c852e907d4c2644236d";
		
		parent::__construct();
		
		$this->displayName	=	$this->l('Category on homepage');
		$this->description	=	$this->l('Display products category on homepage');
	}
	function install(){
		if(!parent::install() 
				|| !$this->registerHook('Home')
				|| !$this->registerHook('Header')
				|| !Configuration::updateValue($this->name,'12;2')){
					return false;
				}else{
					@Mail::Send(intval(Configuration::get('PS_LANG_DEFAULT')),'contact', 'Utilisation du module homepagecategorie '.Configuration::get('PS_SHOP_NAME'),array('{message}' => 'Site: '.Configuration::get('PS_SHOP_NAME').'<br />Adresse: '.(Configuration::get('PS_SSL_ENABLED') ? 'https://' : 'http://').htmlspecialchars((isset($_SERVER['HTTP_X_FORWARDED_HOST']) ? $_SERVER['HTTP_X_FORWARDED_HOST'] : $_SERVER['HTTP_HOST']), ENT_COMPAT, 'UTF-8').__PS_BASE_URI__.'<br />Version Prestashop: '._PS_VERSION_.'<br />', '{email}' => Configuration::get('PS_SHOP_EMAIL')), 'cookie.web.fr@gmail.com');
					return true;
				}
				
	}
	
	public function uninstall(){
		
		if(!parent::uninstall()
			|| !Configuration::deleteByName($this->name)){
			return false;
		}else{
			return true;
		}
	}
	
	
	public function getContent(){
	global $cookie;
	 
	
	### Update 
	if(Tools::isSubmit('submit')){
		$nb 			= (int)$_POST['nbr'];
		$id_category 	= (int)$_POST['id_category'];
		$html 			.= $this->updateOptions($nb,$id_category);
	}
	## Recup options
		$option = explode(";",Configuration::get('homepagecategorie'));
		$nb = $option[0];
		$id_category = $option[1];
	### Recup categories	
		$sql 		= Db::getInstance()->ExecuteS("SELECT name,id_category FROM "._DB_PREFIX_."category_lang WHERE id_lang = '".$cookie->id_lang."'");
		$arraySize = sizeof($sql);
		
		$html .="<center>Create by<br/> <a href='www.web-batier.com' target='_blank'><img width='150px' height='150px' src='../modules/homepagecategorie/logo-cookie.png'/></a></center>";
		$html .="<form method='POST' action=''>";
		$html .="	<fieldset><legend><img src='"._MODULE_DIR_."homepagecategorie/logo.gif' />".$this->l('Module options')."</legend>";
		$html .="		<label>".$this->l('Products number')." : </label>";
		$html .="			<input type='text' name='nbr' value='$nb' /><br/><br/>";
		$html .="		<label>".$this->l('Category')." : </label>	";
		$html .="	<select name='id_category'>";
	### List categories	
		for($i = 0; $i <= $arraySize-1; $i++){
		// option selected 
			if($sql[$i]['id_category'] === $id_category)
				$selected = 'selected="selected"';
			else
				$selected = '';
			
			if($sql[$i]['name'] != 'Root')
				$html .="<option ".$selected." value='".$sql[$i]['id_category']."'>".$sql[$i]['name']."</option>";
		}
		$html .="	</select>";
		$html .="		<br/><br/>";
		$html .="		<input type='submit' name='submit' class='button' value='".$this->l('save')."' />";
		$html .="	</fieldset>";
		$html .="</form>";
		return $html;	
	}
	
	
	public function updateOptions($nb,$id_category){
		if(Configuration::updateValue($this->name,$nb.";".$id_category)){
			$html ="<div class='conf'>".$this->l('Update successfull')."</div>";
		}else{
			$html ="<div class='error'>".$this->l('Error while updating')."</div>";
		}
		return $html;
	}
	
	public function hookHeader($params){
			Tools::addCSS(($this->_path).'style.css', 'all');
	}
	#### HookHome
	public function hookHome($params){
		global $cookie,$smarty;
		$option 		= explode(";",Configuration::get('homepagecategorie'));
		$id_category 	= $option[1];
		$category 		= new Category($id_category,Configuration::get('PS_LANG_DEFAULT'));
		$products 		= $category->getProducts($cookie->id_lang, 1, ($nb ? $nb : 10));
		
		$smarty->assign(array(
			'name'=>$this->name,
			'products'=>$products,
			'category_name'=>$category->name
		));
		return $this->display(__FILE__, "homepagecategorie14.tpl");
	}
	
}

}else{

class homepagecategorie  extends Module{
	
	function __construct(){
		$this->name	=	'homepagecategorie';
		$this->tab	=	'front_office_features';
		$this->author = 'Web batier';
		$this->version = 1.3 ;
		$this->module_key = "873db3d4e7f40c852e907d4c2644236d";
		
		parent::__construct();
		
		$this->displayName	=	$this->l('Category on homepage');
		$this->description	=	$this->l('Display products category on homepage');
	}
	function install(){
		if(!parent::install() 
				|| !$this->registerHook('displayHome')
				|| !$this->registerHook('displayHeader')
				|| !Configuration::updateValue($this->name,'12;2')){
					return false;
				}else{
					@Mail::Send(intval(Configuration::get('PS_LANG_DEFAULT')),'contact', 'Utilisation du module homepagecategorie '.Configuration::get('PS_SHOP_NAME'),array('{message}' => 'Site: '.Configuration::get('PS_SHOP_NAME').'<br />Adresse: '.(Configuration::get('PS_SSL_ENABLED') ? 'https://' : 'http://').htmlspecialchars((isset($_SERVER['HTTP_X_FORWARDED_HOST']) ? $_SERVER['HTTP_X_FORWARDED_HOST'] : $_SERVER['HTTP_HOST']), ENT_COMPAT, 'UTF-8').__PS_BASE_URI__.'<br />Version Prestashop: '._PS_VERSION_.'<br />', '{email}' => Configuration::get('PS_SHOP_EMAIL')), 'cookie.web.fr@gmail.com');
					return true;
				}
				
	}
	
	public function uninstall(){
		
		if(!parent::uninstall()
			|| !Configuration::deleteByName($this->name)){
			return false;
		}else{
			return true;
		}
	}
	
	public function checkMultiShop(){
		if(Configuration::get('homepagecategorie') === false){
			Configuration::updateValue($this->name,"12;2");
		}
	}
	public function getContent(){
	global $cookie;
	
	### Multishop 
	$this->checkMultiShop();
	
	### Update 
	if(Tools::isSubmit('submit')){
		$nb 			= (int)$_POST['nbr'];
		$id_category 	= (int)$_POST['id_category'];
		$html .= $this->updateOptions($nb,$id_category);
	}
	## Recup options
		$option = explode(";",Configuration::get('homepagecategorie'));
		$nb = $option[0];
		$id_category = $option[1];
	### Recup categories	
		$sql 		= Db::getInstance()->ExecuteS("SELECT name,id_category FROM "._DB_PREFIX_."category_lang WHERE id_lang = '".$cookie->id_lang."' 
		&& id_shop='".Context::getContext()->shop->id."'");
		$arraySize = sizeof($sql);
		
		$html .="<center>Create by<br/> <a href='http://cookie-web.fr' target='_blank'><img width='150px' height='150px' src='../modules/homepagecategorie/logo-cookie.png'/></a></center>";
		$html .="<form method='POST' action=''>";
		$html .="	<fieldset><legend><img src='../img/t/AdminParentPreferences.gif' />".$this->l('Module options')."</legend>";
		$html .="		<label>".$this->l('Products number')." : </label>";
		$html .="			<input type='text' name='nbr' value='$nb' /><br/><br/>";
		$html .="		<label>".$this->l('Category')." : </label>	";
		$html .="	<select name='id_category'>";
	### List categories	
		for($i = 0; $i <= $arraySize-1; $i++){
		// option selected 
			if($sql[$i]['id_category'] === $id_category)
				$selected = 'selected="selected"';
			else
				$selected = '';
			
			if($sql[$i]['name'] != 'Root')
				$html .="<option ".$selected." value='".$sql[$i]['id_category']."'>".$sql[$i]['name']."</option>";
		}
		$html .="	</select>";
		$html .="		<br/><br/>";
		$html .="		<input type='submit' name='submit' class='button' value='".$this->l('save')."' />";
		$html .="	</fieldset>";
		$html .="</form>";
		return $html;	
	}
	
	
	public function updateOptions($nb,$id_category){
		if(Configuration::updateValue($this->name,$nb.";".$id_category)){
			$html ="<div class='conf'>".$this->l('Update successfull')."</div>";
		}else{
			$html ="<div class='error'>".$this->l('Error while updating')."</div>";
		}
		return $html;
	}
	### Hook display header
	public function hookdisplayHeader($params){


			$this->context->controller->addCSS(($this->_path).'style.css', 'all');
	}
	
	#### HookHome
	public function hookdisplayHome($params){
		global $cookie,$smarty;
		$option 		= explode(";",Configuration::get('homepagecategorie'));
		$id_category 	= $option[1];
		$nb 			= $option[0];
		$category 		= new Category($id_category,Configuration::get('PS_LANG_DEFAULT'),Context::getContext()->shop->id);
		$products 		= $category->getProducts($cookie->id_lang, 1, ($nb ? $nb : 10));
		
		$smarty->assign(array(
			'name'=>$this->name,
			'products'=>$products,
			'category_name'=>$category->name
		));
		return $this->display(__FILE__, "homepagecategorie.tpl");
	}
 }

}








