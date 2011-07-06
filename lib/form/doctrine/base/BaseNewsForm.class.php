<?php

/**
 * News form base class.
 *
 * @method News getObject() Returns the current form's model object
 *
 * @package    Base
 * @subpackage form
 * @author     Paweł Dawczak pawel.dawczak@gmail.com
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseNewsForm extends PageAbstractForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema   ['title'] = new sfWidgetFormInputText();
    $this->validatorSchema['title'] = new sfValidatorString(array('max_length' => 255, 'required' => false));

    $this->widgetSchema   ['intro'] = new sfWidgetFormTextarea();
    $this->validatorSchema['intro'] = new sfValidatorString(array('required' => false));

    $this->widgetSchema   ['text'] = new sfWidgetFormTextarea();
    $this->validatorSchema['text'] = new sfValidatorString(array('required' => false));

    $this->widgetSchema   ['slug'] = new sfWidgetFormInputText();
    $this->validatorSchema['slug'] = new sfValidatorString(array('max_length' => 255, 'required' => false));

    $this->widgetSchema->setNameFormat('news[%s]');
  }

  public function getModelName()
  {
    return 'News';
  }

}
