<?php

interface mySeoContent extends myRouteObject
{
  public function myGetSeoTitleTag();
  public function myGetSeoKeywordsTag();
  public function myGetSeoDescriptionTag();
}
