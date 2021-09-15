function removeStyle() {
  const container = document.querySelector(".container");

  if (window.innerWidth > 400) {
    container.removeAttribute("style");
  }
}

window.onresize = removeStyle;

function changeContainerSize() {
  const container = document.querySelector(".container");
  const currentWidth = container.clientWidth;

  if (currentWidth >= 375) {
    let width = 110;
    const animationId = setInterval(decreaseContainer, 1);

    function decreaseContainer() {
      if (width === 0) {
        clearInterval(animationId);
      } else {
        // if (width > 75) {
        //   width -= 15;
        // } else if (width > 20) {
        //   width -= 5;
        // } else {
        //   width--;
        // }
        width -= 5;
        container.style.width = width + "vw";
      }
    }
  } else if (currentWidth === 0) {
    let width = 0;
    const animationId = setInterval(increaseContainer, 1);

    function increaseContainer() {
      if (width === 110) {
        clearInterval(animationId);
      } else {
        // if (width < 300) {
        //   width += 15;
        // } else if (width < 355) {
        //   width += 5;
        // } else {
        //   width++;
        // }
        width += 5;
        container.style.width = width + "vw";
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
