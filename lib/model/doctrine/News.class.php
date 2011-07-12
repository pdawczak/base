<?php

/**
 * News
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    Base
 * @subpackage model
 * @author     Paweł Dawczak pawel.dawczak@gmail.com
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class News extends BaseNews
  implements mySeoContent
{  
  public function myGetRoute()
  {
    return 'news_show';
  }

  public function myGetLinkUrl()
  {
    return url_for($this->myGetRoute(), $this);
  }

  public function myGetLinkName()
  {
    return $this->getTitle();
  }

  public function getSeoTitleTag()
  {
    return $this->getTitleTag();
  }

  public function getSeoKeywordsTag()
  {
    return $this->getKeywordsTag();
  }

  public function getSeoDescriptionTag()
  {
    return $this->getDescriptionTag();
  }
}
