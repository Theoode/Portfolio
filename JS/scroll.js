// scroll.js
$(document).ready(function(){
    // Ajoutez une animation de défilement fluide au clic sur la flèche
    $('a[href^="#"]').on('click',function (e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);

        // Animation de défilement
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 900, 'swing', function () {
            window.location.hash = target;
        });
    });
});
