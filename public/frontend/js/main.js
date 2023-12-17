$(".howtostart_item, .aditem, .about_advantages_item").hover(
  async function () {
    if ($(this).find("lottie-player").length) {
      var anim = $(this).find("lottie-player").get(0).getLottie();
      anim.loop = true;
      anim.play();
    }
  },
  async function () {
    if ($(this).find("lottie-player").length) {
      const anim = $(this).find("lottie-player").get(0).getLottie();
      anim.stop();
    }
  }
);

if ($(window).width() <= 768) {
  $("lottie-player").each(function () {
    var anim = $(this).get(0).getLottie();
    anim.loop = true;
    anim.play();
  });
} else {
  $("lottie-player").each(function () {
    var anim = $(this).get(0).getLottie();
    anim.stop();
  });
}

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

/*ROAD MAP*/
$(".roadmap_list").on("afterChange", function (event, slick, currentSlide) {
  $(".roadmap_progress > div").css({ width: Math.round((currentSlide * 100) / (slick.$slides.length - 1)) + "%" });
});

if ($(window).width() <= 1000 || $(window).height() <= 700) {
  $(".wrp_aditem:not(.slick-initialized)").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    infinite: false,
    responsive: [
      {
        breakpoint: 769,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 500,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
  $(".roadmap_list:not(.slick-initialized)").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    infinite: false,
    adaptiveHeight: true,
    autoplay: true,
    autoplaySpeed: 3000,
  });
} else {
  $(".wrp_aditem.slick-initialized").slick("unslick");
  $(".roadmap_list.slick-initialized").slick("unslick");
}

$("[data-year]").click(function () {
  var y = $(this).data("year");
  if ($(".roadmap_title_sticky > div").length) {
    var titleH = $(".roadmap_title_sticky > div").outerHeight();
  } else {
    var titleH = 0;
  }
  $("html, body").animate(
    {
      scrollTop: $('[data-year-block="' + y + '"]').offset().top - titleH,
    },
    800
  );
  return false;
});

let cardTransitionTime = 500;

let $card1 = $(".js-card.js_card_1");
let $card2 = $(".js-card.js_card_2");
let switching = false;

$(".flipcard_1").click(flipCard1);
$(".flipcard_2").click(flipCard2);

function flipCard1() {
  if (switching) {
    return false;
  }
  switching = true;

  $card1.toggleClass("is-switched");
  window.setTimeout(function () {
    $card1.children().children().toggleClass("is-active");
    switching = false;
  }, cardTransitionTime / 2);
}

function flipCard2() {
  if (switching) {
    return false;
  }
  switching = true;

  $card2.toggleClass("is-switched");
  window.setTimeout(function () {
    $card2.children().children().toggleClass("is-active");
    switching = false;
  }, cardTransitionTime / 2);
}
