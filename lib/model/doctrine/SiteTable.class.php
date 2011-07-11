<?php

/**
 * SiteTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class SiteTable extends PageAbstractTable
{
  /**
   * Returns an instance of this class.
   *
   * @return SiteTable
   */
  public static function getInstance()
  {
    return Doctrine_Core::getTable('Site');
  }

  public function myGetEnabledSitesQuery(Doctrine_Query $q = null)
  {
    if (empty ($q)) {
      $q = $this
        ->createQuery('s')
      ;
    }
    
    $alias = $q->getRootAlias();
    
    $q
      ->addWhere($alias.'.is_enabled = ?', true)
    ;

    return $q;
  }

  /**
   * @param Doctrine_Query $q
   * @return Site
   */
  public function myGetEnabledSite(Doctrine_Query $q = null)
  {
    return $this->myGetEnabledSitesQuery($q)->fetchOne();
  }

  public function myGetMainSites()
  {
    $q = $this->myGetEnabledSitesQuery();

    $q
      ->andWhere('show_in_menu = ?', true)
      ->orderBy('order DESC')
    ;

    return $q->execute();
  }
}
