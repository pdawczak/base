<?php

/**
 * Site form base class.
 *
 * @method Site getObject() Returns the current form's model object
 *
 * @package    Base
 * @subpackage form
 * @author     Paweł Dawczak pawel.dawczak@gmail.com
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSiteForm extends PageAbstractForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema   ['is_enabled'] = new sfWidgetFormInputCheckbox();
    $this->validatorSchema['is_enabled'] = new sfValidatorBoolean(array('required' => false));

    $this->widgetSchema   ['show_in_menu'] = new sfWidgetFormInputCheckbox();
    $this->validatorSchema['show_in_menu'] = new sfValidatorBoolean(array('required' => false));

    $this->widgetSchema   ['route'] = new sfWidgetFormInputText();
    $this->validatorSchema['route'] = new sfValidatorString(array('max_length' => 30, 'required' => false));

    $this->widgetSchema   ['title'] = new sfWidgetFormInputText();
    $this->validatorSchema['title'] = new sfValidatorString(array('max_length' => 255, 'required' => false));

    $this->widgetSchema   ['text'] = new sfWidgetFormTextarea();
    $this->validatorSchema['text'] = new sfValidatorString(array('required' => false));

    $this->widgetSchema   ['order'] = new sfWidgetFormInputText();
    $this->validatorSchema['order'] = new sfValidatorInteger(array('required' => false));

    $this->widgetSchema   ['slug'] = new sfWidgetFormInputText();
    $this->validatorSchema['slug'] = new sfValidatorString(array('max_length' => 255, 'required' => false));

    $this->widgetSchema->setNameFormat('site[%s]');
  }

  public function getModelName()
  {
    return 'Site';
  }

}
