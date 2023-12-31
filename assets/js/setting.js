// Header Fixed
var headerwrap = jQuery(".header-wrap");
jQuery(window).on("scroll", function () {
  if (jQuery(this).scrollTop() > 0) {
    headerwrap.addClass("sticky");
  } else {
    headerwrap.removeClass("sticky");
  }
});

jQuery(document).ready(function () {
  var headerwrap = jQuery(".header-wrap");

  // toggle Menu

  jQuery(".menu-toggle").on("click", function () {
    jQuery(".header-content").toggleClass("menu-active");
  });

  // Background image
  jQuery(".bg_img").each(function (i, elem) {
    var img = $(elem);
    jQuery(this).hide();
    jQuery(this)
      .parent()
      .css({
        background:
          "url(" + img.attr("src") + ") no-repeat no-repeat center center",
      });
  });

  // Mobile Submenu
  jQuery(".menu-arrow").on("click", function () {
    jQuery(this).parents("li").siblings().find(".sub-menu").slideUp();
    jQuery(this).parents("li").find(".sub-menu").slideToggle();
  });
  jQuery(document).bind("click touchstart", function (e) {
    if ((jQuery(e.target).parents(".menu").length = 0))
      jQuery(".sub-menu").slideUp();
  });

  // Scroll Offset
  var headerheight = headerwrap.height();
  jQuery(".offset-top").on("click", function (e) {
    e.preventDefault();
    var target = jQuery(this).data("id");
    jQuery("html, body")
      .stop()
      .animate(
        {
          scrollTop: jQuery("#" + target).offset().top - (headerheight + 15),
        },
        1000,
        "swing",
        function () {}
      );
  });

  // SVG Create
  jQuery(function () {
    jQuery("img.svg").each(function () {
      var $img = jQuery(this);
      var imgID = $img.attr("id");
      var imgClass = $img.attr("class");
      var imgURL = $img.attr("src");
      jQuery.get(
        imgURL,
        function (data) {
          var $svg = jQuery(data).find("svg");
          if (typeof imgID !== "undefined") {
            $svg = $svg.attr("id", imgID);
          }
          if (typeof imgClass !== "undefined") {
            $svg = $svg.attr("class", imgClass + " replaced-svg");
          }
          $svg = $svg.removeAttr("xmlns:a");
          if (
            !$svg.attr("viewBox") &&
            $svg.attr("height") &&
            $svg.attr("width")
          ) {
            $svg.attr(
              "viewBox",
              "0 0 " + $svg.attr("height") + " " + $svg.attr("width")
            );
          }
          $img.replaceWith($svg);
        },
        "xml"
      );
    });
  });

  // Banner Slider
  jQuery(".banner-slider").slick({
    autoplay: true,
    autoplaySpeed: 5000,
    nextArrow: ".banner-next",
    prevArrow: ".banner-prev",
    // arrows: false,
    // fade: true,
    dots: false,
    adaptiveHeight: true,
  });

  // Client Logo Slider
  jQuery(".logo-slider ul").slick({
    autoplay: true,
    autoplaySpeed: 3000,
    slidesToShow: 5,
    slidesToScroll: 1,
    arrows: false,
    responsive: [
      {
        breakpoint: 1023,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
        },
      },
    ],
  });

  /* Header Hamburger */
  jQuery(".header-hamburger").click(function () {
    jQuery(this).toggleClass("active");
    jQuery(".header-right").toggleClass("active");
    jQuery("body").toggleClass("pause");
  });

  // Scroll To Section
  var target = window.location.hash;
  setTimeout(function () {
    if (target != "") {
      var $target = jQuery(target);
      jQuery("html, body").animate(
        {
          scrollTop: jQuery(target).offset().top - 85,
        },
        1000
      );
    }
  });
  // TESTIMONIAL SLIDER
  $(".testimonial-slider").slick({
    infinite: false,
    speed: 300,
    slidesToShow: 2,
    slidesToScroll: 2,
    dots: false,
    prevArrow: $(".prev"),
    nextArrow: $(".next"),
    responsive: [
      {
        breakpoint: 1025,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          //dots: true,
        },
      },
    ],
  });
  // OUR VALUES SLIDER
  $(".value-card-slider").slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    prevArrow: $(".prev"),
    nextArrow: $(".next"),
    responsive: [
      {
        breakpoint: 1025,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
        },
      },
      {
        breakpoint: 550,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
        },
      },
    ],
  });
});

// $('form[id="form"]').validate({
//   rules: {
//     name: "required",
//     message: {
//       required: true,
//     },
//     phone: "required",
//     email: {
//       required: true,
//       email: true,
//     },
//   },
//   messages: {
//     name: "This field is required",
//     cus_messages: "This field is required",
//     phone: "This field is required",
//     email: "Enter a valid email",
//     message: {
//       required: "Enter your message",
//     },
//   },
//   submitHandler: function (form) {
//     form.submit();
//   },
// });

jQuery(document).ready(function () {
  jQuery(".testimonial-slider").slick({
    slidesToScroll: 2,
    arrows: true,
    infinite: true,
  });
});

jQuery(document).ready(function () {});
