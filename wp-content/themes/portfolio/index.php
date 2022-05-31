<?php get_header(); ?>
<main class="index">
    <div class="index__landscape" id="to_the_top">
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
        <canvas id="canvas"></canvas>
        <span class="canvas__elements"></span>
    </div>
    <section class="index__presentation">
        <div class="presentation__section">
            <div class="presentation__title">
                <h2 class="presentation__title fade-in">
                    Bien le bonjour !
                </h2>
            </div>
            <div class="presentation__container">
                <p class="presentation__ fade-in">
                    Je suis Nathan, un designer web et illustrateur se terrant à vingt mille lieues sous vos pieds.
                    <br><br>
                    Si vous voulez atteindre mon antre, il va falloir plonger !
                </p>
                <a class="presentation__skip fade-in" href="#down_we_go">
                    Passer la présentation
                </a>
            </div>
            <p class="presentation__container fade-in">
                Alors vous avez décidé de vous jeter corps et âme dans la descente ?
                <br><br>
                Bien, je vais vous accompagner dans ce cas !
            </p>
            <div class="presentation__container">
                <p class="presentation__ fade-in">
                    Parlez moi un peu de vous, comment vous vous appelez ?
                </p>
                <form class="presentation__form">
                    <div class="form__group fade-in">
                        <label class="form__label" for="p_name">Votre nom</label>
                        <input class="form__input" id="p_name" name="p_name" type="text" placeholder="Le mien commence et termine par un S">
                    </div>
                    <div class="form__group fade-in">
                        <label class="form__label" for="p_firstname">Votre prénom</label>
                        <input class="form__input" id="p_firstname" name="p_firstname" type="text" placeholder="Vous connaissez déjà le mien !">
                    </div>
                </form>
            </div>
            <div class="presentation__container">
                <p class="presentation__ fade-in">
                    Je vois je vois.
                    <br>
                    Et qu’est-ce qui vous amène ici exactement ?
                </p>
                <form class="presentation__form">
                    <div class="form__group fade-in">
                        <label class="form__label" for="p_subject">C'est à quel sujet ?</label>
                        <select class="form__input" id="p_subject" name="p_subject">
                            <option value="web_site">Un site web</option>
                            <option value="illu">Une illustration</option>
                        </select>
                    </div>
                </form>
            </div>
            <p class="presentation__container fade-in">
                Oh, si c’est à propos de ça, je peux vous parler de mon parcours !
                <br><br>
                Je suis un jeune homme diplômé de l’ESA St-Luc Liège et habitué à développer sa créativité au travers de support très variés.
                <br><br>
                Que ce soit des livres, des sites web ou des expériences ludiques, je suis toujours partant pour créer de nouvelles choses.
            </p>
            <p class="presentation__container fade-in">
                J’ai également réalisé des études à la Haute École de la Province de Liège. C’est de là que me viennent mes compétences techniques et mon amour pour le web !
                <br><br>
                (Il suffit de regarder le site sur lequel vous naviguer...)
            </p>
            <p class="presentation__container fade-in">
                Bref, j’espère que vous ne regrettez pas la descente.
                <br><br>
                Il faut dire que c’est plutôt long...
                <br><br>
                <span class="presentation__small">Je savais que j’aurais du raccourcir cette partie...</span>
            </p>
            <p class="presentation__container fade-in">
                Je peux vous parler un peu de mes hobbies si vous voulez.
                <br><br>
                Remarque... ce n’est pas comme s'il y avait beaucoup d’autres choses à faire...
            </p>
            <p class="presentation__container fade-in">
                Lorsque je n’ai pas un crayon ou une souris à la main, c’est généralement une manette que je tiens.
                <br><br>
                En effet, je suis un compétiteur e-sport depuis plusieurs années et grâce à cela, j’ai voyagé aux quatre coins de l’Europe.
            </p>
            <p class="presentation__container fade-in">
                Mis à part cela, je m'intéresse aussi à la publication d'un livre pour enfant durant mon temps libre.
                <br><br>
                Et une fois cela fait, je me concentrerais sur la création d'un jeu vidéo avec quelques amis.
            </p>
            <p class="presentation__container fade-in">
                Sans parler des illustrations que je fais sur commande bien sûr !
                <br><br>
                Cela me fait quelques projets à terminer.
            </p>
            <p class="presentation__container fade-in">
                Il semblerait que l’on arrive enfin au bout du tunnel !
            </p>
            <p class="presentation__container fade-in">
                Je vais donc vous laisser découvrir cette partie vous-même.
            </p>
            <p class="presentation__container fade-in">
                À tout à l'heure !
            </p>
        </div>
    </section>
    <section class="index__projects">
        <div class="projects__svg">
            <svg width="100%" height="100%" viewBox="0 0 1921 279" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0V0.0107422L1920 0.00976562C1920 0.00976562 1920 187.012 1920 241.012L1818 194.512L1671.5 278.012L1416 166.512L1188.5 194.512L960.002 89.5122L521.002 222.512L199.502 142.012L0.00177002 241.012L0 0Z" fill="#282F39"/>
            </svg>
        </div>
        <div class="projects__section">
            <h2 class="projects__title fade-in" id="down_we_go">
                Jetez un œil à mes projets
            </h2>
	        <?php if(($modules = portfolio_get_projects(3))->have_posts()): while($modules->have_posts()): $modules->the_post();
		        include (__DIR__ . '/assets/partials/project.php');
	        endwhile; else: ?>
                <p class="projects__error">
                    On dirait que mes projets ne sont pas disponible pour le moment, revenez plus tard !
                </p>
	        <?php endif; ?>
            <a class="projects__link fade-in" href="<?= site_url( 'archive/' ); ?>" title="Direction la page des projets !">
                Découvrez tous mes projets
            </a>
        </div>
        <div class="projects__svg">
            <svg width="100%" height="100%" viewBox="0 0 1920 541" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0L226 218.5L492.5 282.5L627 370.5L752.5 346L957.5 463L1158 267L1367.5 331L1667 256L1920 37.5V540.5H0V0Z" fill="#282F39"/>
            </svg>
        </div>
    </section>
    <section class="index__contact">
        <div class="contact__section">
            <h2 class="contact__title fade-in">
                Contactez-moi ! <em>Je ne mord pas...</em>
            </h2>
            <?= do_shortcode('[contact-form-7 id="68" title="Formulaire de contact"]') ?>
            <ul class="contact__socials">
		        <?php if(($socials = portfolio_get_socials(3))->have_posts()): while($socials->have_posts()): $socials->the_post();
			        include ( __DIR__ . '/assets/partials/social.php');
		        endwhile; else: ?>
                    <p class="socials__error">Il n'y a pas réseaux sociaux à afficher, revenez plus tard.</p>
		        <?php endif; ?>
            </ul>
        </div>
    </section>
    <div class="contact__background">
        <div class="eyes eyes_0">
            <span class="eye-lash up"></span>
            <span class="eye_retina"></span>
            <span class="eye-lash down"></span>
        </div>
        <div class="eyes eyes_1">
            <span class="eye-lash up"></span>
            <span class="eye_retina"></span>
            <span class="eye-lash down"></span>
        </div>
        <div class="eyes eyes_2">
            <span class="eye-lash up"></span>
            <span class="eye_retina"></span>
            <span class="eye-lash down"></span>
        </div>
        <div class="eyes eyes_3">
            <span class="eye-lash up"></span>
            <span class="eye_retina"></span>
            <span class="eye-lash down"></span>
        </div>
        <div class="eyes eyes_4">
            <span class="eye-lash up"></span>
            <span class="eye_retina"></span>
            <span class="eye-lash down"></span>
        </div>
        <div class="eyes eyes_5">
            <span class="eye-lash up"></span>
            <span class="eye_retina"></span>
            <span class="eye-lash down"></span>
        </div>
        <div class="eyes eyes_6">
            <span class="eye-lash up"></span>
            <span class="eye_retina"></span>
            <span class="eye-lash down"></span>
        </div>
        <div class="eyes eyes_7">
            <span class="eye-lash up"></span>
            <span class="eye_retina"></span>
            <span class="eye-lash down"></span>
        </div>
        <div class="eyes eyes_8">
            <span class="eye-lash up"></span>
            <span class="eye_retina"></span>
            <span class="eye-lash down"></span>
        </div>
        <div class="eyes eyes_9">
            <span class="eye-lash up"></span>
            <span class="eye_retina"></span>
            <span class="eye-lash down"></span>
        </div>
        <div class="eyes eyes_10">
            <span class="eye-lash up"></span>
            <span class="eye_retina"></span>
            <span class="eye-lash down"></span>
        </div>
        <div class="eyes eyes_11">
            <span class="eye-lash up"></span>
            <span class="eye_retina"></span>
            <span class="eye-lash down"></span>
        </div>
        <div class="eyes eyes_12">
            <span class="eye-lash up"></span>
            <span class="eye_retina"></span>
            <span class="eye-lash down"></span>
        </div>
    </div>
    <div class="index__scroll">
        <p class="scroll__text fade-in">
            Retourner à la surface ?
        </p>
        <a class="scroll__link fade-in" href="#to_the_top" title="Pour retourner au sommet de la page !">
            <svg width="88" height="75" viewBox="0 0 88 75" xmlns="http://www.w3.org/2000/svg">
                <path d="M44 0L87.3013 75H0.69873L44 0Z" />
            </svg>
        </a>
    </div>
</main>
<?php get_footer(); ?>
