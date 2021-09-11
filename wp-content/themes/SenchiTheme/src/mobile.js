function changeContainerSize() {
  const container = document.querySelector(".container");
  const currentWidth = container.clientWidth;

  console.log("STARTING_WIDTH: ", currentWidth);

  if (currentWidth === 375) {
    let width = 375;
    const animationId = setInterval(decreaseContainer, 1);

    function decreaseContainer() {
      if (width === 0) {
        clearInterval(animationId);
      } else {
        if (width > 75) {
          width -= 15;
        } else if (width > 20) {
          width -= 5;
        } else {
          width--;
        }
        container.style.width = width + "px";
      }
    }
  } else if (currentWidth === 0) {
    let width = 0;
    const animationId = setInterval(increaseContainer, 1);

    function increaseContainer() {
      if (width === 375) {
        clearInterval(animationId);
      } else {
        if (width < 300) {
          width += 15;
        } else if (width < 355) {
          width += 5;
        } else {
          width++;
        }
        container.style.width = width + "px";
      }
    }
  }
}

function displayMenu(e) {
  const menuIcon = e.target;

  menuIcon.classList.toggle("show");

  if (menuIcon.classList.contains("fa-bars")) {
    document.querySelector(".fa-times").classList.toggle("show");
    changeContainerSize();
  } else {
    document.querySelector(".fa-bars").classList.toggle("show");
    changeContainerSize();
  }

  document.querySelector(".navbar").classList.toggle("show");
}

function showText() {
  document.querySelector(".about-us-text").classList.toggle("show-text");
}
