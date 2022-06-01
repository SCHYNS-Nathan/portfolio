<?php /** * The template for displaying 404 pages (Not Found) */
get_header(); ?>
<main class="error404">
	<h2 class="error404__title">
		404
	</h2>
	<p class="error404__text">
		Page non trouvée
	</p>
	<a class="error404__link" href="<?= get_home_url(); ?>">Retourner sur la page d'accueil</a>
</main>
<?php get_footer(); ?>


