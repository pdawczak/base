<?php

/**
 * All objects that implement myRouteObject interface can generate links to them
 */
interface myRouteObject
{
  public function myGetRoute();
  public function myGetLinkUrl();
  public function myGetLinkName();
}
