//GlobalVariables
var no_of_slides, arrows_to_show;

//OnWindowResize
if (
  window.matchMedia("(max-width: 920px)").matches === true &&
  window.matchMedia("(max-width: 621px)").matches === false
) {
  no_of_slides = 2;
  arrows_to_show = true;
} else if (window.matchMedia("(max-width: 620px)").matches === true) {
  no_of_slides = 1;
  arrows_to_show = false;
} else {
  (no_of_slides = 3), (arrows_to_show = true);
}

//JquerySlider
$(".slider").slick({
  slidesToShow: no_of_slides,
  slidesToScroll: 1,
  dots: false,
  arrows: arrows_to_show,
  autoplay: true,
  autoplaySpeed: 2000,
  infinite: true,
});
