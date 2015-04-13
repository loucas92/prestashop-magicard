<?php

if (!defined('_CAN_LOAD_FILES_'))
	exit;

class cw06_homecats extends Module
{
	private $_html = '';
	private $_postErrors = array();

	function __construct()
	{
		$this->name = 'cw06_homecats';
		$this->tab = 'front_office_features';
		$this->version = '1.2';
		$this->author = 'Creaweb06.fr';

		parent::__construct();
		
		$this->displayName = $this->l('Catégories en page d\'accueil');
		$this->description = $this->l('Afficher les catégories principales en page d\'accueil');
	}

	function install()
	{
            if(Tools::version_compare('1.5.0.0', _PS_VERSION_, '<='))
            {
                $hook = 'displayHome';
            } else {
                $hook = 'home';
            }
                    
            
		if ( !parent::install() || !$this->registerHook($hook) )
			return false;
                if(Tools::version_compare('1.5.0.0', _PS_VERSION_, '<='))
                        if(!$this->registerHook ('displayHeader'))
                            return false;
		return true;
	}

        
        /*
         * fonction hookDisplayHeader pour prestashop 1.5.x
         */
        
        public function hookDisplayHeader()
        {
            $this->context->controller->addCSS(_THEME_CSS_DIR_.'category.css', 'all');
        }
        
        /*
         * fonction hookDisplayHome pour prestashop 1.5.x
         */
        
	public function hookDisplayHome($params)
	{
            $categoryRoot = new Category(Configuration::get('PS_HOME_CATEGORY'),$this->context->language->id,$this->context->shop->id);
            $categoriesHome = $categoryRoot->getSubCategories($this->context->language->id);
            
            $this->smarty->assign(array(
                'subcategories' => $categoriesHome,
                'homeSize' => Image::getSize('medium_default')
            ));
            
            return $this->display(__FILE__, 'cw06_homecats15.tpl');
	}

        
        /*
         * fonction hookHome pour prestashop 1.4.x
         */
        
	function hookHome($params)
	{
		global $smarty,$cookie;
		
		$category = new Category(1, intval($cookie->id_lang));
		$subCategories = $category->getSubCategories(intval($cookie->id_lang));
		if (Db::getInstance()->numRows())
			$smarty->assign('subcategories', $subCategories);
		
		$smarty->assign('homeSize',Image::getSize('medium'));

		return $this->display(__FILE__, 'cw06_homecats.tpl');
	}
}
