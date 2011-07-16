<?php

// require_once '/home/pdawczak/symfony/1.4.12/lib/autoload/sfCoreAutoload.class.php';
require_once dirname(__FILE__) . '/../lib/vendor/symfony/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins('sfDoctrinePlugin');

    $this->setWebDir($this->getRootDir() . '/public_html');
    $this->enablePlugins('sfDoctrineGuardPlugin');
    $this->enablePlugins('isicsBreadcrumbsPlugin');
    $this->enablePlugins('isicsWidgetFormTinyMCEPlugin');
  }
}
