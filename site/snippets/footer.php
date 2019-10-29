<footer>
	<a href="https://getkirby.com">
		Made with Kirby and &lt;3
	</a>
	<?php if($meta = page("meta")): ?>
		<nav>
			<?php foreach($meta->children()->listed() as $p): ?>
				<a class="<?php e($p->isOpen(), 'open') ?>" href="<?= $p->url() ?>"><?= $p->title() ?></a>
			<?php endforeach ?>
		</nav>
	<?php endif ?>
</footer>