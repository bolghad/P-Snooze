<?php get_header(); ?>

<section class="first">
    <h1 class="text-center animate-de-haut">Professionnels du sommeil</h1>
    <ul class="nav list-unstyled animate-de-gauche">
        <li class="nav-item">
            <a class="nav-link professionnel-link active" id="boutonProfessionnel1">Médecine du Sommeil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link professionnel-link" id="boutonProfessionnel2">Psychiatres</a>
        </li>
        <li class="nav-item">
            <a class="nav-link professionnel-link" id="boutonProfessionnel3">Neurologues</a>
        </li>
        <li class="nav-item">
            <a class="nav-link professionnel-link" id="boutonProfessionnel4">Orthopédistes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link professionnel-link" id="boutonProfessionnel5">Oto-rhino-laryngologistes</a>
        </li>
        <!-- Ajoutez d'autres catégories si nécessaire -->
    </ul>
</section>
<section id="main-content" class="animate-de-bas">
    <div id="articleProfessionnels1" class="container mt-5 article active mb-5 mont">
    <div class="row medecin-container justify-content-center">
        <!-- Colonne pour le premier médecin -->
        <div class="col-lg-4 col-md-6 col-sm-12 medecin-card">
        <img src="<?php echo get_template_directory_uri(); ?>/img/pp.jpg" class="medecin-image" alt="Dr Bia">
        <h5 class="medecin-info">Dr Biannie</h5>
        <p class="medecin-info">1030 Schaerbeek</p>
        <button class="btn-contact" data-target="#popupMedecin1">Contactez moi</button>
        <!-- Pop-up pour le médecin 1 -->
        <div class="popup-container" id="popupMedecin1">
                        <div class="popup-content">
                    <span class="close-btn">&times;</span>
                    <div class="popup-header">
                    <h2>Médecin du sommeil</h2>
                    </div>
                    <div class="popup-body">
                    <div class="popup-text">
                        <p>Je suis le Dr. Oscar Jeanne, un médecin passionné par la médecine du sommeil...</p>
                        <!-- Plus de texte ici -->
                    </div>
                    <div class="popup-map">
                        <!-- Intégration de Google Maps -->
                        <iframe src="https://maps.app.goo.gl/HGVeXGYP88WTntdR7" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="popup-info">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/pp.jpg" alt="Dr. Biannie">
                        <h3>DR. BIANNIE</h3>
                        <p>Schaerbeek</p>
                        <p>31 ans</p>
                        <button class="btn-contact">Contactez moi</button>
                    </div>
                    </div>
                </div>
        </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 medecin-card">
        <img src="<?php echo get_template_directory_uri(); ?>/img/pp.jpg" class="medecin-image img-fluid" alt="Dr Bia">
        <h5 class="medecin-info">Dr Biannie</h5>
        <p class="medecin-info">1030 Schaerbeek</p>
        <button class="btn-contact">Contactez moi</button>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 medecin-card">
        <img src="<?php echo get_template_directory_uri(); ?>/img/pp.jpg" class="medecin-image img-fluid" alt="Dr Bia">
        <h5 class="medecin-info">Dr Biannie</h5>
        <p class="medecin-info">1030 Schaerbeek</p>
        <button class="btn-contact">Contactez moi</button>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 medecin-card">
        <img src="<?php echo get_template_directory_uri(); ?>/img/pp.jpg" class="medecin-image img-fluid" alt="Dr Bia">
        <h5 class="medecin-info">Dr Biannie</h5>
        <p class="medecin-info">1030 Schaerbeek</p>
        <button class="btn-contact">Contactez moi</button>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 medecin-card">
        <img src="<?php echo get_template_directory_uri(); ?>/img/pp.jpg" class="medecin-image img-fluid" alt="Dr Bia">
        <h5 class="medecin-info">Dr Biannie</h5>
        <p class="medecin-info">1030 Schaerbeek</p>
        <button class="btn-contact">Contactez moi</button>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 medecin-card">
        <img src="<?php echo get_template_directory_uri(); ?>/img/pp.jpg" class="medecin-image img-fluid" alt="Dr Bia">
        <h5 class="medecin-info">Dr Biannie</h5>
        <p class="medecin-info">1030 Schaerbeek</p>
        <button class="btn-contact">Contactez moi</button>
        </div>
    </div>
    </div>
</section>
<?php get_footer(); ?>