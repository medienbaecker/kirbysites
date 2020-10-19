<main class="websites">

	<?php
		$websites = $pages->listed();
		if(param("sort") == "likes") {
			$websites = $websites->sortBy(function($page) {
				return $page->likeCount();
			}, 'desc');
		}
	?>

	<?php foreach($websites as $p): ?>
		<div class="website" id="<?= $p->uid() ?>">

			<div class="screenshot">

				<div class="front_back">
					<?php $frontend = $p->images()->template("frontend")->sortBy('sort', 'asc')->first() ?>
					<?php $panels = $p->images()->template("backend")->sortBy('sort', 'asc') ?>
					<a class="frontend" href="<?= $panels->first()->url() ?>">
						<img class="lazy" data-src="<?= $frontend->crop(800, 600, "top")->url() ?>" alt="<?= $p->title() ?>">
					</a>
					<div class="backend">
						<img class="lazy" data-src="<?= $panels->first()->resize(800)->url() ?>" alt="<?= $p->title() ?> – Backend">
						<?php foreach($panels as $panel): ?>
							<img class="popup" data-src="<?= $panel->url() ?>" data-size="<?= $panel->width() ?>x<?= $panel->height() ?>">
						<?php endforeach ?>
					</div>
				</div>

			</div>

			<div class="title">
				
				<a class="frontend" title="<?= $p->title() ?>" href="<?= $p->content()->url() ?>"><?= parse_url($p->content()->url())["host"] ?></a>

				<a class="heart <?php e($p->hasLiked(), 'has_liked') ?>" href="<?= $p->url() ?>/like/toggle"><span><?= $p->likeCount() ?></span><?= svg('assets/images/heart.svg') ?></a>

 			</div>
		</div>
	<?php endforeach ?>

</main>