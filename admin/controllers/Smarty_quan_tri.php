<?php
require 'Smarty/libs/Smarty.class.php';
class Smarty_quan_tri extends Smarty {
   function __construct()
   {
        parent::__construct();
		$this->setCacheDir('Smarty/cache');
		$this->setConfigDir('Smarty/config');
		$this->setTemplateDir('Smarty/templates');
		$this->setCompileDir('Smarty/templates_c');
   }
}