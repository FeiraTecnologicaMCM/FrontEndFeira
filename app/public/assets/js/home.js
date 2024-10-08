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


