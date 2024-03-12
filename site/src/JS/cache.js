
// Fonction pour vérifier la visibilité des éléments
function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Fonction pour gérer l'affichage progressif des divs au scroll
function handleScrollAnimations() {
    $('.card').each(function() {
        if (isElementInViewport(this)) {
            $(this).removeClass('cache').addClass('visible');
        }
    });
}

// Appeler la fonction handleScrollAnimations lors du chargement de la page
handleScrollAnimations();

// Appeler la fonction handleScrollAnimations chaque fois que la page est défilée
$(window).on('scroll', function() {
    handleScrollAnimations();
});
