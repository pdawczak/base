<?php

/**
 * @param myRouteObject $o
 * @return string
 */
function my_link_to($o)
{
  return link_to($o->myGetLinkName(), $o->myGetLinkUrl());
}
