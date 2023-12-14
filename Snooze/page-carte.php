<?php get_header(); ?>

<section class="main-content">
    <h1 class="text-center animate-de-haut porto">Cliquez sur un continent!</h1>
    <div class="carte-container animate-de-bas">
        <!-- Remplacer 'path/to/your/svgfile.svg' par le chemin réel vers votre fichier SVG -->
        <object type="image/svg+xml" data="<?php echo get_template_directory_uri(); ?>/img/Carte.svg" id="carte-du-monde"></object>
    </div>
</section>

<section id="pays">
    <!-- Section pour l'Asie -->
    <div id="info-asie" class="info-continent">
        <!-- Asie -->
        <div class="slider">
            <!-- List Items -->
            <div class="list">
                <div class="item active">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img4.jpg">
                    <div class="content">
                        <h2>Tokyo</h2>
                        <p>Les habitants de Tokyo ont des journées de travail longues et stressantes, ce qui conduit souvent à des habitudes de sommeil plus courtes. La sieste au bureau ou dans les transports en commun, connue sous le nom de "inemuri", est socialement acceptée.</p>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img5.jpg">
                    <div class="content">
                        <h2>Bangkok</h2>
                        <p>À Bangkok, la vie nocturne animée et les températures élevées influencent les habitudes de sommeil. Beaucoup de gens préfèrent rester éveillés tard et prendre des siestes pendant les heures les plus chaudes de la journée.</p>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img6.jpg">
                    <div class="content">
                        <h2>Séoul</h2>
                        <p>Séoul est une ville qui ne dort jamais, avec des horaires de travail exigeants et une culture de divertissement nocturne. Cela conduit souvent à des heures de sommeil irrégulières et plus courtes parmi ses habitants.</p>
                    </div>
                </div>
                <!-- Ajouter d'autres villes d'Asie ici avec le même format -->
            </div>
            <!-- Boutons de navigation -->
            <div class="arrows">
                <button id="prev"><</button>
                <button id="next">></button>
            </div>
            <!-- Miniatures -->
            <div class="thumbnail">
                <div class="item active">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img4.jpg">
                    <div class="content">
                        Tokyo
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img5.jpg">
                    <div class="content">
                    Bangkok
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img6.jpg">
                    <div class="content">
                    Séoul
                    </div>
                </div>
                <!-- Ajouter d'autres miniatures d'Asie ici avec le même format -->
            </div>
        </div>
    </div>

    <!-- Section pour l'Afrique -->
    <div id="info-afrique" class="info-continent">
        <!-- Afrique -->
        <div class="slider">
            <!-- List Items -->
            <div class="list">
                <div class="item active">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img7.jpg">
                    <div class="content">
                        <h2>Le Caire</h2>
                        <p>Dans cette ville animée, il n'est pas rare de voir des activités nocturnes florissantes. Les Cairottes ont tendance à se coucher tard, surtout en été.</p>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img8.jpg">
                    <div class="content">
                        <h2>Lagos</h2>
                        <p>À Lagos, les embouteillages et les longs trajets influencent les habitudes de sommeil. Beaucoup de gens se lèvent tôt et rentrent tard, ce qui réduit les heures de sommeil la nuit.</p>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img9.jpg">
                    <div class="content">
                        <h2>Nairobi</h2>
                        <p>À Nairobi, les habitants ont généralement un mode de vie actif. Les heures de coucher peuvent varier, mais il y a une tendance à respecter un cycle de sommeil régulier.</p>
                    </div>
                </div>
                <!-- Ajouter d'autres villes d'Afrique ici avec le même format -->
            </div>
            <!-- Boutons de navigation -->
            <div class="arrows">
                <button id="prev"><</button>
                <button id="next">></button>
            </div>
            <!-- Miniatures -->
            <div class="thumbnail">
                <div class="item active">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img7.jpg">
                    <div class="content">
                        Le Caire
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img8.jpg">
                    <div class="content">
                    Lagos
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img9.jpg">
                    <div class="content">
                    Nairobi
                    </div>
                </div>
                <!-- Ajouter d'autres miniatures d'Afrique ici avec le même format -->
            </div>
        </div>
    </div>


        <!-- Section pour l'Amérique -->
        <div id="info-amerique" class="info-continent">
        <!-- Amérique -->
        <div class="slider">
            <!-- List Items -->
            <div class="list">
                <div class="item active">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img10.jpg">
                    <div class="content">
                        <h2>Toronto</h2>
                        <p>À Toronto, les habitudes de sommeil tendent à suivre un schéma plus conventionnel, avec des heures de coucher et de lever régulières, en partie en raison du rythme de vie et du climat.</p>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img11.jpg">
                    <div class="content">
                        <h2>Lima</h2>
                        <p>À Lima, les habitudes de sommeil sont influencées par le rythme de vie urbain. Les habitants peuvent avoir des heures de sommeil irrégulières, en particulier ceux qui travaillent de longues heures ou ont de longs trajets.</p>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img12.jpg">
                    <div class="content">
                        <h2>Mexico</h2>
                        <p>À Mexico, la sieste de l'après-midi, ou "siesta", est une tradition qui perdure, bien qu'elle soit moins courante en milieu urbain. Les habitants ont tendance à prendre des siestes courtes en début d'après-midi.</p>
                    </div>
                </div>
                <!-- Ajouter d'autres villes d'Amérique ici avec le même format -->
            </div>
            <!-- Boutons de navigation -->
            <div class="arrows">
                <button id="prev"><</button>
                <button id="next">></button>
            </div>
            <!-- Miniatures -->
            <div class="thumbnail">
                <div class="item active">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img10.jpg">
                    <div class="content">
                        Toronto
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img11.jpg">
                    <div class="content">
                    Lima
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img12.jpg">
                    <div class="content">
                    Mexico
                    </div>
                </div>
                <!-- Ajouter d'autres miniatures d'Amérique ici avec le même format -->
            </div>
        </div>
    </div>


        <!-- Section pour l'Océanie -->
        <div id="info-oceanie" class="info-continent">
        <!-- Océanie -->
        <div class="slider">
            <!-- List Items -->
            <div class="list">
                <div class="item active">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img13.jpg">
                    <div class="content">
                        <h2>Sydney</h2>
                        <p>Les résidents de Sydney ont généralement un mode de vie sain et un équilibre travail-vie personnelle, favorisant des habitudes de sommeil régulières.</p>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img14.jpg">
                    <div class="content">
                        <h2>Auckland</h2>
                        <p>À Auckland, les gens valorisent un sommeil de qualité et profitent de la nature environnante pour se détendre, contribuant à de bonnes habitudes de sommeil.</p>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img15.jpg">
                    <div class="content">
                        <h2>Suva</h2>
                        <p>Les habitants de Suva adoptent souvent un mode de vie détendu et insulaire, avec des siestes courtes pendant la journée et des heures de sommeil régulières la nuit.</p>
                    </div>
                </div>
                <!-- Ajouter d'autres villes d'Océanie ici avec le même format -->
            </div>
            <!-- Boutons de navigation -->
            <div class="arrows">
                <button id="prev"><</button>
                <button id="next">></button>
            </div>
            <!-- Miniatures -->
            <div class="thumbnail">
                <div class="item active">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img13.jpg">
                    <div class="content">
                        Sydney
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img14.jpg">
                    <div class="content">
                    Auckland
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img15.jpg">
                    <div class="content">
                    Suva
                    </div>
                </div>
                <!-- Ajouter d'autres miniatures d'Océanie ici avec le même format -->
            </div>
        </div>
    </div>



    <section id="pays">
    <!-- Section pour l'Europe -->
    <div id="info-europe" class="info-continent">
        <!-- Europe -->
        <div class="slider">
            <!-- List Items -->
            <div class="list">
                <div class="item active">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img1.jpg">
                    <div class="content">
                        <h2>Paris</h2>
                        <p>À Paris, les gens ont tendance à se coucher un peu plus tard par rapport à d'autres villes européennes, souvent autour de minuit ou même plus tard, en particulier les jeunes et les travailleurs du secteur des services. La vie nocturne animée et la culture des cafés contribuent à des soirées prolongées. Cependant, beaucoup de Parisiens se lèvent tôt pour se rendre au travail, ce qui signifie qu'ils valorisent un sommeil de qualité, bien que ce soit parfois pour une durée plus courte.</p>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img3.jpg">
                    <div class="content">
                        <h2>Barcelone</h2>
                        <p>Barcelone est connue pour son mode de vie détendu et ses habitudes tardives. Les habitants de la ville ont souvent des dîners tardifs, vers 21 heures ou plus tard, ce qui retarde l'heure du coucher.</p>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img2.jpg">
                    <div class="content">
                        <h2>Bruxelles</h2>
                        <p>À Bruxelles, les habitudes de sommeil sont généralement plus conformes à un horaire de travail standard. Beaucoup de Bruxellois se couchent entre 22 heures et minuit. Avec une culture de travail importante et une présence significative d'institutions européennes, les habitants tendent à favoriser un sommeil réparateur pour être productifs le jour suivant. Les week-ends peuvent voir des horaires plus détendus, avec des soirées prolongées et des grasses matinées.</p>
                    </div>
                </div>
                <!-- Ajouter d'autres villes d'Europe ici avec le même format -->
            </div>
            <!-- Boutons de navigation -->
            <div class="arrows">
                <button id="prev"><</button>
                <button id="next">></button>
            </div>
            <!-- Miniatures -->
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
                <!-- Ajouter d'autres miniatures d'Europe ici avec le même format -->
            </div>
        </div>
    </div>


</section>

<?php get_footer(); ?>