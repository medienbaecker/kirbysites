<main class="websites">

	<?php foreach($pages->listed() as $p): ?>
		<div class="website" id="<?= $p->uid() ?>">
			<div class="screenshot">

				<?php $frontend = $p->images()->template("frontend")->sortBy('sort', 'asc')->first() ?>
				<a href="<?= $p->content()->url() ?>" class="frontend open">
					<?= $frontend->crop(800, 600, "top") ?>
				</a>

				<?php $panels = $p->images()->template("backend")->sortBy('sort', 'asc') ?>
				<a href="<?= $panels->first()->url() ?>" class="backend">
					<?= $panels->first()->crop(800, 600, "top") ?>
					<?php foreach($panels as $panel): ?>
						<img loading="lazy" class="popup" src="<?= $panel->url() ?>" data-size="<?= $panel->width() ?>x<?= $panel->height() ?>">
					<?php endforeach ?>
				</a>

			</div>
			<div class="title">
				<span class="frontend open"><?= parse_url($p->content()->url())["host"] ?></span>
				/
				<span class="backend">panel</span>
			</div>
		</div>
	<?php endforeach ?>

</main>