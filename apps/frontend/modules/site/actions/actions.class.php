<?php

/**
 * site actions.
 *
 * @package    Base
 * @subpackage site
 * @author     Paweł Dawczak pawel.dawczak@gmail.com
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class siteActions extends myBaseActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->site = SiteTable::getInstance()->findOneByRoute('@homepage');
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->site = $this->getRoute()->getObject();
  }
}
