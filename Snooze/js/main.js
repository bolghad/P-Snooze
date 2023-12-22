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
    const hour = now.getHours();



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












//page troubles et guides et pro

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
        var hoverColor = '#42596f';
        var selectedColor = '#e5dbd5';
        var originalColor = '#0e2338'; // La couleur originale définie par .cls-1

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
                continentEl.style.cursor = 'pointer';
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






document.addEventListener('DOMContentLoaded', (event) => {
    // Vérifiez si le modal a déjà été affiché durant cette session
    if (!sessionStorage.getItem('modalShown')) {
        $('#modalCookies').modal({
            backdrop: false, // Désactive le fond sombre
            keyboard: false, // Désactive la fermeture avec la touche ESC
            focus: true // Focus sur le modal
        });
        $('#modalCookies').modal('show');

        // Marquez que le modal a été affiché pour cette session
        sessionStorage.setItem('modalShown', 'true');
    }

    // Vérifiez si le modal a été accepté/refusé dans le passé
    if (localStorage.getItem('modalAcceptedOrRefused')) {
        // Ne pas montrer le modal
        return;
    }
});

// Pour fermer le modal après acceptation ou refus
$('.btn-secondary, .btn-primary').click(function(){
    $('#modalCookies').modal('hide');
    // Marquez que le modal a été accepté ou refusé
    localStorage.setItem('modalAcceptedOrRefused', 'true');
});








// Pop up professionnels 

document.addEventListener('DOMContentLoaded', () => {
    // Afficher le pop-up
    document.querySelectorAll('.btn-contact').forEach(btn => {
        btn.addEventListener('click', (e) => {
            const targetId = btn.getAttribute('data-target');
            const popup = document.querySelector(targetId);
            popup.style.display = 'block';
        });
    });

    // Fermer le pop-up
    document.querySelectorAll('.close-btn').forEach(btn => {
        btn.addEventListener('click', (e) => {
            const popup = btn.closest('.popup-container');
            popup.style.display = 'none';
        });
    });
});











// Page carnet

document.addEventListener('DOMContentLoaded', function() {
    var currentDate = new Date();
    var currentMonth = currentDate.getMonth();
    var currentYear = currentDate.getFullYear();
    var monthNames = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin",
                      "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];

    function updateCalendar(month, year) {
        var firstDay = new Date(year, month, 1);
        var lastDay = new Date(year, month + 1, 0);

        var htmlContent = "<table class='calendar-table'>";
        htmlContent += "<thead><tr>";
        // Entêtes de jours
        for (var i = 0; i < 7; i++) {
            htmlContent += "<th>" + "DLMMJVS"[i] + "</th>";
        }
        htmlContent += "</tr></thead><tbody>";

        // Remplit les jours vides de la première semaine
        var dayOfWeek = firstDay.getDay();
        dayOfWeek = dayOfWeek === 0 ? 7 : dayOfWeek; // Ajustement pour commencer la semaine le lundi
        for (var i = 1; i < dayOfWeek; i++) {
            htmlContent += "<td></td>";
        }

        var dayCounter = 1;
        while (dayCounter <= lastDay.getDate()) {
            if (dayOfWeek === 1) {
                htmlContent += "<tr>"; // Commence une nouvelle ligne chaque lundi
            }

            htmlContent += "<td>" + dayCounter + "</td>";
            if (dayOfWeek === 7) {
                htmlContent += "</tr>"; // Termine la ligne chaque dimanche
                dayOfWeek = 0;
            }

            dayCounter++;
            dayOfWeek++;
        }

        // Remplit les jours vides de la dernière semaine
        if (dayOfWeek !== 1) {
            for (var i = dayOfWeek; i <= 7; i++) {
                htmlContent += "<td></td>";
            }
            htmlContent += "</tr>";
        }
        htmlContent += "</tbody></table>";

        document.getElementById('calendar').innerHTML = htmlContent;
        document.getElementById('calendar-month').textContent = monthNames[month] + " " + year;
    }

    function navigateMonth(direction) {
        currentMonth += direction;
        if (currentMonth < 0) {
            currentMonth = 11;
            currentYear--;
        } else if (currentMonth > 11) {
            currentMonth = 0;
            currentYear++;
        }
        updateCalendar(currentMonth, currentYear);
    }

    // Bouton mois précédent
    document.getElementById('prev-month').addEventListener('click', function() {
        navigateMonth(-1);
    });

    // Bouton mois suivant
    document.getElementById('next-month').addEventListener('click', function() {
        navigateMonth(1);
    });

    // Affiche le calendrier actuel lors du chargement initial
    updateCalendar(currentMonth, currentYear);
});




//graph
document.addEventListener('DOMContentLoaded', function () {
    // Doughnut Chart, vous l'avez déjà donc je ne le change pas
    const doughnutChartCtx = document.getElementById('myDoughnutChart').getContext('2d');
    const doughnutChartData = {
        labels: ['gain', 'initial'],
        datasets: [{
            label: 'My First Dataset',
            data: [25, 75],
            backgroundColor: ['#a1acb7', '#0e2338'],
            hoverOffset: 4
        }]
    };
    const doughnutChart = new Chart(doughnutChartCtx, {
        type: 'doughnut',
        data: doughnutChartData
    });

    // Bar Chart
    const barChartCtx = document.getElementById('myBarChart').getContext('2d');
    const barChartData = {
        labels: ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin'],
        datasets: [{
            label: 'Moyenne de sommeil',
            data: [200, 250, 300, 250, 220, 210],
            backgroundColor: '#0e2338',
            borderColor: '#a1acb7',
            borderWidth: 1
        }]
    };
    const barChart = new Chart(barChartCtx, {
        type: 'bar',
        data: barChartData,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Line Chart
    const lineChartCtx = document.getElementById('myLineChart').getContext('2d');
    const lineChartData = {
        labels: ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin'],
        datasets: [{
            label: 'Moyenne de sommeil',
            data: [5000, 6000, 5500, 4500, 4000, 6500],
            fill: false,
            borderColor: '#0e2338',
            tension: 0.1
        }]
    };
    const lineChart = new Chart(lineChartCtx, {
        type: 'line',
        data: lineChartData,
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


  

