// Add mobile css class to body
$(window).ready(function () {
  if (window.screen.width <= 700) {
    $("body").addClass("mobile");
  } else {
    $("body").removeClass("mobile");
  }
});


// Carousel
let items = document.querySelectorAll('.carousel .carousel-item')

		items.forEach((el) => {
			const minPerSlide = 4
			let next = el.nextElementSibling
			for (var i=1; i<minPerSlide; i++) {
				if (!next) {
            // wrap carousel by using first child
            next = items[0]
        }
        let cloneChild = next.cloneNode(true)
        el.appendChild(cloneChild.children[0])
        next = next.nextElementSibling
    }
})