<?php get_header(); ?>

<section class="main-content">
<h1 class="text-center animate-de-haut">Cliquez sur un continent!</h1>
    <div class="carte-container animate-de-bas">
        <!-- Remplacer 'path/to/your/svgfile.svg' par le chemin réel vers votre fichier SVG -->
        <object type="image/svg+xml" data="<?php echo get_template_directory_uri(); ?>/img/carte.svg" id="carte-du-monde"></object>
    </div>
</section>

<section id="pays">
    <!-- Sections pour chaque continent -->
    <div id="info-europe" class="info-continent">

    <div class="slider">
        <!-- list Items -->
        <div class="list">
            <div class="item active">
                <img src="<?php echo get_template_directory_uri(); ?>/img/img1.jpg">
                <div class="content">
                    
                    <h2>Paris</h2>
                    <p>
                    À Paris, les gens ont tendance à se coucher un peu plus tard par rapport à d'autres villes européennes, souvent autour de minuit ou même plus tard, en particulier les jeunes et les travailleurs du secteur des services. La vie nocturne animée et la culture des cafés contribuent à des soirées prolongées. Cependant, beaucoup de Parisiens se lèvent tôt pour se rendre au travail, ce qui signifie qu'ils valorisent un sommeil de qualité, bien que ce soit parfois pour une durée plus courte.
                    </p>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/img3.jpg">
                <div class="content">
                    
                    <h2>Barcelone</h2>
                    <p>
                    Barcelone est connue pour son mode de vie détendu et ses habitudes tardives. Les habitants de la ville ont souvent des dîners tardifs, vers 21 heures ou plus tard, ce qui retarde l'heure du coucher. Il n'est pas rare que les gens se couchent après minuit, surtout pendant les mois chauds. La sieste de l'après-midi, bien que moins courante aujourd'hui, existe toujours parmi certains résidents, particulièrement pendant les chaudes journées d'été.
                    </p>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/img2.jpg">
                <div class="content">
                    
                    <h2>Bruxelles</h2>
                    <p>
                    À Bruxelles, les habitudes de sommeil sont généralement plus conformes à un horaire de travail standard. Beaucoup de Bruxellois se couchent entre 22 heures et minuit. Avec une culture de travail importante et une présence significative d'institutions européennes, les habitants tendent à favoriser un sommeil réparateur pour être productifs le jour suivant. Les week-ends peuvent voir des horaires plus détendus, avec des soirées prolongées et des grasses matinées.
                    </p>
                </div>
            </div>
        </div>
        <!-- button arrows -->
        <div class="arrows">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
        <!-- thumbnail -->
        <div class="thumbnail">
            <div class="item active">
                <img src="<?php echo get_template_directory_uri(); ?>/img/img1.jpg">
                <div class="content">
                    Paris
                </div>
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/img3.jpg">
                <div class="content">
                    Barcelone
                </div>
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/img2.jpg">
                <div class="content">
                    Bruxelles
                </div>
            </div>
        </div>
    </div>

    </div>
    <div id="info-asie" class="info-continent">Contenu pour l'Asie</div>
    <div id="info-afrique" class="info-continent">Contenu pour l'Afrique</div>
    <div id="info-amerique" class="info-continent">Contenu pour l'Amérique</div>
    <div id="info-oceanie" class="info-continent">Contenu pour l'Océanie</div>

</section>

<?php get_footer(); ?>
