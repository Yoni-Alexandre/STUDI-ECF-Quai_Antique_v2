// ************************************************************************************************
// START - PAGE D'ACCUEIL
// ************************************************************************************************
// Animation de la page d'accueil / galerie d'images
// Récupération de tous les éléments "col-md-4"
const images = document.querySelectorAll(".col-md-4");

// Boucle sur chaque élément "col-md-4"
images.forEach((image) => {
    // Récupération de l'élément "title"
    const title = image.querySelector("title");

    // Récupération de l'élément "svg"
    const svg = image.querySelector("svg");

    // Ajout d'un écouteur d'événement "mouseover" sur l'élément "svg"
    svg.addEventListener("mouseover", () => {
        // Rotation de 180 degrés de l'élément "svg"
        svg.style.transform = "rotateY(180deg)";

        // Affichage du titre de l'image
        title.style.display = "block";
    });

    // Ajout d'un écouteur d'événement "mouseout" sur l'élément "svg"
    svg.addEventListener("mouseout", () => {
        // Rotation de 180 degrés de l'élément "svg"
        svg.style.transform = "rotateY(0deg)";

        // Masquage du titre de l'image
        title.style.display = "none";
    });
});
// ************************************************************************************************
// END - PAGE D'ACCUEIL
// ************************************************************************************************

// ************************************************************************************************
// START - PAGE MENUS
// ************************************************************************************************
// Animation de rebond au survol de la souris, sur les "cards Bootstrap" de la page Menus
// Utilisation de la classe d'animation animate.css
const cardsMenu = document.querySelectorAll('.card');
cardsMenu.forEach(card => {
    card.addEventListener('mouseenter', () => {
        card.classList.add('animate__animated', 'animate__bounce');
    });

    card.addEventListener('mouseleave', () => {
        card.classList.remove('animate__animated', 'animate__bounce');
    });
});

// Animation de la page "La carte"
// Sélection de la classe "animation-card"
const cards = document.querySelectorAll('.animation-card');

// boucle sur chaque carte
cards.forEach((card, index) => {
    // Exécute la fonction après un certain délai
    setTimeout(() => {
        // Ajoute une classe d'animation de fadeIn
        card.classList.add('animate__animated', 'animate__fadeIn');
        // Délai progressif pour chaque carte
    }, 600 * index);
});
// ************************************************************************************************
// END - PAGE MENUS
// ************************************************************************************************


