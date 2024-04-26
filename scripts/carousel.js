// JavaScript Code
var index = 0;

function carousel() {
  var slides = document.getElementsByClassName("mySlides");

  for (var i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  index++;
  if (index > slides.length) {
    index = 1;
  }

  slides[index - 1].style.display = "block";

  // Use setTimeout to call carousel function after 3 seconds
  setTimeout(carousel, 3000);
}

function changeSlide(n) {
  index += n;
  var slides = document.getElementsByClassName("mySlides");

  if (index > slides.length) {
    index = 1;
  } else if (index < 1) {
    index = slides.length;
  }

  for (var i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  slides[index - 1].style.display = "block";
}

// Initial call to set the initial state
document.addEventListener("DOMContentLoaded", function () {
  carousel();
});
