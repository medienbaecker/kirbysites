<main class="websites">

	<?php foreach($pages->listed() as $p): ?>
		<div class="website" id="<?= $p->uid() ?>">

			<div class="screenshot">

				<div class="front_back">
					<?php $frontend = $p->images()->template("frontend")->sortBy('sort', 'asc')->first() ?>
					<div class="frontend">
						<?= $frontend->crop(800, 600, "top") ?>
					</div>
					<?php $panels = $p->images()->template("backend")->sortBy('sort', 'asc') ?>
					<div class="backend">
						<?= $panels->first()->crop(800, 600, "top") ?>
						<?php foreach($panels as $panel): ?>
							<img loading="lazy" class="popup" src="<?= $panel->url() ?>" data-size="<?= $panel->width() ?>x<?= $panel->height() ?>">
						<?php endforeach ?>
					</div>
				</div>

			</div>

			<div class="title">
				
				<a class="frontend" href="<?= $p->content()->url() ?>"><?= parse_url($p->content()->url())["host"] ?></a>

				<a class="heart <?php e($p->hasLiked(), 'has_liked') ?>" href="<?= $p->url() ?>/like/toggle"><span><?= $p->likeCount() ?></span><?= svg('assets/images/heart.svg') ?></a>

 			</div>
		</div>
	<?php endforeach ?>

</main>