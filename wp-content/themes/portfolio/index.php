<?php get_header(); ?>
<main class="index">
    <div class="index__landscape" id="top">
        <div class="landscape__logo">
            <svg width="100%" height="100%" viewBox="0 0 336 336" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="168" cy="168" r="168" fill="#282F39"/>
                <circle cx="160" cy="160" r="160" fill="#CF2E46"/>
                <path d="M126.688 230.859V170.63M199.896 89.1445V149.373M126.688 170.63H93.7446C93.7446 170.63 57.1406 170.63 57.1406 135.202C57.1406 99.7731 93.7446 99.7731 93.7446 99.7731M126.688 170.63V124.573V89.1445L199.896 230.859V195.43V149.373M199.896 149.373H226.251C226.251 149.373 262.855 149.373 262.855 184.802C262.855 220.23 226.251 220.23 226.251 220.23" stroke="#F7F5EC" stroke-width="45" stroke-miterlimit="1.41471" stroke-linejoin="bevel"/>
            </svg>
        </div>
        <div class="landscape__background">
            <svg width="100%" height="100%" viewBox="0 0 1920 224" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 145C0 145 299.5 -2.04454e-09 480 0C660.5 2.04454e-09 1048 110 1048 110C1048 110 1166.5 61.7475 1298 27.9996C1520.5 -29.102 1687.5 69.7142 1920 28V224H0V145Z" fill="#D96669"/>
            </svg>
        </div>
        <div class="landscape__middleground">
            <svg width="100%" height="100%" viewBox="0 0 1920 354" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 134.257C0 134.257 551 43.1536 964.5 35.2574C1224.5 35.2574 1260.5 107.257 1450.5 107.257C1640.5 107.257 1843.5 7.89624 1920 0C1920 108.104 1920 354 1920 354H0V134.257Z" fill="#CF2E46"/>
            </svg>
        </div>
        <div class="landscape__forground">
            <svg width="100%" height="100%" viewBox="0 0 1921 401" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.500002 10.9254C168 -11.4213 347.5 1.99467 480.5 44.5145C613.5 87.0343 900 249.777 1105 249.777C1310 249.777 1598 117.191 1672 107.757C1746 98.3233 1842.5 118.681 1920.5 152.945C1920.5 206.574 1920.5 346.61 1920.5 400.24H0.5L0.500002 10.9254Z" fill="#282F39"/>
            </svg>
        </div>
        <canvas id="canvas" width="320" height="5750">

        </canvas>
    </div>
    <section class="index__presentation">
        <h2 class="presentation__title">
            Bien le bonjour !
        </h2>


    </section>
    <section class="index__projects">
        <h2 class="projects__title">
            Jetez un œil à mes projets
        </h2>
	    <?php if(($modules = portfolio_get_projects(3))->have_posts()): while($modules->have_posts()): $modules->the_post();
		    include (__DIR__ . '/assets/partials/project.php');
	    endwhile; else:  ?>
	    <?php endif; ?>
        <a class="projects__link" href="#" title="Direction la page des projets !">
            Découvrez tous mes projets
        </a>
    </section>
    <section class="index__contact">
        <h2 class="contact__title">
            Contactez-moi ! <em>Je ne mord pas...</em>
        </h2>
        <form class="contact__form">
            <div class="form__group">
                <label class="form__label" for="f_name">Votre nom</label>
                <input class="form__input" id="f_name" name="f_name" type="text" placeholder="Le mien commence et termine par un S" required>
            </div>
            <div class="form__group">
                <label class="form__label" for="f_firstname">Votre prénom</label>
                <input class="form__input" id="f_firstname" name="f_firstname" type="text" placeholder="Vous connaissez déjà le mien" required>
            </div>
            <div class="form__group">
                <label class="form__label" for="f_email">Votre adresse email</label>
                <input class="form__input" id="f_email" name="f_email" type="email" placeholder="Afin que je vous garde à l'œil" size="28" required>
            </div>
            <div class="form__group">
                <label class="form__label" for="f_subject">C'est à quel sujet ?</label>
                <select class="form__input" id="f_subject" name="f_subject">
                    <option value="web_site">Un site web</option>
                    <option value="illu">Une illustration</option>
                </select>
            </div>
            <div class="form__group">
                <label class="form__label" for="f_message">Votre message</label>
                <textarea class="form__input" id="f_message" name="f_message" rows="5" cols="50" placeholder="Pour me communiquer vos intentions" required></textarea>
            </div>
            <br>
            <button class="form__button" type="submit">Envoyer</button>
        </form>
        <ul class="contact__socials">
	        <?php if(($socials = portfolio_get_socials(3))->have_posts()): while($socials->have_posts()): $socials->the_post();
                include ( __DIR__ . '/assets/partials/social.php');
	        endwhile; else: ?>
                <p class="socials__error">Il n'y a pas réseaux sociaux à afficher, revenez plus tard.</p>
	        <?php endif; ?>
        </ul>
    </section>
    <div class="index__scroll">
        <p class="scroll__text">
            Retourner à la surface ?
        </p>
        <a class="scroll__link" href="#top" title="Pour retourner au sommet de la page !">
            <svg width="88" height="75" viewBox="0 0 88 75" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M44 0L87.3013 75H0.69873L44 0Z" fill="#101214"/>
            </svg>
        </a>
    </div>
</main>
<?php get_footer(); ?>
