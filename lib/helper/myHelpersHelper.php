<?php

/**
 * @param myRouteObject $o
 * @param array $options
 * @return string
 */
function my_link_to($o, $options = array())
{
  return link_to($o->myGetLinkName(), $o->myGetLinkUrl(), $options);
}
