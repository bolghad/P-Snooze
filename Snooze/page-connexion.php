<?php
/* Template Name: login-new */ 
if (is_user_logged_in()) {
    // si je suis déjà connecté je suis redirigé vers la page home
    wp_redirect( home_url('dashboard') );
      exit;
  }
get_header(); ?>
<!-- Début du formulaire de connexion -->
<section class="first">
<div id="login-form" class="container mt-5 mont animate-de-bas">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <h3 class="text-center porto mt-4 mb-4">
                    CONNEXION
                </h3>
                <div class="card-body">
                    <!-- Formulaire de connexion -->
                    <form method="POST" id="formConnex" action="<?php echo esc_url( site_url( 'wp-login.php', 'login_post' ) ); ?>">
                        <div class="row justify-content-center">
                            <!-- Champs pour la connexion -->
                            <div class="col-lg-4 col-md-6 text-center">
                                <label for="email">E-mail*</label>
                                <input type="email" class="form-control mb-3" id="log" name="log" placeholder="Entrez votre e-mail" required>
                                
                                <label for="password">Mot de passe*</label>
                                <input type="password" class="form-control mb-3" id="pwd" name="pwd" placeholder="Entrez votre mot de passe" required>
                                <input type="hidden" name="redirect_to" value="<?php echo esc_url( home_url('dashboard') ); ?>">
                                <a type="submit" id="connexion" class="mt-4 mb-2 bouton-image" name="login" style="width" href="javascript:void(0);">SE CONNECTER</a>
                                <div class="text-muted text-center">
                                    Pas de compte ? <a href="<?php echo home_url('inscription') ?>" class="text-primary">Inscrivez-vous</a>
                                </div>
                            </div>

                            <!-- Colonne pour l'image -->
                            <div class="col-lg-4 col-md-6 d-none d-lg-block">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/pc.jpg" alt="Image Description" class="img-fluid">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
document.getElementById('connexion').addEventListener('click', function() {
    document.getElementById('formConnex').submit();
});
</script>
</section>
<?php get_footer(); ?>