const sliderLocations = new Siema({
  selector: ".locations__slider",
  loop: true,
  perPage: 3,
});
document
  .querySelector(".locations__cont .slider__arrow--prev")
  .addEventListener("click", () => sliderLocations.prev());
document
  .querySelector(".locations__cont .slider__arrow--next")
  .addEventListener("click", () => sliderLocations.next());

const sliderPortfolio = new Siema({
  selector: ".portfolio__slider",
  loop: true,
  perPage: 3,
  onChange: onChangeSlider,
});
document
  .querySelector(".portfolio__cont .slider__arrow--prev")
  .addEventListener("click", () => sliderPortfolio.prev());
document
  .querySelector(".portfolio__cont .slider__arrow--next")
  .addEventListener("click", () => sliderPortfolio.next());

function onChangeSlider() {
  const dots = document.querySelectorAll(".portfolio .slider__dot");
  dots.forEach((dot) => dot.classList.remove("slider__dot--active"));
  console.log(dots, sliderPortfolio.currentSlide);
  const currentSlide = (sliderPortfolio.currentSlide + 5) % 5;
  dots[currentSlide].classList.add("slider__dot--active");
}

// const sliderServices = new Siema({
//   selector: ".services__list",
//   loop: true,
//   perPage: 3,
// });
// document
//   .querySelector(".services .slider__arrow--prev")
//   .addEventListener("click", () => sliderServices.prev());
// document
//   .querySelector(".services .slider__arrow--next")
//   .addEventListener("click", () => sliderServices.next());
