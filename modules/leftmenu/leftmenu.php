<?php

  if (!defined('_PS_VERSION_'))
  exit;

  class LeftMenu extends Module
  {
  public function __construct()
    {
    $this->name = 'leftmenu';
    $this->tab = 'Test';
    $this->version = 1.0;
    $this->author = 'Lucas Martinez';
    $this->need_instance = 0;
 
    parent::__construct();
 
    $this->displayName = $this->l('leftmenu');
    $this->description = $this->l('Menu fixe du site Magicard.');
    }
 
  public function install()
    {
    if (parent::install() == false OR !$this->registerHook('leftColumn'))
      return false;
    return true;
    }

  public function hookLeftColumn($params)
    {
      global $smarty;
       global $cookie;
      return $this->display(__FILE__, 'leftmenu.tpl');

    }
 
  public function hookRightColumn($params)
    {
      return $this->hookLeftColumn($params);

    }
    public function hookdisplayHeader($params){


      $this->context->controller->addCSS($this->_path.'leftmenu.css', 'all');
  }
  

  }

?>