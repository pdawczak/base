<?php

/**
 * Site form.
 *
 * @package    Base
 * @subpackage form
 * @author     Paweł Dawczak pawel.dawczak@gmail.com
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class SiteForm extends BaseSiteForm
{
  /**
   * @see PageAbstractForm
   */
  public function configure()
  {
    parent::configure();

    $this->useFields(array(
      'title', 'title_tag', 'keywords_tag', 'description_tag', 'is_enabled', 'show_in_menu', 'order', 'text'
    ));

    $this->widgetSchema['text'] = new isicsWidgetFormTinyMCE(array(
      'tiny_options' => sfConfig::get('app_tiny_mce_advanced', array())
    ));

    $this->widgetSchema->setLabels(array(
      'title'           => 'Tytuł',
      'title_tag'       => 'Tag "Title"',
      'keywords_tag'    => 'Tag "Keywords"',
      'description_tag' => 'Tag "Description"',
      'is_enabled'      => 'Aktywna?',
      'show_in_menu'    => 'Widoczna w menu?',
      'order'           => 'Sortowanie',
      'text'            => 'Treść'
    ));
  }
}
