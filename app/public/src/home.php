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
        <a href="projeto.php?filtro=padrao" id="verTodosProjetos">Ver todos</a>
      </div>
      
      <div class='container-slider'>
        <div class="slider-container">
          <div class="slider" id="slider">
              <?php
                $url = 'http://localhost/API-Feira-Tecnologica/projects/get';
                $response = file_get_contents($url);
                $data = json_decode($response, true);
                if (is_array($data['data'])) {
                    // Embaralha os projetos para exibi-los de forma aleatória
                    shuffle($data['data']);
                    foreach ($data['data'] as $projeto) {
                        $curso = htmlspecialchars($projeto['curso'], ENT_QUOTES, 'UTF-8');
                        $nome = htmlspecialchars($projeto['nome'], ENT_QUOTES, 'UTF-8');
                        $id_stand = htmlspecialchars($projeto['id_stand'], ENT_QUOTES, 'UTF-8');
                        $imagemPath = "../assets/img/$curso.jpeg";
                        // Verifica se a imagem existe; se não, usa uma imagem padrão
                        if (!file_exists($imagemPath)) {
                            $imagemPath = "../assets/img/padrao.jpeg";
                        }
                        ?>
                        <a href="infoprojetos.php?id=<?php echo $id_stand; ?>" class="box slide">
                            <img src="<?php echo $imagemPath; ?>" alt="Imagem do curso <?php echo $curso; ?>">
                            <span class="name"><?php echo $nome; ?></span>
                        </a>
                        <?php
                    }
                } else {
                    // Exibe uma mensagem caso nenhum projeto seja encontrado
                    echo "<p>Nenhum projeto disponível para o período selecionado.</p>";
                }
              ?>
          </div>
        </div>
        <button class="slider-btn" id="prevBtn">&lt;</button>
        <button class="slider-btn" id="nextBtn">&gt;</button>
      </div>
      
    </section>
    <section class='mapeamento'>
      <div class="projetos-header">
        <h3>Mapeamento</h3>
        <a href="mapa.php" id="verTodosMapa">Ver mapa</a>
      </div>
      <img class='img-mapa' src="../assets/img/mapa.png" alt="">
    </section>
    <section class='ods'>
      <div class="projetos-header">
        <h3>ODS's</h3>
        <a href="ods.php" id="verTodosODS">Ver todos</a> <!-- ID atualizado -->
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
            <div class="slide-ods"><img src="../assets/img/ods/9.png" alt=""></div>
            <div class="slide-ods"><img src="../assets/img/ods/10.png" alt=""></div>
            <div class="slide-ods"><img src="../assets/img/ods/11.png" alt=""></div>
            <div class="slide-ods"><img src="../assets/img/ods/12.png" alt=""></div>
            <div class="slide-ods"><img src="../assets/img/ods/13.png" alt=""></div>
            <div class="slide-ods"><img src="../assets/img/ods/14.png" alt=""></div>
            <div class="slide-ods"><img src="../assets/img/ods/15.png" alt=""></div>
            <div class="slide-ods"><img src="../assets/img/ods/16.png" alt=""></div>
            <div class="slide-ods"><img src="../assets/img/ods/17.png" alt=""></div>

          </div>
        </div>
      
        <button class="slider-ods-btn" id="voltaBtn">&lt;</button>
        <button class="slider-ods-btn" id="proxBtn">&gt;</button>
      </div>
    </section>

    <section>
      <div class="rank-container">
          <h1>Ranking Atualizado dos Melhores Projetos</h1>
          <div class="medalha">
              <div class="prata">2°</div>
              <div class="ouro">1°</div>
              <div class="bronze">3°</div>
          </div>
          <?php
              $url = 'http://localhost/API-Feira-Tecnologica/votos/contagem';
              $response = file_get_contents($url);
              $data = json_decode($response, true);

              $nomesProjetos = []; // Cache para nomes de projetos

              if(is_array($data['data'])) {   
                  // Variáveis para armazenar cada projeto conforme a posição
                  $primeiro = $segundo = $terceiro = null;

                  foreach ($data['data'] as $voto) {
                      $projeto_id = $voto['projeto_id'];

                      // Verifica se já temos o nome do projeto no cache
                      if (!isset($nomesProjetos[$projeto_id])) {
                          $url = "http://localhost/API-Feira-Tecnologica/projects/getbyid/$projeto_id";
                          $response = file_get_contents($url);
                          $projetoData = json_decode($response, true);

                          if (is_array($projetoData['data'])) {
                              foreach ($projetoData['data'] as $projeto) {
                                  $nomesProjetos[$projeto_id] = $projeto['nome']; // Armazena no cache
                              }
                          }
                      }

                      // Armazena o projeto na variável correspondente com base na posição
                      switch ($voto['posicao']) {
                          case 1:
                              $primeiro = ['nome' => $nomesProjetos[$projeto_id] ?? 'Nome não encontrado', 'votos' => $voto['total_votos']];
                              break;
                          case 2:
                              $segundo = ['nome' => $nomesProjetos[$projeto_id] ?? 'Nome não encontrado', 'votos' => $voto['total_votos']];
                              break;
                          case 3:
                              $terceiro = ['nome' => $nomesProjetos[$projeto_id] ?? 'Nome não encontrado', 'votos' => $voto['total_votos']];
                              break;
                      }

                      // Interrompe o loop após obter os três primeiros lugares
                      if ($voto['posicao'] >= 3) {
                          break;
                      }
                  }

                  // Exibe os dados nos elementos de div conforme a posição
                  ?>
                  <div class="caixas">
                      <div class="box1">
                          <div class="boxprata"></div>
                          <div><?php echo $segundo['nome'] ?? 'Projeto não encontrado'; ?><br><?php echo $segundo['votos'] ?? '0'; ?> votos</div>
                      </div>
                      <div class="box2">
                          <div><?php echo $primeiro['nome'] ?? 'Projeto não encontrado'; ?><br><?php echo $primeiro['votos'] ?? '0'; ?> votos</div>
                      </div>
                      <div class="box3">
                          <div><?php echo $terceiro['nome'] ?? 'Projeto não encontrado'; ?><br><?php echo $terceiro['votos'] ?? '0'; ?> votos</div>
                      </div>
                  </div>
                  <?php
              }
          ?>
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


