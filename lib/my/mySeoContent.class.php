<?php

interface mySeoContent extends myRouteObject
{
  public function getSeoTitleTag();
  public function getSeoKeywordsTag();
  public function getSeoDescriptionTag();
}
