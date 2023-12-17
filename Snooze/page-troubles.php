<?php get_header(); ?>
<section class="first">
    <h1 class="text-center animate-de-haut">Détails des troubles du sommeil</h1>
    <ul class="nav list-unstyled animate-de-gauche">
        <li class="nav-item">
            <a class="nav-link trouble-link active" id="boutonTrouble1">Insomnie</a>
        </li>
        <li class="nav-item">
            <a class="nav-link trouble-link" id="boutonTrouble2">Apnée du sommeil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link trouble-link" id="boutonTrouble3">Syndrome des jambes sans repos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link trouble-link" id="boutonTrouble4">Narcolepsie</a>
        </li>
        <li class="nav-item">
            <a class="nav-link trouble-link" id="boutonTrouble5">Troubles du sommeil paradoxal</a>
        </li>
        <!-- Ajoutez d'autres boutons si nécessaire -->
    </ul>
</section>


<section class="main-content mont">

    <!-- Contenu des articles -->
    <div id="articleTrouble1" class="article active">

                <h2>Insomnie</h2>

        <div class="container-fluid"> <!-- Remplacer 'container' par 'container-fluid' pour une largeur complète -->
            <div class="row">
                <!-- Augmenter la largeur des colonnes -->
                <div class="col-lg-6 col-md-6 col-sm-12 animate-de-gauche">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/insomnieDeux.jpg" alt="Image 1" class="img-fluid article-image-un">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 text-article article-texte-un animate-de-droite">
                    <p>L'insomnie est un trouble du sommeil commun qui peut rendre difficile l'endormissement, le maintien du sommeil, ou provoquer un réveil précoce. Ce trouble affecte non seulement la qualité du sommeil, mais aussi l'humeur et l'énergie pendant la journée. Dans cet article, nous explorons les causes, les symptômes et les solutions possibles pour surmonter l'insomnie et retrouver un sommeil réparateur.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 text-article article-texte-deux animate-de-gauche">
                    <p>Gérer l'insomnie implique souvent des changements de style de vie et de routine de sommeil. Des pratiques comme la méditation, le yoga, et l'établissement d'une routine de coucher régulière peuvent aider. Éviter les écrans avant de dormir, réduire la consommation de caféine, et créer un environnement de sommeil confortable sont également des stratégies clés. Pour les cas plus sévères, une consultation médicale peut s'avérer nécessaire pour identifier et traiter les causes sous-jacentes de l'insomnie</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 animate-de-droite">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/insomnieUn.png" alt="Image 2" class="img-fluid article-image-deux">
                    <button class="bouton-contact">Contactez un professionnel de la santé</button>
                </div>
            </div>
        </div>
    </div>


    <div id="articleTrouble2" class="article">

    <h2>Apnée du sommeil</h2>

        <div class="container-fluid"> <!-- Remplacer 'container' par 'container-fluid' pour une largeur complète -->
            <div class="row">
                <!-- Augmenter la largeur des colonnes -->
                <div class="col-lg-6 col-md-6 col-sm-12 animate-de-gauche">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/apneeUn.jpg" alt="Image 1" class="img-fluid article-image-un">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 text-article article-texte-un animate-de-droite">
                    <p>L'apnée du sommeil est l'un des troubles du sommeil les plus répandus, mais souvent sous-diagnostiqués. Ce trouble se caractérise par des interruptions fréquentes de la respiration pendant le sommeil, ce qui peut entraîner une fragmentation du sommeil et des problèmes de santé graves. Dans cet article, nous examinerons les symptômes, les facteurs de risque et les options de traitement pour l'apnée du sommeil, afin d'aider ceux qui en souffrent à mieux comprendre et à gérer leur condition.</p>    
                </div>
                </div>
                <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 text-article article-texte-deux animate-de-gauche">
                    <p>L'apnée du sommeil est un trouble du sommeil qui peut avoir un impact significatif sur la qualité de vie d'une personne. Les personnes atteintes d'apnée du sommeil éprouvent des interruptions fréquentes de la respiration pendant la nuit, ce qui les empêche d'obtenir un sommeil réparateur. Dans cet article, nous aborderons les causes, les symptômes et les traitements de l'apnée du sommeil, ainsi que les conseils pour améliorer la qualité du sommeil et favoriser une meilleure santé globale.</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 animate-de-droite">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ApneeDeux.jpg" alt="Image 2" class="img-fluid article-image-deux">
                    <button class="bouton-contact">Contactez un professionnel de la santé</button>
                </div>
            </div>
        </div>
    </div>

    <div id="articleTrouble3" class="article">

    <h2>Syndrome des jambes sans repos</h2>

        <div class="container-fluid"> <!-- Remplacer 'container' par 'container-fluid' pour une largeur complète -->
            <div class="row">
                <!-- Augmenter la largeur des colonnes -->
                <div class="col-lg-6 col-md-6 col-sm-12 animate-de-gauche">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/syndromeUn.jpg" alt="Image 1" class="img-fluid article-image-un">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 text-article article-texte-un animate-de-droite">
                <p>Le syndrome des jambes sans repos (SJSR) est un trouble du sommeil caractérisé par une sensation inconfortable dans les jambes qui survient principalement au repos, en particulier le soir et la nuit. Cette sensation pousse souvent les personnes atteintes à bouger leurs jambes pour soulager l'inconfort, ce qui peut perturber leur sommeil. Dans cet article, nous explorerons les symptômes, les facteurs de risque et les options de traitement pour le syndrome des jambes sans repos, afin d'aider ceux qui en souffrent à mieux gérer leur condition et à retrouver des nuits de sommeil paisible.</p>
                </div>
                </div>
                <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 text-article article-texte-deux animate-de-gauche">
                <p>Le syndrome des jambes sans repos est un trouble du sommeil qui peut considérablement affecter la qualité de vie d'une personne. Les sensations inconfortables et le besoin de bouger les jambes peuvent perturber le sommeil, entraînant une fatigue diurne et d'autres problèmes de santé. Dans cet article, nous aborderons en détail les caractéristiques du syndrome des jambes sans repos, les méthodes de diagnostic et les approches de traitement disponibles pour aider les individus à mieux gérer ce trouble et à retrouver un sommeil réparateur.</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 animate-de-droite">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/syndromeDeux.jpg" alt="Image 2" class="img-fluid article-image-deux">
                    <button class="bouton-contact">Contactez un professionnel de la santé</button>
                </div>
            </div>
        </div>
    </div>

    <div id="articleTrouble4" class="article">

    <h2>Narcolepsie</h2>

        <div class="container-fluid"> <!-- Remplacer 'container' par 'container-fluid' pour une largeur complète -->
            <div class="row">
                <!-- Augmenter la largeur des colonnes -->
                <div class="col-lg-6 col-md-6 col-sm-12 animate-de-gauche">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/narcoUn.jpg" alt="Image 1" class="img-fluid article-image-un">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 text-article article-texte-un animate-de-droite">
                    <p>La narcolepsie est un trouble du sommeil complexe qui se caractérise par une somnolence excessive et soudaine pendant la journée, accompagnée de symptômes tels que la cataplexie (perte soudaine de tonus musculaire), les hallucinations hypnagogiques (rêves vifs au moment de l'endormissement) et la paralysie du sommeil (incapacité temporaire de bouger ou de parler lors de l'endormissement ou du réveil). Dans cet article, nous explorons les causes, les symptômes et les approches de traitement de la narcolepsie pour aider les personnes atteintes à mieux comprendre leur condition et à gérer les défis qu'elle pose dans leur vie quotidienne.</p>
                </div>
                </div>
                <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 text-article article-texte-deux animate-de-gauche">
                    <p>La narcolepsie est un trouble neurologique qui peut avoir un impact significatif sur la vie quotidienne d'une personne. Les épisodes soudains de somnolence diurne, la cataplexie et d'autres symptômes de la narcolepsie peuvent rendre les activités quotidiennes difficiles à accomplir. Dans cet article, nous examinons en détail la narcolepsie, ses mécanismes sous-jacents, les signes et les symptômes qui lui sont associés, ainsi que les options de traitement disponibles pour aider les personnes atteintes de narcolepsie à mieux gérer leur condition et à mener une vie épanouissante malgré ce trouble du sommeil.</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 animate-de-droite">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/narcoDeux.jpg" alt="Image 2" class="img-fluid article-image-deux">
                    <button class="bouton-contact">Contactez un professionnel de la santé</button>
                </div>
            </div>
        </div>
    </div>

    <div id="articleTrouble5" class="article">

    <h2>Troubles du sommeil paradoxal</h2>

        <div class="container-fluid"> <!-- Remplacer 'container' par 'container-fluid' pour une largeur complète -->
            <div class="row">
                <!-- Augmenter la largeur des colonnes -->
                <div class="col-lg-6 col-md-6 col-sm-12 animate-de-gauche">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/paraUn.jpg" alt="Image 1" class="img-fluid article-image-un">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 text-article article-texte-un animate-de-droite">
                <p>Les troubles du sommeil paradoxal, également connus sous le nom de troubles du sommeil REM (mouvement rapide des yeux), sont un groupe de conditions qui perturbent la phase du sommeil paradoxal du cycle de sommeil. Cette phase est généralement associée à des rêves vivaces et à une activité cérébrale intense. Les troubles du sommeil paradoxal peuvent entraîner des symptômes tels que des cauchemars fréquents, des comportements inhabituels pendant le sommeil et une somnolence diurne excessive. Dans cet article, nous explorons les différents types de troubles du sommeil paradoxal, leurs causes possibles et les options de traitement disponibles pour ceux qui sont touchés.</p>
                </div>
                </div>
                <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 text-article article-texte-deux animate-de-gauche">
                <p>Les troubles du sommeil paradoxal sont un groupe de conditions qui affectent la phase du sommeil REM (mouvement rapide des yeux). Cette phase est essentielle pour les rêves et la régulation émotionnelle. Les personnes atteintes de troubles du sommeil paradoxal peuvent éprouver des rêves intenses, des mouvements corporels incontrôlés et des périodes de paralysie au réveil. Dans cet article, nous examinons de plus près ces troubles, leurs manifestations cliniques, les facteurs de risque associés et les approches de traitement qui peuvent aider à améliorer la qualité du sommeil et à atténuer les symptômes.</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 animate-de-droite">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/paraDeux.jpg" alt="Image 2" class="img-fluid article-image-deux">
                    <button class="bouton-contact">Contactez un professionnel de la santé</button>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>