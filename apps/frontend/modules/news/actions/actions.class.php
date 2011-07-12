<?php

/**
 * News actions.
 *
 * @package    Base
 * @subpackage News
 * @author     Paweł Dawczak pawel.dawczak@gmail.com
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class newsActions extends myBaseActions
{
  public function preExecute()
  {
    parent::preExecute();
    $this->getSeoManager()->add(SiteTable::getInstance()->findOneByRoute('@news_index'));
  }
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->news = NewsTable::getInstance()->findAll();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->news = $this->getRoute()->getObject();
    $this->getSeoManager()->add($this->news);
  }
}
