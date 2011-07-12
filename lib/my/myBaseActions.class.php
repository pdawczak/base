<?php

class myBaseActions extends sfActions
{
  public function getSeoManager()
  {
    return sfContext::getInstance()->getSeoManager();
  }

  public function preExecute()
  {
    $this->getSeoManager()->add(SiteTable::getInstance()->findOneByRoute('@homepage'));
  }

  public function postExecute()
  {
    $this->getSeoManager()->renderSeo($this->getResponse());
  }
}
