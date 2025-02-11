// Écouteur d'événement pour s'assurer que le DOM est chargé avant d'exécuter le script
document.addEventListener('DOMContentLoaded', function () {

  
    const splide = new Splide('.splide', {
        type       : 'loop',           // Effet de transition entre les slides (fade)
        heightRatio: 0.5,              // Ratio de hauteur du slider
        perPage    : 1,                // Affichage d'un slide à la fois
        pagination: false,             // Désactive la pagination (les numéros de page)
        arrows     : true,            // Désactive les flèches de navigation
        autoplay  : true,              // Active la lecture automatique
    }).mount();                        // Montage du slider pour qu'il soit fonctionnel

    // Fonction qui met à jour le texte basé sur l'attribut 'data-text' du slide actuel
    function updateText(slide) {
        const slideElement = slide.slide; // Accède à l'élément DOM du slide
        const text = slideElement.getAttribute('data-text'); // Récupère l'attribut 'data-text' du slide
        const textElement = document.getElementById('slide-text'); // Trouve l'élément HTML où afficher le texte
        textElement.textContent = text; // Met à jour le texte de l'élément avec le texte récupéré
    }

    // Écouteur d'événement pour détecter le changement de slide dans le slider
    splide.on('move', function (index) {
        const slide = splide.Components.Slides.getAt(index); // Récupère le slide actuel à l'index spécifié
        updateText(slide); // Met à jour le texte pour le slide actuel
    });

    // Mettre à jour le texte lorsque le slider est initialisé et sur le premier slide
    const initialSlide = splide.Components.Slides.getAt(splide.index); // Récupère le premier slide du slider
    updateText(initialSlide); // Met à jour le texte avec celui du premier slide

});

