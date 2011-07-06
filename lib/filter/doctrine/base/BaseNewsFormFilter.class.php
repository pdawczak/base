<?php

/**
 * News filter form base class.
 *
 * @package    Base
 * @subpackage filter
 * @author     Paweł Dawczak pawel.dawczak@gmail.com
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedInheritanceTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseNewsFormFilter extends PageAbstractFormFilter
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema   ['title'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['title'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['intro'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['intro'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['text'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['text'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['slug'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['slug'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema->setNameFormat('news_filters[%s]');
  }

  public function getModelName()
  {
    return 'News';
  }

  public function getFields()
  {
    return array_merge(parent::getFields(), array(
      'title' => 'Text',
      'intro' => 'Text',
      'text' => 'Text',
      'slug' => 'Text',
    ));
  }
}
