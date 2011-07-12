<?php

class myContext extends sfContext
{
  private $_seoManager = null;

  public function getSeoManager()
  {
    if (empty ($this->_seoManager))
    {
      $this->_seoManager = new mySeoManager();
    }
    return $this->_seoManager;
  }
}