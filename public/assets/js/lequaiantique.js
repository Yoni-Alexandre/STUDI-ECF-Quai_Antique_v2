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

