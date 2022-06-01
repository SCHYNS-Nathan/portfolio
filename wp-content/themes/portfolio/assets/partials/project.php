<article class="projects__project fade-in" aria-labelledby="<?= get_field('title'); ?>">
	<h3 class="project__title" id="<?= get_field('title'); ?>" aria-level="3">
        <?= get_field('title'); ?>
	</h3>
    <figure class="project__fig">
		<?= get_the_post_thumbnail(null, 'small', ['class' => 'actor__thumb']); ?>
    </figure>
	<p class="project__description">
		<?= get_field('description'); ?>
	</p>
	<a class="project__link" href="<?= get_the_permalink(); ?>" title="Direction la page de présentation du projet !">
        Découvrir ce projet
    </a>
</article>