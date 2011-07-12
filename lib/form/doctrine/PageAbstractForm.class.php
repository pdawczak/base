<?php

/**
 * PageAbstract form.
 *
 * @package    Base
 * @subpackage form
 * @author     Paweł Dawczak pawel.dawczak@gmail.com
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PageAbstractForm extends BasePageAbstractForm
{
  public function configure()
  {
    $this->widgetSchema['keywords_tag']     = new sfWidgetFormTextarea();
    $this->widgetSchema['description_tag']  = new sfWidgetFormTextarea();
  }
}
