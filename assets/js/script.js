/* Set Active Class on Navbar */
window.onload = activeClass(window.location.href.split('/').pop());

function activeClass(url) {
    if (url == "") {
        document.querySelector("#nav-home").classList.add("active");
    } else if (url.startsWith('about') == true) {
        document.querySelector("#nav-about").classList.add("active");
    } else if (url.startsWith('lesson') == true) {
        document.querySelector("#nav-lessons").classList.add("active");
    } else if (url.startsWith('intro') == true) {
        document.querySelector("#nav-lessons").classList.add("active");
    } else if (url.startsWith('category') == true) {
        document.querySelector("#nav-lessons").classList.add("active");
    }
}

/* Support TouchScreen Swipe in Carousel */
$(document).ready(function () {

    // Carousel

    $(".carousel").carousel({
        interval: false,
        pause: true
    });

    $(".carousel .carousel-inner").swipe({
        swipeLeft: function (event, direction, distance, duration, fingerCount) {
            this.parent().carousel('next');
        },
        swipeRight: function () {
            this.parent().carousel('prev');
        },
        threshold: 0,
        tap: function (event, target) {
            window.location = $(this).find('.carousel-item.active a').attr('href');
        },
        excludedElements: "label, button, input, select, textarea, .noSwipe"
    });

    $('.carousel .carousel-inner').on('dragstart', 'a', function () {
        return false;
    });

}); */