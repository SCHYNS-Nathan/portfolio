<?php get_header(); ?>
<main class="archive">
	<div class="archive__back">
		<a class="back__link" href="../../index.php" title="Direction la page d'accueil !">
			<svg width="90" height="60" fill="none" viewBox="0 0 93 61" xmlns="http://www.w3.org/2000/svg">
				<path d="M34.0802 57.1429V34.5571M61.5333 4V26.5857M34.0802 34.5571H21.7265C21.7265 34.5571 8 34.5571 8 21.2714C8 7.98572 21.7265 7.98571 21.7265 7.98571M34.0802 34.5571V17.2857V4L61.5333 57.1429V43.8571V26.5857M61.5333 26.5857H71.4164C71.4164 26.5857 85.1429 26.5857 85.1429 39.8714C85.1429 53.1572 71.4164 53.1572 71.4164 53.1572" stroke-width="15" stroke-miterlimit="1.41471" stroke-linejoin="bevel"/>
			</svg>
		</a>
		<p class="back__label">
			Retour à la page d'accueil
		</p>
	</div>
	<section class="archive__projects">
		<h2 class="projects__title">
			Découvrez tous mes projets
		</h2>
		<?php if(have_posts()): while(have_posts()): the_post();
			include (__DIR__ . '/assets/partials/project.php');
		endwhile; else: ?>
			<p class="projects__error">
				On dirait que mes projets ne sont pas disponible pour le moment, revenez plus tard !
			</p>
		<?php endif; ?>
	</section>
</main>
<?php get_footer(); ?>
