import "../scss/index.scss";

import Navi from "../template-parts/navigation/navigation";
import Scrollup from "../template-parts/blog/scrollup";

// import Swiper bundle with all modules installed //add .mjs required
import Swiper from "../node_modules/swiper/swiper-bundle.mjs";
// import styles bundle
import "swiper/css/bundle";

const navigation = new Navi();
const scrollup = new Scrollup();
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
