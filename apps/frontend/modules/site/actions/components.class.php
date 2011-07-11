<?php

class siteComponents extends sfComponents
{
  public function executeMainMenu(sfWebRequest $request)
  {
//    $this->sites = new MySitesCollection(SiteTable::getInstance()->findAll());
    $this->sites = SiteTable::getInstance()->myGetMainSites();
  }
}
