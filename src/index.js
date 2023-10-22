import "../scss/index.scss";

import Lightbox from "../acf-blocks/image-gallery/lightbox";
import Animation from "../template-parts/animation";
import Slide from "../acf-blocks/project-slider/slider";

// 3rd party packages
// Swiper bundle with all modules installed //add .mjs required
import Swiper from "../node_modules/swiper/swiper-bundle.mjs";
import "swiper/css/bundle"; //style

//https://simplelightbox.com/ https://dbrekalo.github.io/simpleLightbox/
import SimpleLightbox from "../node_modules/simple-lightbox/dist/simpleLightbox";
import "../node_modules/simple-lightbox/dist/simpleLightbox.css"; // style

//Two example function from resp as reference
// import Navi from "../template-parts/navigation/navigation";
// import Scrollup from "../template-parts/blog/scrollup";
var lightbox3 = new SimpleLightbox({ elements: ".Simplelightbox a" });
const lightbox = new Lightbox();
const animation = new Animation();
// const slide = new Slide();
const swiper = new Swiper(".swiperCarousel", {
  direction: "horizontal",
  loop: true,
  //Amount of slides in loop mode should be at least 2x of slidesPerView value.
  slidesPerView: 1.05,
  centeredSlides: true,
  spaceBetween: 24, // coloum gap 24px
  breakpoints: {
    // when window width is > 600px
    601: {
      slidesPerView: 1.3,
      spaceBetweenSlides: 24,
    },
    901: {
      slidesPerView: "auto",
      spaceBetweenSlides: 24,
    },
  },

  keyboard: {
    enabled: true,
  },

  pagination: {
    el: ".swiper-pagination",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
//const navigation = new Navi();
//const scrollup = new Scrollup();
