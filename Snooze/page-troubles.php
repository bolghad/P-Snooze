<?php get_header(); ?>
<section>
    <h1 class="text-center" style="margin-top: 100px;">Détails des troubles du sommeil</h1>
    <ul class="nav list-unstyled">
        <li class="nav-item">
            <a class="nav-link trouble-link" id="boutonTrouble1">Bouton Trouble 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link trouble-link" id="boutonTrouble2">Bouton Trouble 2</a>
        </li>
        <li class="nav-item">
            <a class="nav-link trouble-link" id="boutonTrouble3">Bouton Trouble 3</a>
        </li>
        <li class="nav-item">
            <a class="nav-link trouble-link" id="boutonTrouble4">Bouton Trouble 4</a>
        </li>
        <li class="nav-item">
            <a class="nav-link trouble-link" id="boutonTrouble5">Bouton Trouble 5</a>
        </li>
        <!-- Ajoutez d'autres boutons si nécessaire -->
    </ul>
</section>


<section class="main-content">
    <!-- Contenu des articles -->
<section id="articleTrouble1" class="article">
    <div class="col-md-11">
        <h2 class="text-center">Titre de l'article Trouble 1</h2>
    </div>
        <div class="row">
            <div class="col-md-5">
                <img src="<?php echo get_template_directory_uri(); ?>/img/acTrois.png" alt="Image 1"  class="img-fluid">
            </div>
            <div class="col-md-4 text-article">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi molestiae sed vero quae eligendi delectus voluptates impedit obcaecati dolor ipsum excepturi rem, assumenda libero pariatur iste reiciendis quidem sunt veritatis!</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6 text-article">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem ducimus totam quod atque rerum temporibus nam neque, officia id obcaecati assumenda libero ratione corrupti quae minus eos iure quas omnis!</p>
            </div>
            <div class="col-md-6">
                <img src="<?php echo get_template_directory_uri(); ?>/img/acTrois.png" alt="Image 2"  class="img-fluid">
                <button>Contactez un professionnel de la santé</button>
            </div>
        </div>
        
        <div class="carré"></div>

        
</section>

<section id="articleTrouble2" class="article">
    <h2>Article Trouble 2</h2>
    <p>Contenu de l'article Trouble 2</p>
</section>

<section id="articleTrouble3" class="article">
    <h2>Article Trouble 3</h2>
    <p>Contenu de l'article Trouble 3</p>
</section>

<section id="articleTrouble4" class="article">
    <h2>Article Trouble 4</h2>
    <p>Contenu de l'article Trouble 4</p>
</section>

<section id="articleTrouble5" class="article">
    <h2>Article Trouble 5</h2>
    <p>Contenu de l'article Trouble 5</p>
</section>
</section>
<?php get_footer(); ?>