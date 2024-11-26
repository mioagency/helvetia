
$(document).ready(function () {
  
  // Add mobile css class to body
  if (window.screen.width <= 700) {
    $("body").addClass("mobile");
  } else {
    $("body").removeClass("mobile");
  }

  //Show tab content on hover
  $(".nav-link").mouseenter(function() {
    $(this).tab('show');
    console.log('hover')
  });

  // Add class active to first carousel item
  $('#carouselExampleControls .carousel-item:first-child').addClass('active');
});

var multipleCardCarousel = document.querySelector(
  "#carouselExampleControls"
);
if (window.matchMedia("(min-width: 768px)").matches) {
  var carousel = new bootstrap.Carousel(multipleCardCarousel, {
    interval: false,
  });
  var carouselWidth = $(".carousel-inner")[0].scrollWidth;
  var cardWidth = $(".carousel-item").width();
  var scrollPosition = 0;
  $("#carouselExampleControls .carousel-control-next").on("click", function () {
    if (scrollPosition < carouselWidth - cardWidth * 5) {
      scrollPosition += cardWidth;
      $("#carouselExampleControls .carousel-inner").animate(
        { scrollLeft: scrollPosition },
        600
      );
    }
  });
  $("#carouselExampleControls .carousel-control-prev").on("click", function () {
    if (scrollPosition > 0) {
      scrollPosition -= cardWidth;
      $("#carouselExampleControls .carousel-inner").animate(
        { scrollLeft: scrollPosition },
        600
      );
    }
  });
} else {
  $(multipleCardCarousel).addClass("slide");
}

$('#da-thumbs > li').hoverdir({hoverDelay: 75, hoverElem: '.elem'});