document.addEventListener('DOMContentLoaded', function () {
    var mobileMenuIcon = document.getElementById('burger-menu-icon');
    var mobileButtons = document.getElementById('mobile-buttons');

    mobileMenuIcon.addEventListener('click', function () {
        // Toggle l'affichage du menu mobile
        mobileButtons.classList.toggle('show-mobile');
    });
});




//Defilement
document.addEventListener('DOMContentLoaded', function() {
    const header = document.getElementById('site-header');
    let prevScrollPos = window.pageYOffset;
    const scrollThreshold = window.innerHeight * 0.7; // Ajustez le seuil de défilement ici (70vh)

    window.addEventListener('scroll', () => {
        const currentScrollPos = window.pageYOffset;

        if (currentScrollPos > scrollThreshold) {
            if (prevScrollPos > currentScrollPos) {
                // L'utilisateur fait défiler vers le haut, montrez le header
                header.style.top = '0';
            } else {
                // L'utilisateur fait défiler vers le bas, masquez le header
                header.style.top = '-100px'; // Vous pouvez ajuster cette valeur pour contrôler la hauteur du masquage
            }
        } else {
            // Le défilement est en haut de la page, montrez le header
            header.style.top = '0';
        }

        prevScrollPos = currentScrollPos;
    });
});







//Dégradé background

function generateGradient() {
    const now = new Date();
    //const hour = now.getHours();
    const hour =10;



    // Exemple de dégradés avec opacité à 85%
    const gradients = [
        ["#31485dd9", "#23394fd9", "#e5dbd5d9", "#ddd6d2d9"],
        ["#23394fd9", "#e5dbd5d9", "#ddd6d2d9", "#cfcccbd9"],
        ["#e5dbd5d9", "#ddd6d2d9", "#cfcccbd9", "#c8c7c8d9"],
        ["#ddd6d2d9", "#cfcccbd9", "#c8c7c8d9", "#bdbfc3d9"],
        ["#cfcccbd9", "#c8c7c8d9", "#bdbfc3d9", "#b3b8bfd9"],
        ["#c8c7c8d9", "#bdbfc3d9", "#b3b8bfd9", "#aeb5bdd9"],
        ["#bdbfc3d9", "#b3b8bfd9", "#aeb5bdd9", "#a5afb9d9"],
        ["#b3b8bfd9", "#aeb5bdd9", "#a5afb9d9", "#a5a7abd9"],
        ["#aeb5bdd9", "#a5afb9d9", "#a5a7abd9", "#aaa09cd9"],
        ["#a5afb9d9", "#a5a7abd9", "#aaa09cd9", "#af988ad9"],
        ["#a5a7abd9", "#aaa09cd9", "#af988ad9", "#b19381d9"],
        ["#aaa09cd9", "#af988ad9", "#b19381d9", "#a58d7fd9"],
        ["#af988ad9", "#b19381d9", "#a58d7fd9", "#98867dd9"],
        ["#b19381d9", "#a58d7fd9", "#98867dd9", "#897f7ad9"],
        ["#a58d7fd9", "#98867dd9", "#897f7ad9", "#7e7979d9"],
        ["#98867dd9", "#897f7ad9", "#7e7979d9", "#696d75d9"],
        ["#897f7ad9", "#7e7979d9", "#696d75d9", "#5c6773d9"],
        ["#7e7979d9", "#696d75d9", "#5c6773d9", "#526172d9"],
        ["#696d75d9", "#5c6773d9", "#526172d9", "#4b5e70d9"],
        ["#5c6773d9", "#526172d9", "#4b5e70d9", "#41586ed9"],
        ["#526172d9", "#4b5e70d9", "#41586ed9", "#374d63d9"],
        ["#4b5e70d9", "#41586ed9", "#374d63d9", "#31485dd9"],
        ["#41586ed9", "#374d63d9", "#31485dd9", "#23394fd9"],
        ["#374d63d9", "#31485dd9", "#23394fd9", "#e5dbd5d9"],
     
    ];

    // Récupérer le dégradé pour l'heure actuelle
    const currentGradient = gradients[hour];

    // Vérifier si le dégradé actuel est défini
    if (currentGradient) {
        // Remplacez les valeurs hexadécimales par les couleurs définies par l'utilisateur
        const gradient = currentGradient.map(color => `${color}`).join(', ');

        document.body.style.background = `linear-gradient(to bottom, ${gradient})`;
    }
}

// Appeler la fonction au chargement de la page
generateGradient();










//page troubles et guides

// JavaScript
document.addEventListener('DOMContentLoaded', function () {
    // Récupère tous les boutons et articles
    var boutons = document.querySelectorAll('.nav-link');
    var articles = document.querySelectorAll('.article');

    // Associe un gestionnaire d'événements à chaque bouton
    boutons.forEach(function (bouton, index) {
        bouton.addEventListener('click', function () {
            // Retire la classe 'active' de tous les boutons et articles
            boutons.forEach(function (b) {
                b.classList.remove('active');
            });
            articles.forEach(function (a) {
                a.classList.remove('active');
            });

            // Ajoute la classe 'active' au bouton et à l'article correspondant
            bouton.classList.add('active');
            articles[index].classList.add('active');
        });
    });
});




 //Page carte

 document.addEventListener('DOMContentLoaded', function() {
    var svgObject = document.getElementById('carte-du-monde');
    svgObject.addEventListener('load', function() {
        var svgDoc = svgObject.contentDocument;

        // Définir les couleurs
        var hoverColor = '#f0e2a8';
        var selectedColor = '#08071d';
        var originalColor = '#0f2338'; // La couleur originale définie par .cls-1

        var selectedContinent = null; // Pour garder une trace du continent sélectionné

        // Fonction pour masquer toutes les sections et réinitialiser les couleurs des continents
        function hideAllSectionsAndResetContinents() {
            document.querySelectorAll('.info-continent').forEach(function(el) {
                el.style.display = 'none';
            });

            var continents = svgDoc.querySelectorAll('.cls-1');
            continents.forEach(function(el) {
                el.style.fill = originalColor;
                el.classList.remove('continent-selected');
            });

            selectedContinent = null; // Réinitialiser le continent sélectionné
        }

        // Ajout des gestionnaires de clic et hover pour chaque continent
        var continentIds = ['europe', 'asie', 'afrique', 'amerique', 'oceanie'];
        continentIds.forEach(function(continentId) {
            var continentEl = svgDoc.getElementById(continentId);
            var paths = continentEl.querySelectorAll('.cls-1'); // Sélection de tous les chemins dans le continent

            // Gestionnaire de survol
            continentEl.addEventListener('mouseover', function() {
                if (selectedContinent !== continentEl) {
                    paths.forEach(function(path) {
                        path.style.fill = hoverColor;
                    });
                }
            });

            // Gestionnaire de sortie de survol
            continentEl.addEventListener('mouseout', function() {
                paths.forEach(function(path) {
                    if (!path.classList.contains('continent-selected')) {
                        path.style.fill = originalColor;
                    }
                });
            });

            // Gestionnaire de clic
            continentEl.addEventListener('click', function() {
                hideAllSectionsAndResetContinents();
                document.getElementById('info-' + continentId).style.display = 'block';
                paths.forEach(function(path) {
                    path.style.fill = selectedColor;
                    path.classList.add('continent-selected');
                });
                selectedContinent = continentEl; // Mettre à jour le continent sélectionné

                var nextSection = svgObject.closest('section').nextElementSibling;

                // Faire défiler jusqu'à la prochaine section
                if (nextSection) {
                    nextSection.scrollIntoView({ behavior: 'smooth' });
                }
            
            });
        });
    });
});







//Loading bar 

document.addEventListener('DOMContentLoaded', function() {
    const loadingBar = document.getElementById('loading-bar');
    const currentTimeDisplay = document.getElementById('current-time');

    const currentTime = new Date();
    const hours = currentTime.getHours();
    const minutes = currentTime.getMinutes();
    const totalMinutesInHour = 60;
    const totalHoursInDay = 24;

    const progress = (hours / totalHoursInDay) * 100 + (minutes / totalMinutesInHour / totalHoursInDay) * 100;

    loadingBar.style.height = `${progress}%`;

    const progressHeight = loadingBar.style.height;
    const currentTimeHeight = (parseInt(progressHeight) - 5) + '%'; // Décalage de 3%

    currentTimeDisplay.innerText = `${hours}h${minutes}`;
    currentTimeDisplay.style.top = currentTimeHeight;
});












// Fonction générique pour le carousel
function setupCarousel(sectionId) {
    let items = document.querySelectorAll(`#${sectionId} .slider .list .item`);
    let next = document.querySelector(`#${sectionId} .arrows #next`);
    let prev = document.querySelector(`#${sectionId} .arrows #prev`);
    let thumbnails = document.querySelectorAll(`#${sectionId} .thumbnail .item`);

    // config param
    let countItem = items.length;
    let itemActive = 0;

    // event next click
    next.onclick = function() {
        itemActive = itemActive + 1;
        if (itemActive >= countItem) {
            itemActive = 0;
        }
        showSlider();
    }

    // event prev click
    prev.onclick = function() {
        itemActive = itemActive - 1;
        if (itemActive < 0) {
            itemActive = countItem - 1;
        }
        showSlider();
    }

    // Function to show the active slider
    function showSlider() {
        // remove item active old
        let itemActiveOld = document.querySelector(`#${sectionId} .slider .list .item.active`);
        let thumbnailActiveOld = document.querySelector(`#${sectionId} .thumbnail .item.active`);
        itemActiveOld.classList.remove('active');
        thumbnailActiveOld.classList.remove('active');

        // active new item
        items[itemActive].classList.add('active');
        thumbnails[itemActive].classList.add('active');
    }

    // click thumbnail
    thumbnails.forEach((thumbnail, index) => {
        thumbnail.addEventListener('click', () => {
            itemActive = index;
            showSlider();
        })
    });
}

// Appel de la fonction pour chaque section continentale
setupCarousel('info-europe');
setupCarousel('info-asie');
setupCarousel('info-afrique');
setupCarousel('info-amerique');
setupCarousel('info-oceanie');


  














