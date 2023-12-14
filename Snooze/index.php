<?php get_header(); ?>

<!-- Contenu de la page -->
<section id="premier" style="height:70vh">

</section>

<!-- Section DeuxiemeSection -->
<section id="deuxiemeSection">
  <div class="container-fluid porto">
    <div class="row">

      <!-- Image 1 -->
      <div class="col-4 image-container animate-de-bas">
        <div class="overlay-square overlay-Un">Conseils</div>
        <img src="<?php echo get_template_directory_uri(); ?>/img/gif4.gif" class="img-fluid" alt="Image 1">
      </div>

      <!-- Image 2 -->
      <div class="col-4 image-container animate-de-bas">
        <div class="overlay-square overlay-Deux">Carte</div>
        <img src="<?php echo get_template_directory_uri(); ?>/img/gif2.gif" class="img-fluid" alt="Image 2">
      </div>

      <!-- Image 3 -->
      <div class="col-4 image-container animate-de-bas">
        <div class="overlay-square overlay-Trois">Professionnels</div>
        <img src="<?php echo get_template_directory_uri(); ?>/img/gif3.gif" class="img-fluid" alt="Image 3">
      </div>

    </div>
  </div>
</section>



<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-dark text-white text-center">
                        CRÉEZ UN COMPTE
                    </div>
                    <div class="card-body">
                        <form action="process-form.php" method="POST">
                            <div class="form-group">
                                <label for="name">Nom*</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Entrez votre nom" required>
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail*</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre e-mail" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Mot de passe*</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Entrez votre mot de passe" required>
                            </div>
                            <div class="form-group">
                                <label for="locality">Localité*</label>
                                <input type="text" class="form-control" id="locality" name="locality" placeholder="Entrez votre commune" required>
                            </div>
                            <div class="form-group">
                                <label for="age">Âge*</label>
                                <input type="text" class="form-control" id="age" name="age" placeholder="jj/mm/aaaa" required>
                            </div>
                            <div class="form-group">
                                <label for="objective">Objectif*</label>
                                <select class="form-control" id="objective" name="objective" required>
                                    <option>Choisissez parmi la liste</option>
                                    <!-- Options de l'objectif ici -->
                                </select>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="terms" required>
                                <label class="form-check-label" for="terms">J'accepte les termes et conditions d'utilisation</label>
                            </div>
                            <button type="submit" class="btn btn-primary">S'INSCRIRE</button>
                        </form>
                    </div>
                    <div class="card-footer text-muted text-center">
                        Déjà un compte ? <a href="#" class="text-dark">Connecte toi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php get_footer(); ?>




