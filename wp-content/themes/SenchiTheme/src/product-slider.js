let slideIndex = 1;
showSlides(slideIndex, "product-image");

// Next/previous controls
function plusSlides(n, productName) {
  showSlides((slideIndex += n), productName);
}

function showSlides(n, productName) {
  const slides = document.getElementsByClassName(productName);
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  slides[slideIndex - 1].style.display = "block";
}
