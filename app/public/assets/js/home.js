const slider = document.getElementById('slider');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');

let scrollAmount = 0;

nextBtn.addEventListener('click', () => {
  // Limitar a rolagem para não sair do último slide
  if (scrollAmount < (slider.children.length - 1) * 310) {
    scrollAmount += 310;
    slider.style.transform = `translateX(-${scrollAmount}px)`;
  }
});

prevBtn.addEventListener('click', () => {
  // Limitar a rolagem para não voltar além do primeiro slide
  if (scrollAmount > 0) {
    scrollAmount -= 310;
    slider.style.transform = `translateX(-${scrollAmount}px)`;
  }
});

let currentIndex = 0;
const items = document.querySelectorAll('.carousel-item');
const totalItems = items.length;

document.getElementById('nextBtn').addEventListener('click', function () {
    currentIndex = (currentIndex + 1) % totalItems;
    updateCarousel();
});

document.getElementById('prevBtn').addEventListener('click', function () {
    currentIndex = (currentIndex - 1 + totalItems) % totalItems;
    updateCarousel();
});

function updateCarousel() {
    const newTransform = -currentIndex * 100;
    document.querySelector('.carousel').style.transform = `translateX(${newTransform}%)`;
}



