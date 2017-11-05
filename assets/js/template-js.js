/**
 * Created by Plamen on 30.10.2017 г..
 */

// Show - Hide navbar - > ScrollDown
$(document).ready(function () {

    var x = document.getElementById("myCarousel").clientHeight;

    // Променя border - navbar
    $(window).scroll(function () {

        if ($(window).scrollTop() >= (x - 45)) {

            $('#main-nav').addClass('changednav').fadeIn("slow");

        } else {

            $('#main-nav').removeClass('changednav');

        }
    });

    // Hide #gohome for small devices
    $(window).scroll(function () {
        if (($(this).width() < 480) || ($(window).scrollTop() <= (x - 45))) {

            $('#gohome').hide();

        } else {

            $('#gohome').show();
            // Change color in footer
            if ((($(window).scrollTop() + x) >= (document.body.scrollHeight - 250))) {
                $('#gohome').addClass('home-down');
            } else {
                $('#gohome').removeClass('home-down');

            }

        }
    });

});

$(document).ready(function () {
    // Add smooth scrolling to all links in navbar + footer link
    $(".navbar a, #gohome a ,footer a[href='#myPage']").on('click', function (event) {

        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 900, function () {

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
        });
    });
});
// ------------------ Animation ----------------------------
$(window).scroll(function () {
    $(".slideanim").each(function () {
        var pos = $(this).offset().top;

        var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
            $(this).addClass("slide");
        }
    });
});
// -------------- ScrollReveal ----------------
window.sr = ScrollReveal();
sr.reveal('#images-about, #images-pool, #images-restaurant,#images-bar', {duration: 2000});
