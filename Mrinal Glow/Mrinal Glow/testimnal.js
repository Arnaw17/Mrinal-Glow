const slider = document.querySelector('.slider');
const slides = document.querySelectorAll('.slide');

let currentSlide = 0;
let slideInterval;

function startSlider() {
  slideInterval = setInterval(() => {
    currentSlide++;
    if (currentSlide >= slides.length) {
      currentSlide = 0;
    }
    updateSlider();
  }, 2000);
}

function updateSlider() {
  slides.forEach((slide, index) => {
    slide.style.transform = `translateX(${(index - currentSlide) * 110}%)`;
  });
}

startSlider(); // Initialize the slider 