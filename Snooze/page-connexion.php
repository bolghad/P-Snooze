<?php get_header(); ?>

<section class="main-content animate-de-bas">
<div id="form" class="container mt-5 mont">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <h3 class="text-center porto mt-4 mb-4">
                    CRÉEZ UN COMPTE
                </h3>
                <div class="card-body">
                    <div class="row">
                        <!-- Première moitié du formulaire -->
                        <div class="col-lg-4 col-md-6">
                            <form action="process-form.php" method="POST">
                                <label for="name">Nom*</label>
                                <input type="text" class="form-control mb-3" id="name" name="name" placeholder="Entrez votre nom" required>
                                <label for="email">E-mail*</label>
                                <input type="email" class="form-control mb-3" id="email" name="email" placeholder="Entrez votre e-mail" required>
                                <label for="password">Mot de passe*</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Entrez votre mot de passe" required>
                            </form>
                        </div>

                        <!-- Deuxième moitié du formulaire -->
                        <div class="col-lg-4 col-md-6">
                            <form action="process-form.php" method="POST">
                                <label for="locality">Localité*</label>
                                <input type="text" class="form-control mb-3" id="locality" name="locality" placeholder="Entrez votre commune" required>
                                <label for="age">Âge*</label>
                                <input type="text" class="form-control mb-3" id="age" name="age" placeholder="jj/mm/aaaa" required>
                                <label for="objective">Objectif</label>
                                <select class="form-control" id="objective" name="objective" required>
                                    <option>Gérer son temps de sommeil</option>
                                    <option>Dormir plus longtemps</option>
                                    <option>Ne plus se réveiller la nuit</option>
                                    
                                </select>
                            </form>
                        </div>

                        <!-- Colonne pour l'image -->
                        <div class="col-lg-4 col-md-12 d-none d-lg-block">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/pc.jpg" alt="Image Description" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="row">
                        <div class="col-lg-8 col-md-12 text-center">
                            <button type="submit" id="inscription" class="mt-4 mb-2 bouton-image">S'INSCRIRE</button>
                            <div class=" col-lg-8card-footer text-muted text-center">
                                Déjà un compte ? <a href="#" class="text-primary">Connecte toi</a>
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>
    </div>
</div>
</section>
<?php get_footer(); ?>