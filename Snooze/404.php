<?php get_header(); ?>
<section class="first">
    <img src="<?php echo get_template_directory_uri(); ?>/img/404.png" class="error animate-de-haut">
</section>
    <div class="container">
        <h2 class="text-center animate-de-bas">Cette page n'existe pas</h2>
        <div class="bouton-container animate-de-bas">
                <a class="bouton-image mont" type="button" href="<?php echo home_url() ?>">Accueil</a>       
        </div>
    </div>

<?php get_footer(); ?>