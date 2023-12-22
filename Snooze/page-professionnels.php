<?php get_header(); ?>

<section class="first">
    <h1 class="text-center animate-de-haut">Professionnels du sommeil</h1>
        <?php
            wp_nav_menu(array(
                'theme_location' => 'professionnel_menu', // Doit correspondre à l'identifiant défini dans functions.php
                'container' => 'ul', // Conteneur du menu
                'menu_class' => 'nav list-unstyled animate-de-gauche mont', // Classe CSS pour le menu
            ));
        ?>
    <ul class="nav list-unstyled animate-de-gauche mont">
        <li class="nav-item">
            <a class="nav-link professionnel-link active" id="boutonProfessionnel1">Médecin du Sommeil</a>
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
    <div id="articleProfessionnels1" class="container mt-5 article active mb-5 mont animate-de-bas">
    <div class="row medecin-container justify-content-center">
        <!-- Colonne pour le premier médecin -->
        <div class="col-lg-4 col-md-6 col-sm-12 medecin-card">
        <img src="<?php echo get_template_directory_uri(); ?>/img/med1.jpg" class="medecin-image" alt="Dr Bolghad Ahmadreza">
        <h5 class="medecin-info">Dr Bolghad</h5>
        <p class="medecin-info">1090 Jette</p>
        <button class="btn-contact" data-target="#popupMedecin1">Contactez moi</button>
            <!-- Pop-up pour le médecin 1 -->
                <div class="popup-container" id="popupMedecin1">
                    <div class="popup-content">
                        <span class="close-btn">&times;</span>
                        <div class="popup-header">
                            <h2>Médecin du sommeil</h2>
                        </div>
                        <div class="popup-body d-flex">
                            <div class="popup-text mb-3">
                                <p>Je suis le Dr. Bolghad Ahmadreza, un médecin dédié et passionné par la médecine du sommeil. Fort de plusieurs années d'expérience dans ce domaine spécialisé, j'ai consacré ma carrière à comprendre les mystères du sommeil et à résoudre les problématiques complexes qui y sont liées. Ma pratique est fondée sur une approche holistique et individualisée, intégrant les dernières avancées scientifiques pour traiter les troubles du sommeil.</p>
                                <!-- Plus de texte ici -->
                            </div>
                            <div class="popup-map">
                                <!-- Intégration de Google Maps -->
                                <iframe src="https://maps.google.com/maps?width=100%25&height=600&hl=en&q=rue%20vogler+(My%20Business%20Name)&t=&z=14&ie=UTF8&iwloc=B&output=embed" width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>       
                            </div> 
                            <div class="popup-info">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/med1.jpg" alt="Dr. Bolghad">
                                <h3>DR. Bolghad</h3>
                                <p>Jette</p>
                                <p>22 ans</p>
                                <button class="btn-contact">Contactez moi</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 medecin-card">
            <img src="<?php echo get_template_directory_uri(); ?>/img/med2.jpg" class="medecin-image img-fluid" alt="Dr Bia">
            <h5 class="medecin-info">Dr Dubois</h5>
            <p class="medecin-info">1030 Schaerbeek</p>
            <button class="btn-contact" data-target="#popupMedecin2">Contactez moi</button>
                <!-- Pop-up pour le médecin 1 -->
                <div class="popup-container" id="popupMedecin2">
                    <div class="popup-content">
                        <span class="close-btn">&times;</span>
                        <div class="popup-header">
                            <h2>Médecin du sommeil</h2>
                        </div>
                        <div class="popup-body d-flex">
                            <div class="popup-text mb-3">
                                <p>Je suis le Dr. Dubois, un médecin dédié et passionné par la médecine du sommeil. Fort de plusieurs années d'expérience dans ce domaine spécialisé, j'ai consacré ma carrière à comprendre les mystères du sommeil et à résoudre les problématiques complexes qui y sont liées. Ma pratique est fondée sur une approche holistique et individualisée, intégrant les dernières avancées scientifiques pour traiter les troubles du sommeil.</p>
                                <!-- Plus de texte ici -->
                            </div>
                            <div class="popup-map">
                                <!-- Intégration de Google Maps -->
                                <iframe src="https://maps.google.com/maps?width=100%25&height=600&hl=en&q=rue%20vogler+(My%20Business%20Name)&t=&z=14&ie=UTF8&iwloc=B&output=embed" width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>       
                            </div> 
                            <div class="popup-info">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/med2.jpg" alt="Dr. Biannie">
                                <h3>DR. Dubois</h3>
                                <p>Schaerbeek</p>
                                <p>31 ans</p>
                                <button class="btn-contact">Contactez moi</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 medecin-card">
            <img src="<?php echo get_template_directory_uri(); ?>/img/med3.jpg" class="medecin-image img-fluid" alt="Dr Bia">
            <h5 class="medecin-info">Dr Patrick</h5>
            <p class="medecin-info">1000 Bruxelles</p>
            <button class="btn-contact" data-target="#popupMedecin3">Contactez moi</button>
                <!-- Pop-up pour le médecin 1 -->
                <div class="popup-container" id="popupMedecin3">
                    <div class="popup-content">
                        <span class="close-btn">&times;</span>
                        <div class="popup-header">
                            <h2>Médecin du sommeil</h2>
                        </div>
                        <div class="popup-body d-flex">
                            <div class="popup-text mb-3">
                                <p>Je suis le Dr. Patrick, un médecin dédié et passionné par la médecine du sommeil. Fort de plusieurs années d'expérience dans ce domaine spécialisé, j'ai consacré ma carrière à comprendre les mystères du sommeil et à résoudre les problématiques complexes qui y sont liées. Ma pratique est fondée sur une approche holistique et individualisée, intégrant les dernières avancées scientifiques pour traiter les troubles du sommeil.</p>
                                <!-- Plus de texte ici -->
                            </div>
                            <div class="popup-map">
                                <!-- Intégration de Google Maps -->
                                <iframe src="https://maps.google.com/maps?width=100%25&height=600&hl=en&q=rue%20vogler+(My%20Business%20Name)&t=&z=14&ie=UTF8&iwloc=B&output=embed" width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>       
                            </div> 
                            <div class="popup-info">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/med3.jpg" alt="Dr. Biannie">
                                <h3>DR. Patrick</h3>
                                <p>Bruxelles</p>
                                <p>31 ans</p>
                                <button class="btn-contact">Contactez moi</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 medecin-card">
            <img src="<?php echo get_template_directory_uri(); ?>/img/med4.jpg" class="medecin-image img-fluid" alt="Dr Bia">
            <h5 class="medecin-info">Dr Marie</h5>
            <p class="medecin-info">1000 Bruxelles</p>
            <button class="btn-contact" data-target="#popupMedecin4">Contactez moi</button>
                <!-- Pop-up pour le médecin 1 -->
                <div class="popup-container" id="popupMedecin4">
                        <div class="popup-content">
                            <span class="close-btn">&times;</span>
                            <div class="popup-header">
                                <h2>Médecin du sommeil</h2>
                            </div>
                            <div class="popup-body d-flex">
                                <div class="popup-text mb-3">
                                    <p>Je suis le Dr. Marie, un médecin dédié et passionné par la médecine du sommeil. Fort de plusieurs années d'expérience dans ce domaine spécialisé, j'ai consacré ma carrière à comprendre les mystères du sommeil et à résoudre les problématiques complexes qui y sont liées. Ma pratique est fondée sur une approche holistique et individualisée, intégrant les dernières avancées scientifiques pour traiter les troubles du sommeil.</p>
                                    <!-- Plus de texte ici -->
                                </div>
                                <div class="popup-map">
                                    <!-- Intégration de Google Maps -->
                                    <iframe src="https://maps.google.com/maps?width=100%25&height=600&hl=en&q=rue%20vogler+(My%20Business%20Name)&t=&z=14&ie=UTF8&iwloc=B&output=embed" width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>       
                                </div> 
                                <div class="popup-info">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/med4.jpg" alt="Dr. Biannie">
                                    <h3>DR. Marie</h3>
                                    <p>Bruxelles</p>
                                    <p>31 ans</p>
                                    <button class="btn-contact">Contactez moi</button>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 medecin-card">
            <img src="<?php echo get_template_directory_uri(); ?>/img/med5.jpg" class="medecin-image img-fluid" alt="Dr Bia">
            <h5 class="medecin-info">Dr Hajj</h5>
            <p class="medecin-info">1000 Bruxelles</p>
            <button class="btn-contact" data-target="#popupMedecin5">Contactez moi</button>
                <!-- Pop-up pour le médecin 1 -->
                <div class="popup-container" id="popupMedecin5">
                        <div class="popup-content">
                            <span class="close-btn">&times;</span>
                            <div class="popup-header">
                                <h2>Médecin du sommeil</h2>
                            </div>
                            <div class="popup-body d-flex">
                                <div class="popup-text mb-3">
                                    <p>Je suis le Dr. Hajj, un médecin dédié et passionné par la médecine du sommeil. Fort de plusieurs années d'expérience dans ce domaine spécialisé, j'ai consacré ma carrière à comprendre les mystères du sommeil et à résoudre les problématiques complexes qui y sont liées. Ma pratique est fondée sur une approche holistique et individualisée, intégrant les dernières avancées scientifiques pour traiter les troubles du sommeil.</p>
                                    <!-- Plus de texte ici -->
                                </div>
                                <div class="popup-map">
                                    <!-- Intégration de Google Maps -->
                                    <iframe src="https://maps.google.com/maps?width=100%25&height=600&hl=en&q=rue%20vogler+(My%20Business%20Name)&t=&z=14&ie=UTF8&iwloc=B&output=embed" width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>       
                                </div> 
                                <div class="popup-info">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/med5.jpg" alt="Dr. Biannie">
                                    <h3>DR. Hajj</h3>
                                    <p>Bruxelles</p>
                                    <p>31 ans</p>
                                    <button class="btn-contact">Contactez moi</button>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 medecin-card">
            <img src="<?php echo get_template_directory_uri(); ?>/img/med6.jpg" class="medecin-image img-fluid" alt="Dr Bia">
            <h5 class="medecin-info">Dr Rudolf</h5>
            <p class="medecin-info">1030 Schaerbeek</p>
            <button class="btn-contact" data-target="#popupMedecin6">Contactez moi</button>
                <!-- Pop-up pour le médecin 1 -->
                <div class="popup-container" id="popupMedecin6">
                        <div class="popup-content">
                            <span class="close-btn">&times;</span>
                            <div class="popup-header">
                                <h2>Médecin du sommeil</h2>
                            </div>
                            <div class="popup-body d-flex">
                                <div class="popup-text mb-3">
                                    <p>Je suis le Dr. Rudolf, un médecin dédié et passionné par la médecine du sommeil. Fort de plusieurs années d'expérience dans ce domaine spécialisé, j'ai consacré ma carrière à comprendre les mystères du sommeil et à résoudre les problématiques complexes qui y sont liées. Ma pratique est fondée sur une approche holistique et individualisée, intégrant les dernières avancées scientifiques pour traiter les troubles du sommeil.</p>
                                    <!-- Plus de texte ici -->
                                </div>
                                <div class="popup-map">
                                    <!-- Intégration de Google Maps -->
                                    <iframe src="https://maps.google.com/maps?width=100%25&height=600&hl=en&q=rue%20vogler+(My%20Business%20Name)&t=&z=14&ie=UTF8&iwloc=B&output=embed" width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>       
                                </div> 
                                <div class="popup-info">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/med6.jpg" alt="Dr. Biannie">
                                    <h3>DR. Rudolf</h3>
                                    <p>Schaerbeek</p>
                                    <p>31 ans</p>
                                    <button class="btn-contact">Contactez moi</button>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
    </div>


    <div id="articleProfessionnels2" class="container mt-5 article mb-5 mont animate-de-bas">
    <div class="row medecin-container justify-content-center">
        <!-- Colonne pour le premier médecin -->
        <div class="col-lg-4 col-md-6 col-sm-12 medecin-card">
        <img src="<?php echo get_template_directory_uri(); ?>/img/pp.jpg" class="medecin-image" alt="Dr Biannie Ahmadreza">
        <h5 class="medecin-info">Dr Biannie</h5>
        <p class="medecin-info">1090 Jette</p>
        <button class="btn-contact" data-target="#popupMedecin7">Contactez moi</button>
            <!-- Pop-up pour le médecin 1 -->
                <div class="popup-container" id="popupMedecin7">
                    <div class="popup-content">
                        <span class="close-btn">&times;</span>
                        <div class="popup-header">
                            <h2>Médecin du sommeil</h2>
                        </div>
                        <div class="popup-body d-flex">
                            <div class="popup-text mb-3">
                                <p>Je suis le Dr. Biannie, un médecin dédié et passionné par la médecine du sommeil. Fort de plusieurs années d'expérience dans ce domaine spécialisé, j'ai consacré ma carrière à comprendre les mystères du sommeil et à résoudre les problématiques complexes qui y sont liées. Ma pratique est fondée sur une approche holistique et individualisée, intégrant les dernières avancées scientifiques pour traiter les troubles du sommeil.</p>
                                <!-- Plus de texte ici -->
                            </div>
                            <div class="popup-map">
                                <!-- Intégration de Google Maps -->
                                <iframe src="https://maps.google.com/maps?width=100%25&height=600&hl=en&q=rue%20vogler+(My%20Business%20Name)&t=&z=14&ie=UTF8&iwloc=B&output=embed" width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>       
                            </div> 
                            <div class="popup-info">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/pp.jpg" alt="Dr. Biannie">
                                <h3>DR. Biannie</h3>
                                <p>Jette</p>
                                <p>22 ans</p>
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
            <button class="btn-contact" data-target="#popupMedecin8">Contactez moi</button>
                <!-- Pop-up pour le médecin 1 -->
                <div class="popup-container" id="popupMedecin8">
                    <div class="popup-content">
                        <span class="close-btn">&times;</span>
                        <div class="popup-header">
                            <h2>Médecin du sommeil</h2>
                        </div>
                        <div class="popup-body d-flex">
                            <div class="popup-text mb-3">
                                <p>Je suis le Dr. Oscar Jeanne, un médecin dédié et passionné par la médecine du sommeil. Fort de plusieurs années d'expérience dans ce domaine spécialisé, j'ai consacré ma carrière à comprendre les mystères du sommeil et à résoudre les problématiques complexes qui y sont liées. Ma pratique est fondée sur une approche holistique et individualisée, intégrant les dernières avancées scientifiques pour traiter les troubles du sommeil.</p>
                                <!-- Plus de texte ici -->
                            </div>
                            <div class="popup-map">
                                <!-- Intégration de Google Maps -->
                                <iframe src="https://maps.google.com/maps?width=100%25&height=600&hl=en&q=rue%20vogler+(My%20Business%20Name)&t=&z=14&ie=UTF8&iwloc=B&output=embed" width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>       
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
            <button class="btn-contact" data-target="#popupMedecin9">Contactez moi</button>
                <!-- Pop-up pour le médecin 1 -->
                <div class="popup-container" id="popupMedecin9">
                    <div class="popup-content">
                        <span class="close-btn">&times;</span>
                        <div class="popup-header">
                            <h2>Médecin du sommeil</h2>
                        </div>
                        <div class="popup-body d-flex">
                            <div class="popup-text mb-3">
                                <p>Je suis le Dr. Oscar Jeanne, un médecin dédié et passionné par la médecine du sommeil. Fort de plusieurs années d'expérience dans ce domaine spécialisé, j'ai consacré ma carrière à comprendre les mystères du sommeil et à résoudre les problématiques complexes qui y sont liées. Ma pratique est fondée sur une approche holistique et individualisée, intégrant les dernières avancées scientifiques pour traiter les troubles du sommeil.</p>
                                <!-- Plus de texte ici -->
                            </div>
                            <div class="popup-map">
                                <!-- Intégration de Google Maps -->
                                <iframe src="https://maps.google.com/maps?width=100%25&height=600&hl=en&q=rue%20vogler+(My%20Business%20Name)&t=&z=14&ie=UTF8&iwloc=B&output=embed" width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>       
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
            <button class="btn-contact" data-target="#popupMedecin10">Contactez moi</button>
                <!-- Pop-up pour le médecin 1 -->
                <div class="popup-container" id="popupMedecin10">
                        <div class="popup-content">
                            <span class="close-btn">&times;</span>
                            <div class="popup-header">
                                <h2>Médecin du sommeil</h2>
                            </div>
                            <div class="popup-body d-flex">
                                <div class="popup-text mb-3">
                                    <p>Je suis le Dr. Oscar Jeanne, un médecin dédié et passionné par la médecine du sommeil. Fort de plusieurs années d'expérience dans ce domaine spécialisé, j'ai consacré ma carrière à comprendre les mystères du sommeil et à résoudre les problématiques complexes qui y sont liées. Ma pratique est fondée sur une approche holistique et individualisée, intégrant les dernières avancées scientifiques pour traiter les troubles du sommeil.</p>
                                    <!-- Plus de texte ici -->
                                </div>
                                <div class="popup-map">
                                    <!-- Intégration de Google Maps -->
                                    <iframe src="https://maps.google.com/maps?width=100%25&height=600&hl=en&q=rue%20vogler+(My%20Business%20Name)&t=&z=14&ie=UTF8&iwloc=B&output=embed" width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>       
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
            <button class="btn-contact" data-target="#popupMedecin11">Contactez moi</button>
                <!-- Pop-up pour le médecin 1 -->
                <div class="popup-container" id="popupMedecin11">
                        <div class="popup-content">
                            <span class="close-btn">&times;</span>
                            <div class="popup-header">
                                <h2>Médecin du sommeil</h2>
                            </div>
                            <div class="popup-body d-flex">
                                <div class="popup-text mb-3">
                                    <p>Je suis le Dr. Oscar Jeanne, un médecin dédié et passionné par la médecine du sommeil. Fort de plusieurs années d'expérience dans ce domaine spécialisé, j'ai consacré ma carrière à comprendre les mystères du sommeil et à résoudre les problématiques complexes qui y sont liées. Ma pratique est fondée sur une approche holistique et individualisée, intégrant les dernières avancées scientifiques pour traiter les troubles du sommeil.</p>
                                    <!-- Plus de texte ici -->
                                </div>
                                <div class="popup-map">
                                    <!-- Intégration de Google Maps -->
                                    <iframe src="https://maps.google.com/maps?width=100%25&height=600&hl=en&q=rue%20vogler+(My%20Business%20Name)&t=&z=14&ie=UTF8&iwloc=B&output=embed" width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>       
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
            <button class="btn-contact" data-target="#popupMedecin12">Contactez moi</button>
                <!-- Pop-up pour le médecin 1 -->
                <div class="popup-container" id="popupMedecin12">
                        <div class="popup-content">
                            <span class="close-btn">&times;</span>
                            <div class="popup-header">
                                <h2>Médecin du sommeil</h2>
                            </div>
                            <div class="popup-body d-flex">
                                <div class="popup-text mb-3">
                                    <p>Je suis le Dr. Oscar Jeanne, un médecin dédié et passionné par la médecine du sommeil. Fort de plusieurs années d'expérience dans ce domaine spécialisé, j'ai consacré ma carrière à comprendre les mystères du sommeil et à résoudre les problématiques complexes qui y sont liées. Ma pratique est fondée sur une approche holistique et individualisée, intégrant les dernières avancées scientifiques pour traiter les troubles du sommeil.</p>
                                    <!-- Plus de texte ici -->
                                </div>
                                <div class="popup-map">
                                    <!-- Intégration de Google Maps -->
                                    <iframe src="https://maps.google.com/maps?width=100%25&height=600&hl=en&q=rue%20vogler+(My%20Business%20Name)&t=&z=14&ie=UTF8&iwloc=B&output=embed" width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>       
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
    </div>
    </div>



    <div id="articleProfessionnels3" class="container mt-5 article mb-5 mont animate-de-bas">
    <div class="row medecin-container justify-content-center">
        <!-- Colonne pour le premier médecin -->
        <div class="col-lg-4 col-md-6 col-sm-12 medecin-card">
        <img src="<?php echo get_template_directory_uri(); ?>/img/pp.jpg" class="medecin-image" alt="Dr Biannie Ahmadreza">
        <h5 class="medecin-info">Dr Biannie</h5>
        <p class="medecin-info">1090 Jette</p>
        <button class="btn-contact" data-target="#popupMedecin13">Contactez moi</button>
            <!-- Pop-up pour le médecin 1 -->
                <div class="popup-container" id="popupMedecin13">
                    <div class="popup-content">
                        <span class="close-btn">&times;</span>
                        <div class="popup-header">
                            <h2>Médecin du sommeil</h2>
                        </div>
                        <div class="popup-body d-flex">
                            <div class="popup-text mb-3">
                                <p>Je suis le Dr. Biannie, un médecin dédié et passionné par la médecine du sommeil. Fort de plusieurs années d'expérience dans ce domaine spécialisé, j'ai consacré ma carrière à comprendre les mystères du sommeil et à résoudre les problématiques complexes qui y sont liées. Ma pratique est fondée sur une approche holistique et individualisée, intégrant les dernières avancées scientifiques pour traiter les troubles du sommeil.</p>
                                <!-- Plus de texte ici -->
                            </div>
                            <div class="popup-map">
                                <!-- Intégration de Google Maps -->
                                <iframe src="https://maps.google.com/maps?width=100%25&height=600&hl=en&q=rue%20vogler+(My%20Business%20Name)&t=&z=14&ie=UTF8&iwloc=B&output=embed" width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>       
                            </div> 
                            <div class="popup-info">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/pp.jpg" alt="Dr. Biannie">
                                <h3>DR. Biannie</h3>
                                <p>Jette</p>
                                <p>22 ans</p>
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
            <button class="btn-contact" data-target="#popupMedecin14">Contactez moi</button>
                <!-- Pop-up pour le médecin 1 -->
                <div class="popup-container" id="popupMedecin14">
                    <div class="popup-content">
                        <span class="close-btn">&times;</span>
                        <div class="popup-header">
                            <h2>Médecin du sommeil</h2>
                        </div>
                        <div class="popup-body d-flex">
                            <div class="popup-text mb-3">
                                <p>Je suis le Dr. Oscar Jeanne, un médecin dédié et passionné par la médecine du sommeil. Fort de plusieurs années d'expérience dans ce domaine spécialisé, j'ai consacré ma carrière à comprendre les mystères du sommeil et à résoudre les problématiques complexes qui y sont liées. Ma pratique est fondée sur une approche holistique et individualisée, intégrant les dernières avancées scientifiques pour traiter les troubles du sommeil.</p>
                                <!-- Plus de texte ici -->
                            </div>
                            <div class="popup-map">
                                <!-- Intégration de Google Maps -->
                                <iframe src="https://maps.google.com/maps?width=100%25&height=600&hl=en&q=rue%20vogler+(My%20Business%20Name)&t=&z=14&ie=UTF8&iwloc=B&output=embed" width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>       
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
            <button class="btn-contact" data-target="#popupMedecin15">Contactez moi</button>
                <!-- Pop-up pour le médecin 1 -->
                <div class="popup-container" id="popupMedecin15">
                    <div class="popup-content">
                        <span class="close-btn">&times;</span>
                        <div class="popup-header">
                            <h2>Médecin du sommeil</h2>
                        </div>
                        <div class="popup-body d-flex">
                            <div class="popup-text mb-3">
                                <p>Je suis le Dr. Oscar Jeanne, un médecin dédié et passionné par la médecine du sommeil. Fort de plusieurs années d'expérience dans ce domaine spécialisé, j'ai consacré ma carrière à comprendre les mystères du sommeil et à résoudre les problématiques complexes qui y sont liées. Ma pratique est fondée sur une approche holistique et individualisée, intégrant les dernières avancées scientifiques pour traiter les troubles du sommeil.</p>
                                <!-- Plus de texte ici -->
                            </div>
                            <div class="popup-map">
                                <!-- Intégration de Google Maps -->
                                <iframe src="https://maps.google.com/maps?width=100%25&height=600&hl=en&q=rue%20vogler+(My%20Business%20Name)&t=&z=14&ie=UTF8&iwloc=B&output=embed" width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>       
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
            <button class="btn-contact" data-target="#popupMedecin16">Contactez moi</button>
                <!-- Pop-up pour le médecin 1 -->
                <div class="popup-container" id="popupMedecin16">
                        <div class="popup-content">
                            <span class="close-btn">&times;</span>
                            <div class="popup-header">
                                <h2>Médecin du sommeil</h2>
                            </div>
                            <div class="popup-body d-flex">
                                <div class="popup-text mb-3">
                                    <p>Je suis le Dr. Oscar Jeanne, un médecin dédié et passionné par la médecine du sommeil. Fort de plusieurs années d'expérience dans ce domaine spécialisé, j'ai consacré ma carrière à comprendre les mystères du sommeil et à résoudre les problématiques complexes qui y sont liées. Ma pratique est fondée sur une approche holistique et individualisée, intégrant les dernières avancées scientifiques pour traiter les troubles du sommeil.</p>
                                    <!-- Plus de texte ici -->
                                </div>
                                <div class="popup-map">
                                    <!-- Intégration de Google Maps -->
                                    <iframe src="https://maps.google.com/maps?width=100%25&height=600&hl=en&q=rue%20vogler+(My%20Business%20Name)&t=&z=14&ie=UTF8&iwloc=B&output=embed" width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>       
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
            <button class="btn-contact" data-target="#popupMedecin17">Contactez moi</button>
                <!-- Pop-up pour le médecin 1 -->
                <div class="popup-container" id="popupMedecin17">
                        <div class="popup-content">
                            <span class="close-btn">&times;</span>
                            <div class="popup-header">
                                <h2>Médecin du sommeil</h2>
                            </div>
                            <div class="popup-body d-flex">
                                <div class="popup-text mb-3">
                                    <p>Je suis le Dr. Oscar Jeanne, un médecin dédié et passionné par la médecine du sommeil. Fort de plusieurs années d'expérience dans ce domaine spécialisé, j'ai consacré ma carrière à comprendre les mystères du sommeil et à résoudre les problématiques complexes qui y sont liées. Ma pratique est fondée sur une approche holistique et individualisée, intégrant les dernières avancées scientifiques pour traiter les troubles du sommeil.</p>
                                    <!-- Plus de texte ici -->
                                </div>
                                <div class="popup-map">
                                    <!-- Intégration de Google Maps -->
                                    <iframe src="https://maps.google.com/maps?width=100%25&height=600&hl=en&q=rue%20vogler+(My%20Business%20Name)&t=&z=14&ie=UTF8&iwloc=B&output=embed" width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>       
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
            <button class="btn-contact" data-target="#popupMedecin18">Contactez moi</button>
                <!-- Pop-up pour le médecin 1 -->
                <div class="popup-container" id="popupMedecin18">
                        <div class="popup-content">
                            <span class="close-btn">&times;</span>
                            <div class="popup-header">
                                <h2>Médecin du sommeil</h2>
                            </div>
                            <div class="popup-body d-flex">
                                <div class="popup-text mb-3">
                                    <p>Je suis le Dr. Oscar Jeanne, un médecin dédié et passionné par la médecine du sommeil. Fort de plusieurs années d'expérience dans ce domaine spécialisé, j'ai consacré ma carrière à comprendre les mystères du sommeil et à résoudre les problématiques complexes qui y sont liées. Ma pratique est fondée sur une approche holistique et individualisée, intégrant les dernières avancées scientifiques pour traiter les troubles du sommeil.</p>
                                    <!-- Plus de texte ici -->
                                </div>
                                <div class="popup-map">
                                    <!-- Intégration de Google Maps -->
                                    <iframe src="https://maps.google.com/maps?width=100%25&height=600&hl=en&q=rue%20vogler+(My%20Business%20Name)&t=&z=14&ie=UTF8&iwloc=B&output=embed" width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>       
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
    </div>
    </div>



    <div id="articleProfessionnels4" class="container mt-5 article mb-5 mont animate-de-bas">
    <div class="row medecin-container justify-content-center">
        <!-- Colonne pour le premier médecin -->
        <div class="col-lg-4 col-md-6 col-sm-12 medecin-card">
        <img src="<?php echo get_template_directory_uri(); ?>/img/pp.jpg" class="medecin-image" alt="Dr Biannie Ahmadreza">
        <h5 class="medecin-info">Dr Biannie</h5>
        <p class="medecin-info">1090 Jette</p>
        <button class="btn-contact" data-target="#popupMedecin19">Contactez moi</button>
            <!-- Pop-up pour le médecin 1 -->
                <div class="popup-container" id="popupMedecin19">
                    <div class="popup-content">
                        <span class="close-btn">&times;</span>
                        <div class="popup-header">
                            <h2>Médecin du sommeil</h2>
                        </div>
                        <div class="popup-body d-flex">
                            <div class="popup-text mb-3">
                                <p>Je suis le Dr. Biannie, un médecin dédié et passionné par la médecine du sommeil. Fort de plusieurs années d'expérience dans ce domaine spécialisé, j'ai consacré ma carrière à comprendre les mystères du sommeil et à résoudre les problématiques complexes qui y sont liées. Ma pratique est fondée sur une approche holistique et individualisée, intégrant les dernières avancées scientifiques pour traiter les troubles du sommeil.</p>
                                <!-- Plus de texte ici -->
                            </div>
                            <div class="popup-map">
                                <!-- Intégration de Google Maps -->
                                <iframe src="https://maps.google.com/maps?width=100%25&height=600&hl=en&q=rue%20vogler+(My%20Business%20Name)&t=&z=14&ie=UTF8&iwloc=B&output=embed" width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>       
                            </div> 
                            <div class="popup-info">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/pp.jpg" alt="Dr. Biannie">
                                <h3>DR. Biannie</h3>
                                <p>Jette</p>
                                <p>22 ans</p>
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
            <button class="btn-contact" data-target="#popupMedecin20">Contactez moi</button>
                <!-- Pop-up pour le médecin 1 -->
                <div class="popup-container" id="popupMedecin20">
                    <div class="popup-content">
                        <span class="close-btn">&times;</span>
                        <div class="popup-header">
                            <h2>Médecin du sommeil</h2>
                        </div>
                        <div class="popup-body d-flex">
                            <div class="popup-text mb-3">
                                <p>Je suis le Dr. Oscar Jeanne, un médecin dédié et passionné par la médecine du sommeil. Fort de plusieurs années d'expérience dans ce domaine spécialisé, j'ai consacré ma carrière à comprendre les mystères du sommeil et à résoudre les problématiques complexes qui y sont liées. Ma pratique est fondée sur une approche holistique et individualisée, intégrant les dernières avancées scientifiques pour traiter les troubles du sommeil.</p>
                                <!-- Plus de texte ici -->
                            </div>
                            <div class="popup-map">
                                <!-- Intégration de Google Maps -->
                                <iframe src="https://maps.google.com/maps?width=100%25&height=600&hl=en&q=rue%20vogler+(My%20Business%20Name)&t=&z=14&ie=UTF8&iwloc=B&output=embed" width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>       
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
            <button class="btn-contact" data-target="#popupMedecin21">Contactez moi</button>
                <!-- Pop-up pour le médecin 1 -->
                <div class="popup-container" id="popupMedecin21">
                    <div class="popup-content">
                        <span class="close-btn">&times;</span>
                        <div class="popup-header">
                            <h2>Médecin du sommeil</h2>
                        </div>
                        <div class="popup-body d-flex">
                            <div class="popup-text mb-3">
                                <p>Je suis le Dr. Oscar Jeanne, un médecin dédié et passionné par la médecine du sommeil. Fort de plusieurs années d'expérience dans ce domaine spécialisé, j'ai consacré ma carrière à comprendre les mystères du sommeil et à résoudre les problématiques complexes qui y sont liées. Ma pratique est fondée sur une approche holistique et individualisée, intégrant les dernières avancées scientifiques pour traiter les troubles du sommeil.</p>
                                <!-- Plus de texte ici -->
                            </div>
                            <div class="popup-map">
                                <!-- Intégration de Google Maps -->
                                <iframe src="https://maps.google.com/maps?width=100%25&height=600&hl=en&q=rue%20vogler+(My%20Business%20Name)&t=&z=14&ie=UTF8&iwloc=B&output=embed" width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>       
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
            <button class="btn-contact" data-target="#popupMedecin22">Contactez moi</button>
                <!-- Pop-up pour le médecin 1 -->
                <div class="popup-container" id="popupMedecin22">
                        <div class="popup-content">
                            <span class="close-btn">&times;</span>
                            <div class="popup-header">
                                <h2>Médecin du sommeil</h2>
                            </div>
                            <div class="popup-body d-flex">
                                <div class="popup-text mb-3">
                                    <p>Je suis le Dr. Oscar Jeanne, un médecin dédié et passionné par la médecine du sommeil. Fort de plusieurs années d'expérience dans ce domaine spécialisé, j'ai consacré ma carrière à comprendre les mystères du sommeil et à résoudre les problématiques complexes qui y sont liées. Ma pratique est fondée sur une approche holistique et individualisée, intégrant les dernières avancées scientifiques pour traiter les troubles du sommeil.</p>
                                    <!-- Plus de texte ici -->
                                </div>
                                <div class="popup-map">
                                    <!-- Intégration de Google Maps -->
                                    <iframe src="https://maps.google.com/maps?width=100%25&height=600&hl=en&q=rue%20vogler+(My%20Business%20Name)&t=&z=14&ie=UTF8&iwloc=B&output=embed" width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>       
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
            <button class="btn-contact" data-target="#popupMedecin23">Contactez moi</button>
                <!-- Pop-up pour le médecin 1 -->
                <div class="popup-container" id="popupMedecin23">
                        <div class="popup-content">
                            <span class="close-btn">&times;</span>
                            <div class="popup-header">
                                <h2>Médecin du sommeil</h2>
                            </div>
                            <div class="popup-body d-flex">
                                <div class="popup-text mb-3">
                                    <p>Je suis le Dr. Oscar Jeanne, un médecin dédié et passionné par la médecine du sommeil. Fort de plusieurs années d'expérience dans ce domaine spécialisé, j'ai consacré ma carrière à comprendre les mystères du sommeil et à résoudre les problématiques complexes qui y sont liées. Ma pratique est fondée sur une approche holistique et individualisée, intégrant les dernières avancées scientifiques pour traiter les troubles du sommeil.</p>
                                    <!-- Plus de texte ici -->
                                </div>
                                <div class="popup-map">
                                    <!-- Intégration de Google Maps -->
                                    <iframe src="https://maps.google.com/maps?width=100%25&height=600&hl=en&q=rue%20vogler+(My%20Business%20Name)&t=&z=14&ie=UTF8&iwloc=B&output=embed" width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>       
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
            <button class="btn-contact" data-target="#popupMedecin24">Contactez moi</button>
                <!-- Pop-up pour le médecin 1 -->
                <div class="popup-container" id="popupMedecin24">
                        <div class="popup-content">
                            <span class="close-btn">&times;</span>
                            <div class="popup-header">
                                <h2>Médecin du sommeil</h2>
                            </div>
                            <div class="popup-body d-flex">
                                <div class="popup-text mb-3">
                                    <p>Je suis le Dr. Oscar Jeanne, un médecin dédié et passionné par la médecine du sommeil. Fort de plusieurs années d'expérience dans ce domaine spécialisé, j'ai consacré ma carrière à comprendre les mystères du sommeil et à résoudre les problématiques complexes qui y sont liées. Ma pratique est fondée sur une approche holistique et individualisée, intégrant les dernières avancées scientifiques pour traiter les troubles du sommeil.</p>
                                    <!-- Plus de texte ici -->
                                </div>
                                <div class="popup-map">
                                    <!-- Intégration de Google Maps -->
                                    <iframe src="https://maps.google.com/maps?width=100%25&height=600&hl=en&q=rue%20vogler+(My%20Business%20Name)&t=&z=14&ie=UTF8&iwloc=B&output=embed" width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>       
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
    </div>
    </div>



    <div id="articleProfessionnels5" class="container mt-5 article mb-5 mont animate-de-bas">
    <div class="row medecin-container justify-content-center">
        <!-- Colonne pour le premier médecin -->
        <div class="col-lg-4 col-md-6 col-sm-12 medecin-card">
        <img src="<?php echo get_template_directory_uri(); ?>/img/pp.jpg" class="medecin-image" alt="Dr Biannie Ahmadreza">
        <h5 class="medecin-info">Dr Biannie</h5>
        <p class="medecin-info">1090 Jette</p>
        <button class="btn-contact" data-target="#popupMedecin25">Contactez moi</button>
            <!-- Pop-up pour le médecin 1 -->
                <div class="popup-container" id="popupMedecin25">
                    <div class="popup-content">
                        <span class="close-btn">&times;</span>
                        <div class="popup-header">
                            <h2>Médecin du sommeil</h2>
                        </div>
                        <div class="popup-body d-flex">
                            <div class="popup-text mb-3">
                                <p>Je suis le Dr. Biannie, un médecin dédié et passionné par la médecine du sommeil. Fort de plusieurs années d'expérience dans ce domaine spécialisé, j'ai consacré ma carrière à comprendre les mystères du sommeil et à résoudre les problématiques complexes qui y sont liées. Ma pratique est fondée sur une approche holistique et individualisée, intégrant les dernières avancées scientifiques pour traiter les troubles du sommeil.</p>
                                <!-- Plus de texte ici -->
                            </div>
                            <div class="popup-map">
                                <!-- Intégration de Google Maps -->
                                <iframe src="https://maps.google.com/maps?width=100%25&height=600&hl=en&q=rue%20vogler+(My%20Business%20Name)&t=&z=14&ie=UTF8&iwloc=B&output=embed" width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>       
                            </div> 
                            <div class="popup-info">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/pp.jpg" alt="Dr. Biannie">
                                <h3>DR. Biannie</h3>
                                <p>Jette</p>
                                <p>22 ans</p>
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
            <button class="btn-contact" data-target="#popupMedecin26">Contactez moi</button>
                <!-- Pop-up pour le médecin 1 -->
                <div class="popup-container" id="popupMedecin26">
                    <div class="popup-content">
                        <span class="close-btn">&times;</span>
                        <div class="popup-header">
                            <h2>Médecin du sommeil</h2>
                        </div>
                        <div class="popup-body d-flex">
                            <div class="popup-text mb-3">
                                <p>Je suis le Dr. Oscar Jeanne, un médecin dédié et passionné par la médecine du sommeil. Fort de plusieurs années d'expérience dans ce domaine spécialisé, j'ai consacré ma carrière à comprendre les mystères du sommeil et à résoudre les problématiques complexes qui y sont liées. Ma pratique est fondée sur une approche holistique et individualisée, intégrant les dernières avancées scientifiques pour traiter les troubles du sommeil.</p>
                                <!-- Plus de texte ici -->
                            </div>
                            <div class="popup-map">
                                <!-- Intégration de Google Maps -->
                                <iframe src="https://maps.google.com/maps?width=100%25&height=600&hl=en&q=rue%20vogler+(My%20Business%20Name)&t=&z=14&ie=UTF8&iwloc=B&output=embed" width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>       
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
            <button class="btn-contact" data-target="#popupMedecin27">Contactez moi</button>
                <!-- Pop-up pour le médecin 1 -->
                <div class="popup-container" id="popupMedecin27">
                    <div class="popup-content">
                        <span class="close-btn">&times;</span>
                        <div class="popup-header">
                            <h2>Médecin du sommeil</h2>
                        </div>
                        <div class="popup-body d-flex">
                            <div class="popup-text mb-3">
                                <p>Je suis le Dr. Oscar Jeanne, un médecin dédié et passionné par la médecine du sommeil. Fort de plusieurs années d'expérience dans ce domaine spécialisé, j'ai consacré ma carrière à comprendre les mystères du sommeil et à résoudre les problématiques complexes qui y sont liées. Ma pratique est fondée sur une approche holistique et individualisée, intégrant les dernières avancées scientifiques pour traiter les troubles du sommeil.</p>
                                <!-- Plus de texte ici -->
                            </div>
                            <div class="popup-map">
                                <!-- Intégration de Google Maps -->
                                <iframe src="https://maps.google.com/maps?width=100%25&height=600&hl=en&q=rue%20vogler+(My%20Business%20Name)&t=&z=14&ie=UTF8&iwloc=B&output=embed" width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>       
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
            <button class="btn-contact" data-target="#popupMedecin28">Contactez moi</button>
                <!-- Pop-up pour le médecin 1 -->
                <div class="popup-container" id="popupMedecin28">
                        <div class="popup-content">
                            <span class="close-btn">&times;</span>
                            <div class="popup-header">
                                <h2>Médecin du sommeil</h2>
                            </div>
                            <div class="popup-body d-flex">
                                <div class="popup-text mb-3">
                                    <p>Je suis le Dr. Oscar Jeanne, un médecin dédié et passionné par la médecine du sommeil. Fort de plusieurs années d'expérience dans ce domaine spécialisé, j'ai consacré ma carrière à comprendre les mystères du sommeil et à résoudre les problématiques complexes qui y sont liées. Ma pratique est fondée sur une approche holistique et individualisée, intégrant les dernières avancées scientifiques pour traiter les troubles du sommeil.</p>
                                    <!-- Plus de texte ici -->
                                </div>
                                <div class="popup-map">
                                    <!-- Intégration de Google Maps -->
                                    <iframe src="https://maps.google.com/maps?width=100%25&height=600&hl=en&q=rue%20vogler+(My%20Business%20Name)&t=&z=14&ie=UTF8&iwloc=B&output=embed" width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>       
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
            <button class="btn-contact" data-target="#popupMedecin29">Contactez moi</button>
                <!-- Pop-up pour le médecin 1 -->
                <div class="popup-container" id="popupMedecin29">
                        <div class="popup-content">
                            <span class="close-btn">&times;</span>
                            <div class="popup-header">
                                <h2>Médecin du sommeil</h2>
                            </div>
                            <div class="popup-body d-flex">
                                <div class="popup-text mb-3">
                                    <p>Je suis le Dr. Oscar Jeanne, un médecin dédié et passionné par la médecine du sommeil. Fort de plusieurs années d'expérience dans ce domaine spécialisé, j'ai consacré ma carrière à comprendre les mystères du sommeil et à résoudre les problématiques complexes qui y sont liées. Ma pratique est fondée sur une approche holistique et individualisée, intégrant les dernières avancées scientifiques pour traiter les troubles du sommeil.</p>
                                    <!-- Plus de texte ici -->
                                </div>
                                <div class="popup-map">
                                    <!-- Intégration de Google Maps -->
                                    <iframe src="https://maps.google.com/maps?width=100%25&height=600&hl=en&q=rue%20vogler+(My%20Business%20Name)&t=&z=14&ie=UTF8&iwloc=B&output=embed" width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>       
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
            <button class="btn-contact" data-target="#popupMedecin30">Contactez moi</button>
                <!-- Pop-up pour le médecin 1 -->
                <div class="popup-container" id="popupMedecin30">
                        <div class="popup-content">
                            <span class="close-btn">&times;</span>
                            <div class="popup-header">
                                <h2>Médecin du sommeil</h2>
                            </div>
                            <div class="popup-body d-flex">
                                <div class="popup-text mb-3">
                                    <p>Je suis le Dr. Oscar Jeanne, un médecin dédié et passionné par la médecine du sommeil. Fort de plusieurs années d'expérience dans ce domaine spécialisé, j'ai consacré ma carrière à comprendre les mystères du sommeil et à résoudre les problématiques complexes qui y sont liées. Ma pratique est fondée sur une approche holistique et individualisée, intégrant les dernières avancées scientifiques pour traiter les troubles du sommeil.</p>
                                    <!-- Plus de texte ici -->
                                </div>
                                <div class="popup-map">
                                    <!-- Intégration de Google Maps -->
                                    <iframe src="https://maps.google.com/maps?width=100%25&height=600&hl=en&q=rue%20vogler+(My%20Business%20Name)&t=&z=14&ie=UTF8&iwloc=B&output=embed" width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>       
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
    </div>
    </div>
</section>
<?php get_footer(); ?>