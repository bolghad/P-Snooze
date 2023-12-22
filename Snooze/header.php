<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Votre description ici">
    <title>Snooze</title>

    <!-- Lien vers la bibliothèque Bootstrap depuis un CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <!-- Lien vers le fichier CSS global -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <!-- ... autres balises head ... -->
    <style>



            /* Style du conteneur du bouton */
            .bouton-container {
                display: flex;
                justify-content: center; /* Centrer horizontalement */
                align-items: flex-start; /* Aligner le bouton en haut de la page */
                height: 50vh; /* Hauteur de l'écran */
                margin-top: 5%;
            }

        /* Style du bouton */
        .bouton-image {
            border: 2px solid rgb(14, 35, 56);
            outline: none;
            width: 350px; /* Largeur du bouton */
            height: 80px; /* Hauteur du bouton */
            position: relative; /* Ajoute une position relative */
            text-align: center;
            line-height: 75px; /* Centrer le texte verticalement */
            color: white; /* Couleur du texte */
            font-size: 20px; /* Taille de police du texte */
            text-decoration: none; /* Supprime le soulignement du lien par défaut */
            display: inline-block;
            background-color: #0e2338;
            border-radius: 50px;
            overflow: hidden; /* Masque tout ce qui dépasse de la zone du bouton */
            cursor: pointer; /* Affiche un curseur de type "main" pour indiquer que le bouton est cliquable */
        }

        /* Style de la couche d'arrière-plan avec l'image */
        .bouton-image::before {
            outline: none;
            content: "";
            position: absolute; /* Position absolue par rapport au parent (.bouton-image) */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('<?php echo get_template_directory_uri(); ?>/img/nuage2.svg'); /* Image de fond */
            background-size: 100% auto; /* Ajuster l'image en largeur pour couvrir la zone du bouton et en hauteur en fonction de son aspect ratio */
            background-repeat: no-repeat; /* Empêcher la répétition de l'image */
            background-position: center 10%; /* Centrer l'image horizontalement et positionner à 30% du haut */
            transform: translateX(-80%); /* Déplacer l'image complètement hors de la vue initialement */
            transition: transform 1.5s ease; /* Transition pour l'effet de déplacement (augmentation du temps à 1 seconde) */
        }

      /* Style au survol du bouton */
.bouton-image:hover::before {
    transform: translateX(25%); /* Déplacer l'image de fond à sa position initiale au survol */
    outline: none; /* Supprime le style de survol par défaut du navigateur */
}

@media (max-width: 781px) {
    .bouton-image{
        width:250px;
        height:60px;
        line-height: 55px;
        font-size:1em;
    }
}





        @font-face {
            font-family: 'Portofino';
            src: url('<?php echo get_template_directory_uri(); ?>/font/Portofino-Bold.woff2') format('woff2'),
                url('<?php echo get_template_directory_uri(); ?>/font/Portofino-Bold.woff') format('woff'),
                url('<?php echo get_template_directory_uri(); ?>/font/Portofino-Bold.ttf') format('truetype');
            font-weight: 700;
            font-style: normal;
}
       /* body{
            cursor: url('<?php echo get_template_directory_uri(); ?>/img/icone.png')
            1 1,
            auto;          
        }  */

        
        #loading-bar::after {
            content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 15px;
        height: 15px;
        background: url('<?php echo get_template_directory_uri(); ?>/img/icone.png') no-repeat;
        background-size: cover;
    }


    </style>
    <?php wp_head(); ?> 
</head>

<body style="background: linear-gradient(#000 20%, #666334,  50% hsl(120, 50%, 50%))">
    <!-- Barre de chargement -->
    <div id="loading-container">
        <div id="loading-bar"></div>
        <div id="current-time"></div>
    </div>

<!-- En-tête -->
<header class="fixed-top animate-de-haut mont" id="site-header">
    <div class="container">
            <div class="header-content">
                <!-- Boutons de gauche (visible sur desktop) -->
                <div class="header-buttons-left">
                    <div class="dropdown">
                   <!-- <?php wp_nav_menu([
  'theme_location' => 'header-left', // localisation de mon menu
  'container' => false, // permet de retirer mon container
  'menu_class' => 'navbar-nav me-auto' // la classe que je veux dans mon <ul></ul>
]); ?> -->
                        <button class="header-button"><span class="rotate">⮞</span>Conseils</button>
                        <div class="dropdown-content">
                       
                            <a href="<?php echo home_url('troubles') ?>" >Troubles</a>
                            <a href="<?php echo home_url('guides') ?>">Guides</a>
                        </div>
                    </div>
                    <a class="header-button" href="<?php echo home_url('carte') ?>">Carte</a>
                    <a class="header-button" href="<?php echo home_url('professionnels') ?>">Professionnels</a>
                </div>
                <!-- Logo (visible sur desktop) -->
                <div id="logo-container">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo Snooze" id="logo">
                    </a>
                </div>
                <!-- Boutons de droite (visible sur desktop) -->
                <div class="header-buttons-right">
                    <div class="dropdown">
                        <button class="header-button"><span class="rotate">⮞</span>Journal</button>
                        <div class="dropdown-content">
                            <a href="<?php echo home_url('dashboard') ?>">Dashboard</a>
                            <a href="<?php echo home_url('carnet') ?>">Carnet</a>
                            <a href="<?php echo home_url('parametres') ?>">Paramètres</a>
                        </div>
                    </div>
                    <a class="header-button" href="<?php echo home_url('connexion') ?>">Connexion</a>
                    <div class="dropdown">
                        <button class="header-button">Fr</button>
                        <div class="dropdown-content">
                            <a href="#">Fr</a>
                            <a href="#">En</a>
                            <a href="#">Nl</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <!-- Mobile -->
    <!-- Bouton du menu burger (visible sur mobile) -->
<div id="burger-menu-icon">
    <img id="burger-mobile" src="<?php echo get_template_directory_uri(); ?>/img/burger.png" alt="Menu">
</div>

<!-- Logo (visible sur mobile) -->
<div id="mobile-logo-container">
    <a href="<?php echo home_url(); ?>">
        <img id ="logo-mobile" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo Snooze" id="mobile-logo">
    </a>
</div>

<!-- Boutons pour le menu mobile -->
<div id="mobile-buttons">
    <div class="dropdown">
        <button class="header-button">Conseils</button>
        <div class="dropdown-content">
            <a href="<?php echo home_url('troubles') ?>">Troubles</a>
            <a href="<?php echo home_url('guides') ?>">Guides</a>
        </div>
    </div>
    <a class="header-button" href="<?php echo home_url('carte') ?>">Carte</a>
    <a class="header-button" href="<?php echo home_url('professionnels') ?>">Professionnels</a>
    <div class="dropdown">
        <button class="header-button">Journal</button>
        <div class="dropdown-content">
            <a href="<?php echo home_url('dashboard') ?>">Dashboard</a>
            <a href="<?php echo home_url('carnet') ?>">Carnet</a>
            <a href="<?php echo home_url('parametres') ?>">Paramètres</a>
        </div>
    </div>
    <a class="header-button" href="<?php echo home_url('connexion') ?>">Connexion</a>
    <div class="dropdown">
        <button class="header-button">Fr</button>
        <div class="dropdown-content">
            <a href="#">Fr</a>
            <a href="#">En</a>
            <a href="#">Nl</a>
        </div>
    </div>
</div>

</header>

</div>
