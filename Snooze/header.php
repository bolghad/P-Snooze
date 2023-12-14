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
                        <button class="header-button">Conseils</button>
                        <div class="dropdown-content">
                            <a href="<?php echo get_template_directory_uri(); ?>/troubles" >Troubles</a>
                            <a href="<?php echo get_template_directory_uri(); ?>/guides">Guides</a>
                        </div>
                    </div>
                    <a class="header-button" href="<?php echo get_template_directory_uri(); ?>/carte">Carte</a>
                    <a class="header-button" href="<?php echo get_template_directory_uri(); ?>/professionnels">Professionnels</a>
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
                        <button class="header-button">Journal</button>
                        <div class="dropdown-content">
                            <a href="<?php echo get_template_directory_uri(); ?>/dashboard">Dashboard</a>
                            <a href="<?php echo get_template_directory_uri(); ?>/carnet">Carnet</a>
                            <a href="<?php echo get_template_directory_uri(); ?>/paramètres">Paramètres</a>
                        </div>
                    </div>
                    <a class="header-button" href="<?php echo get_template_directory_uri(); ?>/connexion">Connexion</a>
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
    <a href="<?php echo get_template_directory_uri(); ?>/index">
        <img id ="logo-mobile" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo Snooze" id="mobile-logo">
    </a>
</div>

<!-- Boutons pour le menu mobile -->
<div id="mobile-buttons">
    <div class="dropdown">
        <button class="header-button">Conseils</button>
        <div class="dropdown-content">
            <a href="<?php echo get_template_directory_uri(); ?>/troubles">Troubles</a>
            <a href="<?php echo get_template_directory_uri(); ?>/guides">Guides</a>
        </div>
    </div>
    <a class="header-button" href="<?php echo get_template_directory_uri(); ?>/carte">Carte</a>
    <a class="header-button" href="<?php echo get_template_directory_uri(); ?>/professionnels">Professionnels</a>
    <div class="dropdown">
        <button class="header-button">Journal</button>
        <div class="dropdown-content">
            <a href="<?php echo get_template_directory_uri(); ?>/dashboard">Dashboard</a>
            <a href="<?php echo get_template_directory_uri(); ?>/carnet">Carnet</a>
            <a href="<?php echo get_template_directory_uri(); ?>/paramètres">Paramètres</a>
        </div>
    </div>
    <a class="header-button" href="<?php echo get_template_directory_uri(); ?>/connexion">Connexion</a>
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
