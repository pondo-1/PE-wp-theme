import "../scss/index.scss";

import Navi from "../template-parts/navigation/navigation";
import Scrollup from "../template-parts/blog/scrollup";
// import Lightbox from "../acf-blocks/image-gallery/lightbox";

// import Swiper bundle with all modules installed //add .mjs required
import Swiper from "../node_modules/swiper/swiper-bundle.mjs";
// import styles bundle
import "swiper/css/bundle";

// const lightbox = new Lightbox();
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

//Backround Animation New

const point1 = document.getElementById('point1');

document.addEventListener('mousemove', (e) => {
  const mouseX = e.clientX;
  const mouseY = e.clientY;

  point1.style.top = mouseY-50 + "px"; //-50px : half of the height of the point
  point1.style.left = mouseX-50 + "px";       

});

const point2 = document.getElementById('point2');

document.addEventListener('mousemove', (e) => {
  const mouseX = e.clientX;
  const mouseY = e.clientY;

  point2.style.top = mouseY+50 + "px";
  point2.style.left = mouseX+50 + "px";       

});


// Background Animation old 
/* const rand = function (min, max) {
  return Math.random() * (max - min) + min;
};

let canvas = document.getElementById("canvas");
let ctx = canvas.getContext("2d");

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

window.addEventListener("resize", function () {
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;
  ctx = canvas.getContext("2d");
  ctx.globalCompositeOperation = "lighter";
});
let backgroundColors = ["#fff", "#fff"];
let colors = [
  ["#e05976", "#4784ff"],
  ["#4784ff", "#e05976"],
  ["#e05976", "#4784ff"],
];
let count = 2;
let blur = [90, 200];
let radius = [60, 220];

//ctx.clearRect(0, 0, canvas.width, canvas.height); // don't know
ctx.globalCompositeOperation = "lighter";

let grd = ctx.createLinearGradient(0, canvas.height, canvas.width, 0);
grd.addColorStop(0, backgroundColors[0]);
grd.addColorStop(1, backgroundColors[1]);
ctx.fillStyle = grd;
ctx.fillRect(0, 0, canvas.width, canvas.height);

let items = [];

while (count--) {
  let thisRadius = rand(radius[0], radius[1]);
  let thisBlur = rand(blur[0], blur[1]);
  let x = rand(-100, canvas.width + 100);
  let y = rand(-100, canvas.height + 100);
  let colorIndex = Math.floor(rand(0, 299) / 100);
  let colorOne = colors[colorIndex][0];
  let colorTwo = colors[colorIndex][1];

  ctx.beginPath();
  ctx.filter = `blur(${thisBlur}px)`;
  let grd = ctx.createLinearGradient(
    x - thisRadius / 2,
    y - thisRadius / 2,
    x + thisRadius,
    y + thisRadius
  );

  grd.addColorStop(0, colorOne);
  grd.addColorStop(1, colorTwo);
  ctx.fillStyle = grd;
  ctx.fill();
  ctx.arc(x, y, thisRadius, 0, Math.PI * 2);
  ctx.closePath();


  //Speed 
//  let directionX = Math.round(rand(-99, 99) / 100);
  let directionX = 1;
//  let directionY = Math.round(rand(-99, 99) / 100);
let directionY = 1;

  items.push({
    x: x,
    y: y,
    blur: thisBlur,
    radius: thisRadius,
    initialXDirection: directionX,
    initialYDirection: directionY,
    initialBlurDirection: directionX,
    colorOne: colorOne,
    colorTwo: colorTwo,
    gradient: [
      x - thisRadius / 2,
      y - thisRadius / 2,
      x + thisRadius,
      y + thisRadius,
    ],
  });
}

function changeCanvas(timestamp) {
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  let adjX = 2;
  let adjY = 2;
  let adjBlur = 1;
  items.forEach(function (item) {
    if (
      (item.x + item.initialXDirection * adjX >= canvas.width &&
        item.initialXDirection !== 0) ||
      (item.x + item.initialXDirection * adjX <= 0 &&
        item.initialXDirection !== 0)
    ) {
      item.initialXDirection = item.initialXDirection * -1;
    }
    if (
      (item.y + item.initialYDirection * adjY >= canvas.height &&
        item.initialYDirection !== 0) ||
      (item.y + item.initialYDirection * adjY <= 0 &&
        item.initialYDirection !== 0)
    ) {
      item.initialYDirection = item.initialYDirection * -1;
    }

    if (
      (item.blur + item.initialBlurDirection * adjBlur >= radius[1] &&
        item.initialBlurDirection !== 0) ||
      (item.blur + item.initialBlurDirection * adjBlur <= radius[0] &&
        item.initialBlurDirection !== 0)
    ) {
      item.initialBlurDirection *= -1;
    }

    item.x += item.initialXDirection * adjX;
    item.y += item.initialYDirection * adjY;
    item.blur += item.initialBlurDirection * adjBlur;
    ctx.beginPath();
    ctx.filter = `blur(${item.blur}px)`;
    let grd = ctx.createLinearGradient(
      item.gradient[0],
      item.gradient[1],
      item.gradient[2],
      item.gradient[3]
    );
    grd.addColorStop(0, item.colorOne);
    grd.addColorStop(1, item.colorTwo);
    ctx.fillStyle = grd;
    ctx.arc(item.x, item.y, item.radius, 0, Math.PI * 2);
    ctx.fill();
    ctx.closePath();
  });
  window.requestAnimationFrame(changeCanvas);
}

window.requestAnimationFrame(changeCanvas); */
