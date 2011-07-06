<?php

/**
 * Site filter form base class.
 *
 * @package    Base
 * @subpackage filter
 * @author     Paweł Dawczak pawel.dawczak@gmail.com
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedInheritanceTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSiteFormFilter extends PageAbstractFormFilter
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema   ['is_enabled'] = new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no')));
    $this->validatorSchema['is_enabled'] = new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0)));

    $this->widgetSchema   ['show_in_menu'] = new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no')));
    $this->validatorSchema['show_in_menu'] = new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0)));

    $this->widgetSchema   ['route'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['route'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['title'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['title'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['text'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['text'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['order'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['order'] = new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false)));

    $this->widgetSchema   ['slug'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['slug'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema->setNameFormat('site_filters[%s]');
  }

  public function getModelName()
  {
    return 'Site';
  }

  public function getFields()
  {
    return array_merge(parent::getFields(), array(
      'is_enabled' => 'Boolean',
      'show_in_menu' => 'Boolean',
      'route' => 'Text',
      'title' => 'Text',
      'text' => 'Text',
      'order' => 'Number',
      'slug' => 'Text',
    ));
  }
}
