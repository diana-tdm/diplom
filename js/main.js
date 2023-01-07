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

const sliderReviews = new Siema({
  selector: ".reviews__items",
  loop: true,
  perPage: 3,
});
// document
//   .querySelector(".locations__cont .slider__arrow--prev")
//   .addEventListener("click", () => sliderLocations.prev());
// document
//   .querySelector(".locations__cont .slider__arrow--next")
//   .addEventListener("click", () => sliderLocations.next());

const giftBtn = document.querySelector(".gift__btn");
const giftBtn2 = document.querySelector(".banner__btn");
const giftModal = document.querySelector(".modal--gift");
const giftClose = document.querySelector(".gift__form-close");

giftBtn.addEventListener("click", () => {
  giftModal.classList.add("modal--open");
});

giftBtn2.addEventListener("click", () => {
  giftModal.classList.add("modal--open");
});

giftClose.addEventListener("click", () => {
  giftModal.classList.remove("modal--open");
});

const giftThanksBtn = document.querySelector(".gift__form-btn");
const giftThanksModal = document.querySelector(".modal--gift-thanks");
const giftThanksClose = document.querySelector(".gift__thanks-close");

giftThanksBtn.addEventListener("click", () => {
  giftThanksModal.classList.add("modal--open");
  giftModal.classList.remove("modal--open");
});

giftThanksClose.addEventListener("click", () => {
  giftThanksModal.classList.remove("modal--open");
});

const locBtn = document.querySelector(".locations__btn");
const locModal = document.querySelector(".modal--locations-form");
const locClose = document.querySelector(".locations__form-close");

locBtn.addEventListener("click", () => {
  locModal.classList.add("modal--open");
});

locClose.addEventListener("click", () => {
  locModal.classList.remove("modal--open");
});

const locThanksBtn = document.querySelector(".locations__form-btn");
const locThanksModal = document.querySelector(".modal--locations-thanks");
const locThanksClose = document.querySelector(".locations__thanks-close");

locThanksBtn.addEventListener("click", () => {
  locThanksModal.classList.add("modal--open");
  locModal.classList.remove("modal--open");
});

locThanksClose.addEventListener("click", () => {
  locThanksModal.classList.remove("modal--open");
});

const reviewsBtn = document.querySelector(".reviews__items-btn");
const reviewsModal = document.querySelector(".modal--reviews-form");
const reviewsClose = document.querySelector(".reviews__form-close");

reviewsBtn.addEventListener("click", () => {
  reviewsModal.classList.add("modal--open");
});

reviewsClose.addEventListener("click", () => {
  reviewsModal.classList.remove("modal--open");
});

const reviewsThanksBtn = document.querySelector(".reviews__form-btn");
const reviewsThanksModal = document.querySelector(".modal--reviews-thanks");
const reviewsThanksClose = document.querySelector(".reviews__thanks-close");

reviewsThanksBtn.addEventListener("click", () => {
  reviewsThanksModal.classList.add("modal--open");
  reviewsModal.classList.remove("modal--open");
});

reviewsThanksClose.addEventListener("click", () => {
  reviewsThanksModal.classList.remove("modal--open");
});

const ideaBtnOpen = document.querySelector(".idea__btn--open");
const ideaBtnClose = document.querySelector(".idea__btn--close");
const ideaText = document.querySelector(".idea__text");

ideaBtnOpen.addEventListener("click", () => {
  ideaText.classList.remove("idea__text--short");
  ideaBtnOpen.classList.toggle("idea__btn--hidden");
  ideaBtnClose.classList.toggle("idea__btn--hidden");
});

ideaBtnClose.addEventListener("click", () => {
  ideaText.classList.add("idea__text--short");
  ideaBtnOpen.classList.toggle("idea__btn--hidden");
  ideaBtnClose.classList.toggle("idea__btn--hidden");
});

const trendBtnOpen = document.querySelector(".trend__btn--open");
const trendBtnClose = document.querySelector(".trend__btn--close");
const trendText = document.querySelector(".trend__text");

trendBtnOpen.addEventListener("click", () => {
  trendText.classList.remove("idea__text--short");
  trendBtnOpen.classList.toggle("idea__btn--hidden");
  trendBtnClose.classList.toggle("idea__btn--hidden");
});

trendBtnClose.addEventListener("click", () => {
  trendText.classList.add("idea__text--short");
  trendBtnOpen.classList.toggle("idea__btn--hidden");
  trendBtnClose.classList.toggle("idea__btn--hidden");
});
