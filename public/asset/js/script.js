const slides = document.querySelector(".slides");

slides.addEventListener("scroll", () => {
  const slideWidth = slides.clientWidth;
  const slideIndex = Math.round(slides.scrollLeft / slideWidth);

  slides.style.setProperty("--slide-index", slideIndex);
});