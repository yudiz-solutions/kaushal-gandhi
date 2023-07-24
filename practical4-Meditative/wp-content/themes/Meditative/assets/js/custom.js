$(document).ready(function() {
  $(".slides").slick({
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow: $(".left-arrow"),
    nextArrow: $(".right-arrow"),
    // autoplay: true,
    // autoplaySpeed: 2000,
  });
});
$(document).ready(function() {
  $(".class-stories").slick({
    dots: true,
    arrows: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    // autoplay: true,
    // autoplaySpeed: 2000,
    responsive: [{
        breakpoint: 575,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
    ],
  });
});

new WOW().init();
    $(document).ready(function($) {
      $(".nav-menu").click(function() {
        $(".navigation-menu").slideToggle();
      });
    });