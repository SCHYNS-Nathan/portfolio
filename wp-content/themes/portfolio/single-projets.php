<?= get_header(); ?>
<main class="singleProject">
    <figure class="singleProject__banner">
	    <?= get_the_post_thumbnail(); ?>
    </figure>
    <div class="singleProject__back">
        <div class="back__container">
            <a class="back__link" href="../../index.php" title="Direction la page d'accueil !">
                <svg width="90" height="60" fill="none" viewBox="0 0 93 61" xmlns="http://www.w3.org/2000/svg">
                    <path d="M34.0802 57.1429V34.5571M61.5333 4V26.5857M34.0802 34.5571H21.7265C21.7265 34.5571 8 34.5571 8 21.2714C8 7.98572 21.7265 7.98571 21.7265 7.98571M34.0802 34.5571V17.2857V4L61.5333 57.1429V43.8571V26.5857M61.5333 26.5857H71.4164C71.4164 26.5857 85.1429 26.5857 85.1429 39.8714C85.1429 53.1572 71.4164 53.1572 71.4164 53.1572" stroke-width="15" stroke-miterlimit="1.41471" stroke-linejoin="bevel"/>
                </svg>
            </a>
            <p class="back__label">
                Retour à la page d'accueil
            </p>
        </div>
        <div class="back__container">
            <a class="back__link" href="#" title="Direction la page projets !">
                <svg width="51" height="60" viewBox="0 0 51 60" xmlns="http://www.w3.org/2000/svg">
                    <path d="M-1.48619e-06 30L51 0.555135L51 59.4449L-1.48619e-06 30Z"/>
                </svg>
            </a>
            <p class="back__label">
                Retour à la page projets
            </p>
        </div>
    </div>
    <article class="singleProject__article">
        <h2 class="article__title">
		    <?= get_field('title', false, false); ?>
        </h2>
        <p class="article__text">
	        <?= get_field('text_1', false, false); ?>
        </p>
        <figure class="article__image">
	        <?= wp_get_attachment_image(get_field('image_1', false, false)); ?>
        </figure>
        <p class="article__text">
		    <?= get_field('text_2', false, false); ?>
        </p>
        <figure class="article__image">
	        <?= wp_get_attachment_image(get_field('image_2', false, false)); ?>
        </figure>
        <a class="article__link" href="<?=  get_field('link', false, false); ?>" title="Direction le site du projet !">
            Accéder au site
        </a>
    </article>
    <section class="singleProject__more">
        <h2 class="more__title">À voir aussi</h2>
        <ul class="more__list">
	        <?php if(($modules = portfolio_get_projects(5))->have_posts()): while($modules->have_posts()): $modules->the_post();
		        include (__DIR__ . '/assets/partials/more-project.php');
	        endwhile; else: ?>
                <p class="projects__error">
                    On dirait que mes projets ne sont pas disponible pour le moment, revenez plus tard !
                </p>
	        <?php endif; ?>
        </ul>
    </section>
</main>
<?= get_footer(); ?>
