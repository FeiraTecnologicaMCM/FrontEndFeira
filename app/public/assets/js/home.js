const slider = document.getElementById('slider');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');

const sliderods = document.getElementById('sliderods');
const voltaBtn = document.getElementById('voltaBtn');
const proxBtn = document.getElementById('proxBtn');

// Variáveis de rolagem independentes
let scrollAmountProjects = 0;
let scrollAmountODS = 0;

// Slider dos projetos
nextBtn.addEventListener('click', () => {
  if (scrollAmountProjects < (slider.children.length - 1) * 310) {
    scrollAmountProjects += 310;
    slider.style.transform = `translateX(-${scrollAmountProjects}px)`;
  }
});

prevBtn.addEventListener('click', () => {
  if (scrollAmountProjects > 0) {
    scrollAmountProjects -= 310;
    slider.style.transform = `translateX(-${scrollAmountProjects}px)`;
  }
});

// Slider das ODS's
proxBtn.addEventListener('click', () => {
  if (scrollAmountODS < (sliderods.children.length - 1) * 310) {
    scrollAmountODS += 310;
    sliderods.style.transform = `translateX(-${scrollAmountODS}px)`;
  }
});

voltaBtn.addEventListener('click', () => {
  if (scrollAmountODS > 0) {
    scrollAmountODS -= 310;
    sliderods.style.transform = `translateX(-${scrollAmountODS}px)`;
  }
});
