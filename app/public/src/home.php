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

    <section>
      <div class="ranking-container">
          <h1>Ranking <a href="#" class="ver-ranking">Ver Ranking</a></h1>
          <p>Acompanhe o ranking das votações dos melhores projetos</p>
          
          <div class="ranking">
              <div class="rank second">
                  <div class="circle purple">PERR</div>
                  <div class="position">2°</div>
                  <div class="project">Projeto PERR</div>
                  <div class="votes">65 votos</div>
              </div>
              <div class="rank first">
                  <div class="circle orange">PERR</div>
                  <div class="position">1°</div>
                  <div class="project">Projeto PERR</div>
                  <div class="votes">65 votos</div>
              </div>
              <div class="rank third">
                  <div class="circle teal">PERR</div>
                  <div class="position">3°</div>
                  <div class="project">Projeto PERR</div>
                  <div class="votes">65 votos</div>
              </div>
          </div>

          <button>Votar no melhor projeto</button>
          <style>
            .container {
            text-align: center;
            }

            h1 {
                font-size: 2em;
                color: #000;
            }

            h1 a {
                color: #007bff;
                text-decoration: none;
            }

            p {
                color: #666;
            }

            .ranking {
                display: flex;
                justify-content: center;
                align-items: flex-end;
                margin: 20px 0;
            }

            .rank {
                width: 150px;
                margin: 0 10px;
                text-align: center;
                background-color: #002060;
                color: #fff;
                padding: 10px;
                border-radius: 10px;
                position: relative;
            }

            .rank .circle {
                width: 50px;
                height: 50px;
                border-radius: 50%;
                display: flex;
                justify-content: center;
                align-items: center;
                color: #fc1f1f;
                font-weight: bold;
                margin: 0 auto 10px;
            }

            .rank.first .circle {
                background-color: #f39c12;
                height: 50px
            }

            .rank.second .circle {
                background-color: #afb1b3;
                height: 50px
            }

            .rank.third .circle {
                background-color: #9c5b3d;
                height: 50px
            }

            .rank.first{
              height: 250px
            }

            .rank.second{
              height: 200px
            }

            .rank.third{
              height: 150px
            }

            .rank .position {
                font-size: 1.5em;
                font-weight: bold;
                margin-bottom: 10px;
            }

            .rank .project {
                font-size: 1.2em;
                margin-bottom: 5px;
            }

            .rank .votes {
                font-size: 1em;
            }

            button {
                background-color: #ff0000;
                color: #fff;
                border: none;
                padding: 10px 20px;
                font-size: 1em;
                border-radius: 5px;
                cursor: pointer;
            }

            button:hover {
                background-color: #cc0000;
            }
          </style>

      </div>
    </section>

    <section>
      <div class="container">
          <h1>Vestibulinho ETEC MCM</h1>
          <p>Inscreva-se no vestibulinho da ETEC MCM</p>

          <div class="banner">
              <img src="https://bkpsitecpsnew.blob.core.windows.net/uploadsitecps/sites/22/2023/10/INSCRICAO.png" alt="Banner do Vestibulinho 1º Semestre 2024">
          </div>

          <button id="verTodos">Inscreva-se</button>
      </div>
    </section>
  </main>

  <script src="../assets/js/home.js"></script>
</body>
</html>


