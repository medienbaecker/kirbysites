<meta property="og:image" content="<?= url('assets/images/og.jpg') ?>" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />

<?php if($page->isHomePage()): ?>
<meta property="og:title" content="<?= $site->title() ?>"/>
<?php else: ?>
<meta property="og:title" content="<?= $site->title() ?> | <?= $page->title() ?>"/>
<?php endif ?>

<meta property="og:description" content="<?= $page->description()->or($site->description()) ?>"/>