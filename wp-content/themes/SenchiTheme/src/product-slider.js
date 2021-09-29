// slideShow(slideIndex, "product-image");
setActiveClass();

// Next/previous controls
function changeSlide(n, productName) {
  showSlides(n, productName);
}

function showSlides(n, productName) {
  const activeImage = document.querySelector(`.${productName}.active-image`);

  if (n === 1) {
    const nextImage = activeImage.nextElementSibling;
    if (nextImage) {
      nextImage.classList.toggle("active-image");
      activeImage.classList.toggle("active-image");
    } else {
      const parentElement = activeImage.parentElement;
      parentElement.firstElementChild.classList.toggle("active-image");
      activeImage.classList.toggle("active-image");
    }
  } else if (n === -1) {
    const previousImage = activeImage.previousElementSibling;
    if (previousImage) {
      previousImage.classList.toggle("active-image");
      activeImage.classList.toggle("active-image");
    } else {
      const parentElement = activeImage.parentElement;
      parentElement.lastElementChild.classList.toggle("active-image");
      activeImage.classList.toggle("active-image");
    }
  }
}

function setActiveClass() {
  const container = document.querySelectorAll(".product-image-container");
  container.forEach((element) => {
    element.firstElementChild.classList.add("active-image");
  });
}
