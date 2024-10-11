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
      <div class='container-ods-slider'>
        <div class="slider-ods-container">
          <div class="slider-ods" id="sliderods">
            <div class="slide-ods"><img src="../assets/img/ods/1.png" alt=""></div>
            <div class="slide-ods"><img src="../assets/img/ods/2.png" alt=""></div>
            <div class="slide-ods"><img src="../assets/img/ods/3.png" alt=""></div>
            <div class="slide-ods"><img src="../assets/img/ods/4.png" alt=""></div>
            <div class="slide-ods"><img src="../assets/img/ods/5.png" alt=""></div>
            <div class="slide-ods"><img src="../assets/img/ods/6.png" alt=""></div>
            <div class="slide-ods"><img src="../assets/img/ods/7.png" alt=""></div>
            <div class="slide-ods"><img src="../assets/img/ods/8.png" alt=""></div>
          </div>
        </div>
      
        <button class="slider-ods-btn" id="voltaBtn">&lt;</button>
        <button class="slider-ods-btn" id="proxBtn">&gt;</button>
      </div>
      

    </section>
  </main>

  <script src="../assets/js/home.js"></script>
</body>
</html>


