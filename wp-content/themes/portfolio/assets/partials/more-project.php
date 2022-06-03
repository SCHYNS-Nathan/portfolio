<li class="more__item fade-in" aria-labelledby="<?= get_field('title'); ?>More">
	<a class="more__link" href="<?= get_the_permalink(); ?>" id="<?= get_field('title'); ?>More" title="Direction la page de présentation du projet !">
		<h3 class="more__title" id="<?= get_field('title'); ?>" aria-level="3">
			<?= get_field('title'); ?>
		</h3>
		<figure class="more__fig">
			<?= get_the_post_thumbnail(null, 'small', ['class' => 'actor__thumb']); ?>
		</figure>
	</a>
</li>