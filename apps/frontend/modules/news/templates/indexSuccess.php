<?php use_helper('myHelpers') ?>

<?php if (count($news) > 0) : ?>

<ul>
<?php foreach ($news as $item) : ?>
  <li><?php echo my_link_to($item) ?></li>
<?php endforeach ?>
</ul>

<?php else : ?>
  <p>Brak newsów</p>
<?php endif ?>
