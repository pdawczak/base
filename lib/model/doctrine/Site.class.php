<?php

/**
 * Site
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    Base
 * @subpackage model
 * @author     Paweł Dawczak pawel.dawczak@gmail.com
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Site extends BaseSite
  implements mySeoContent
{
  public function myGetRoute()
  {
    if ($route = $this->getRoute())
    {
      return $route;
    }
    return 'site_show';
  }

  public function myGetLinkUrl()
  {
    $route = $this->myGetRoute();

    if ('@' == $route[0])
    {
      return url_for($route);
    }
    return url_for($route, $this);
  }

  public function myGetLinkName()
  {
    return $this->getTitle();
  }

  public function myGetSeoTitleTag()
  {
    return $this->getTitleTag() ? $this->getTitleTag() : $this->getTitle();
  }

  public function myGetSeoKeywordsTag()
  {
    return $this->getKeywordsTag();
  }

  public function myGetSeoDescriptionTag()
  {
    return $this->getDescriptionTag();
  }
}
