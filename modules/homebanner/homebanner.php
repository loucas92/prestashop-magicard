<?php

  if (!defined('_PS_VERSION_'))
  exit;

  class HomeBanner extends Module
  {
  public function __construct()
    {
    $this->name = 'HomeBanner';
    $this->tab = 'Test';
    $this->version = 1.0;
    $this->author = 'Lucas Martinez';
    $this->need_instance = 0;
 
    parent::__construct();
 
    $this->displayName = $this->l('homebanner');
    $this->description = $this->l('Bannière de la home page site Magicard.');
    }
 
  public function install()
    {
    if (parent::install() == false OR !$this->registerHook('HomeBanner'))
      return false;
    return true;
    }

  public function hookHome($params)
    {
      global $smarty;
      return $this->display(__FILE__, 'homebanner.tpl');    
    }

    public function hookHeader($params){
 
    $this->context->controller->addCSS(($this->_path).'css/homebanner.css', 'all');
    $this->context->controller->addJS(($this->_path).'js/homebanner.js');

    }


 
  }

?>