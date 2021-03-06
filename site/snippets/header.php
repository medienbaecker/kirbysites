<header>
    <a class="logo" href="<?= $site->url() ?>">
        <?= $site->title() ?>
    </a>
    <?php if($sort == 'hearts'): ?>
        <a title="Sort alphabetically" href="<?= $page->url() ?>/sort:alpha" class="sort"><?= svg('assets/images/alpha.svg') ?> ↓</a>
    <?php elseif($sort == 'alpha'): ?>
        <a title="Sort chronologically" href="<?= $page->url() ?>" class="sort"><?= svg('assets/images/calendar.svg') ?> ↓</a>
    <?php else: ?>
        <a title="Sort by hearts" href="<?= $page->url() ?>/sort:hearts" class="sort"><?= svg('assets/images/hearts.svg') ?> ↓</a>
    <?php endif ?>
    <a href="mailto:submit@kirbysites.com?Subject=Submit%20to%20Kirbysites&Body=Please%20include%20the%20URL%20to%20your%20project%20and%20attach%20a%20few%20panel%20screenshots.%20Ideally%20PNGs%20with%20an%204%3A3%20aspect%20ratio.%0A%0AThank%20you%21" class="submit">
        Submit
    </a>
</header>