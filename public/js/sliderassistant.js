$(document).ready(function () {
  var carousel = $(".owl-carousel");
  var dots = carousel.find(".owl-dot");
  var maxDots = 10;

  carousel.owlCarousel({
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 3,
      },
    },
    loop: false,
    center: true,
    responsiveClass: true,
    onTranslated: function (event) {
      var currentItem = event.item.index;
      $(".owl-item")
        .not(".cloned")
        .removeClass("zoom")
        .find("img")
        .css("transform", "scale(0.9)")
        .css("opacity", "1");
      $(".owl-item")
        .eq(currentItem)
        .addClass("zoom")
        .find("img")
        .css("transform", "scale(1)")
        .css("opacity", "1");
    },
  });

  $(".owl-prev").click(function () {
    carousel.trigger("prev.owl.carousel");
  });

  $(".owl-next").click(function () {
    carousel.trigger("next.owl.carousel");
  });
});