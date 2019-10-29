<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <?php if($page->isHomePage()): ?>
    <title><?= $site->title() ?></title>
  <?php else: ?>
    <title><?= $site->title() ?> | <?= $page->title() ?></title>
  <?php endif ?>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
  <meta name="description" content="<?= $page->description()->or($site->description()) ?>" />
  <link rel="canonical" href="<?php echo $page->url() ?>">
  <link rel="icon" href="<?= url('assets/images/favicon.png') ?>">
  <?php snippet('og') ?>
  <?= css(array(
    'assets/photoswipe/photoswipe.css',
    'assets/photoswipe/default-skin.css',
    'assets/css/style.css'
  )) ?>
</head>
<body class="t_<?= $page->intendedTemplate() ?>">