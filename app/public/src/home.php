<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <?php
    include('../assets/components/head.php')
  ?>
  <link rel="stylesheet" href="../assets/css/home.css">
</head>
<body>

  <?php
    include('../assets/components/header.php')
  ?>
  <main>
    <section class="projetos">
      <div class="projetos-header">
        <h3>Projetos</h3>
        <button id="verTodos">Ver todos</button>
      </div>
      
      <div class='container-slider'>
        <div class="slider-container">
          <div class="slider" id="slider">
            <div class="slide"></div>
            <div class="slide"></div>
            <div class="slide"></div>
          </div>
        </div>
        <button class="slider-btn" id="prevBtn">&lt;</button>
        <button class="slider-btn" id="nextBtn">&gt;</button>
      </div>
      
    </section>
    <section class='mapeamento'>
      <div class="projetos-header">
        <h3>Mapeamento</h3>
        <button id="verTodos">Ver mapa</button>
      </div>
      <img class='img-mapa' src="../assets/img/mapa.png" alt="">
    </section>
    
    <section class='ods'>
      <div class="projetos-header">
        <h3>ODS's</h3>
        <button id="verTodos">Ver todos</button>
      </div>
      
      <div class="carousel-container">
        <div class="carousel" id="odsCarousel">
          <div class="carousel-item">
            <img src="../assets/img/ods1.png" alt="ODS 1 - Erradicar a Pobreza">
          </div>
          <div class="carousel-item">
            <img src="../assets/img/ods2.png" alt="ODS 2 - Fome Zero e Agricultura Sustentável">
          </div>
          <div class="carousel-item">
            <img src="../assets/img/ods3.png" alt="ODS 3 - Saúde e Bem-estar">
          </div>
          <div class="carousel-item">
            <img src="../assets/img/ods4.png" alt="ODS 4 - Educação de Qualidade">
          </div>
        </div>
        <button class="carousel-btn" id="prevBtn">&lt;</button>
        <button class="carousel-btn" id="nextBtn">&gt;</button>
      </div>
    </section>

    </section>
  </main>

  <script src="../assets/js/home.js"></script>
</body>
</html>


