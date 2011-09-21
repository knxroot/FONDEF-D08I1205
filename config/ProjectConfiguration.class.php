<?php

require_once dirname(__FILE__).'/../lib/vendor/symfony/lib/autoload/sfCoreAutoload.class.php';

sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
    public function setup()
    {
        $this->enablePlugins('sfDoctrinePlugin');
        $this->enablePlugins('sfDoctrineGuardPlugin');
        
        $this->loadVendors();
    }
    
    protected function loadVendors()
    {
        $vendors = array();
        $vendors[] = dirname(__FILE__).'/../lib/vendor/zend/library';
        $vendors[] = get_include_path();

        set_include_path(implode(PATH_SEPARATOR, $vendors));
        
        require_once 'Zend/Loader/Autoloader.php';
        $loader = Zend_Loader_Autoloader::getInstance();
    }
}
