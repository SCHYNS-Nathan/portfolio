<li class="more__item fade-in">
	<a class="more__link" href="<?= get_the_permalink(); ?>" title="Direction la page de présentation du projet !">
		<h3 class="more__title">
			<?= get_field('title'); ?>
		</h3>
		<figure class="more__fig">
			<?= get_the_post_thumbnail(null, 'small', ['class' => 'actor__thumb']); ?>
		</figure>
	</a>
</li>