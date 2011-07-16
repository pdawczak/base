<?php

class mySeoManager
{
  private $_contents  = array();
  private $_title_tag = null;

  /**
   * Add a seo content
   * @param mySeoContentInterface $content
   */
  public function add(mySeoContent $content)
  {
    $this->_contents[] = $content;
  }

  /**
   * Sets a title tag for site
   * @param string $title
   */
  public function setTitleTag($title)
  {
    $this->_title_tag = $title;
  }

  /**
   * Generates title tag from Contents
   * @return string
   */
  private function _generateTitle()
  {
    $title = '';
    foreach ($this->_contents as $content)
    {
      $title = ('' == $title) ? $content->myGetSeoTitleTag() : $content->myGetSeoTitleTag().' | '.$title;
    }
    return $title;
  }

  /**
   * Renders head tags - title tag, keyword tag, description tag
   * @param sfWebResponse $response
   */
  public function renderSeo(sfWebResponse $response)
  {
    if (count($this->_contents) > 0)
    {
      foreach ($this->_contents as $content)
      {
        if ('@homepage' == $content->myGetRoute())
        {
          continue;
        }
        isicsBreadcrumbs::getInstance()->addItem($content->myGetSeoTitleTag(), $content->myGetRoute());
      }
    }

    if (!empty ($this->_title_tag))
    {
      $response->setTitle($this->_title_tag);
    }
    elseif (count($this->_contents) > 0)
    {
      $response->setTitle($this->_generateTitle());
    }

    if ($last = array_pop($this->_contents))
    {
      $response->addMeta('description', $last->myGetSeoDescriptionTag());
      $response->addMeta('keywords',    $last->myGetSeoKeywordsTag());
    }
  }
}
