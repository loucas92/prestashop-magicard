<?php

  if (!defined('_PS_VERSION_'))
  exit;

  class HomeContent extends Module
  {
  public function __construct()
    {
    $this->name = 'HomeContent';
    $this->tab = 'Test';
    $this->version = 1.0;
    $this->author = 'Lucas Martinez';
    $this->need_instance = 0;
 
    parent::__construct();
 
    $this->displayName = $this->l('homecontent');
    $this->description = $this->l('afichage des cartes');
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
      return $this->display(__FILE__, 'homecontent.tpl');    
    }
 
  }

?>