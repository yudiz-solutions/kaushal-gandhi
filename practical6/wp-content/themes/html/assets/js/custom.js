if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
    var msViewportStyle = document.createElement('style');
    msViewportStyle.appendChild(
        document.createTextNode(
            '@-ms-viewport{width:auto!important}'
        )
    );
    document.querySelector('head').appendChild(msViewportStyle);
}
$(window).scroll(function() {
    if ($(this).scrollTop() > 1) {
        $('header').addClass("sticky-header");
    } else {
        $('header').removeClass("sticky-header");
    }
});
$(document).ready(function() {
    $('.home-slider').slick({
        fade: true
        // arrows: false,
    });
});
$(".assessment-section").stick_in_parent();