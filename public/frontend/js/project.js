$(document).ready(function ($) {
  $(".project_ad").slick({
    arrows: 1,
    slidesToScroll: 1,
    dots: true,
    cssEase: "ease-out",
    autoplay: true,
    autoplaySpeed: 5000,
  });

  $(".project_description").slick({
    arrows: 1,
    slidesToScroll: 1,
    dots: true,
    cssEase: "ease-out",
    autoplay: true,
    autoplaySpeed: 5000,
  });

  $(".ad_images3").slick({
    arrows: 1,
    dots: true,
    slidesToScroll: 1,
    cssEase: "ease-out",
    autoplay: true,
  });

  $(".ad_panel_3").slick({
    arrows: 1,
    dots: true,
    slidesToScroll: 1,
    cssEase: "ease-out",
    autoplay: true,
  });

  $(".ad_panel_4").slick({
    arrows: 1,
    dots: true,
    slidesToScroll: 1,
    cssEase: "ease-out",
    autoplay: true,
  });

  $(".sample_product").slick({
    arrows: 1,
    slidesToShow: 3,
    cssEase: "ease-out",
    autoplay: true,
  });

  $(".detail_images").slick({
    arrows: 1,
    slidesToScroll: 1,
    dots: true,
    cssEase: "ease-out",
    autoplay: true,
  });

  var btnscrollToTop = $("#scrollToTop");
  $(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
      btnscrollToTop.addClass("show");
    } else {
      btnscrollToTop.removeClass("show");
    }
  });

  btnscrollToTop.on("click", function (e) {
    e.preventDefault();
    $("html, body").animate({ scrollTop: 0 }, "300");
  });

  $(document).on("contextmenu", function (e) {
    e.preventDefault();
    $("html, body").animate({ scrollTop: 0 }, "300");
  });
});
