<?php

/**
 * News form.
 *
 * @package    Base
 * @subpackage form
 * @author     Paweł Dawczak pawel.dawczak@gmail.com
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class NewsForm extends BaseNewsForm
{
  /**
   * @see PageAbstractForm
   */
  public function configure()
  {
    parent::configure();

    $this->useFields(array(
      'title', 'title_tag', 'keywords_tag', 'description_tag', 'intro', 'text'
    ));

    $this->widgetSchema['intro'] = new isicsWidgetFormTinyMCE(array(
      'tiny_options' => sfConfig::get('app_tiny_mce_simple')
    ));

    $this->widgetSchema['text'] = new isicsWidgetFormTinyMCE(array(
      'tiny_options' => sfConfig::get('app_tiny_mce_advanced', array())
    ));

    $this->widgetSchema->setLabels(array(
      'title_tag'       => 'Tag "Title"',
      'keywords_tag'    => 'Tag "Keywords"',
      'description_tag' => 'Tag "Description"',
      'intro'           => 'Wstęp',
      'text'            => 'Treść'
    ));
  }
}
