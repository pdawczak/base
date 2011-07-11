<?php use_helper('myHelpers') ?>
<div id="main-menu">
  <?php foreach ($sites as $site) : ?>
    <ul>
      <li><?php echo my_link_to($site) ?></li>
    </ul>
 <?php endforeach ?>
</div>
