<article class="projects__project fade-in" aria-labelledby="<?= get_field('title'); ?>" itemscope itemtype="https://schema.org/Project">
	<h3 class="project__title" id="<?= get_field('title'); ?>" aria-level="3" itemprop="name">
        <?= get_field('title'); ?>
	</h3>
    <figure class="project__fig" itemprop="image">
		<?= get_the_post_thumbnail(null, 'small', ['class' => 'actor__thumb']); ?>
    </figure>
	<p class="project__description" itemprop="description">
		<?= get_field('description'); ?>
	</p>
	<a class="project__link" itemprop="url" href="<?= get_the_permalink(); ?>" title="Direction la page de présentation du projet !">
        Découvrir ce projet
    </a>
</article>