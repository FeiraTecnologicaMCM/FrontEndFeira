<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/padrao.css">
  <title>Feira Tecnológica 2024</title>

  <?php
            include('../assets/components/head.php')
        ?>
  <style>

    body{
      flex-direction: column;    
    }

    .container {
      max-width: 900px;
      margin: 0 auto;
      padding: 40px;
      background-color: white;
    }

    .header {
      text-align: center;
      padding: 40px 0;
    }

    .header img {
      width: 80px;
    }

    .header h1 {
      font-size: 36px;
      margin: 0;
      color: #333;
    }

    .header h2 {
      font-size: 18px;
      color: red;
      margin: 0;
    }

    .content {
      padding: 40px 0;
    }

    .content h3 {
      font-size: 24px;
      margin-bottom: 20px;
      color: #333;
    }

    .content p {
      font-size: 16px;
      line-height: 1.8;
      margin-bottom: 40px;
      text-align: justify;
    }

    .ods-icons {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      margin-bottom: 60px;
    }

    .ods-icons img {
      width: 100%;
    }

    .ods-section {
      margin-bottom: 10px;
      padding: 20px;
      border-radius: 8px;
    }

    .ods-section h4 {
      font-size: 22px;
      color: #333;
      margin-bottom: 20px;
    }

    .ods-section p {
      font-size: 16px;
      line-height: 1.8;
    }

    .ods-section .icon {
      float: left;
      margin-right: 20px;
      width: 100px;
    }
    

    

    /* Responsividade */
    @media (max-width: 600px) {

      .ods-section {
        margin-bottom: 1px;
      }
      
      .ods-icons img {
        width: 100%;
      }

      .ods-section h4 {
        font-size: 18px;
      }

      .ods-section p {
        font-size: 14px;
      }

      .ods-section .icon {
        width: 70px;
        margin-right: 10px;
      }

      .header h1 {
        font-size: 28px;
      }

      .header h2 {
        font-size: 16px;
      }

      .content h3 {
        font-size: 20px;
      }

      .container {
        padding: 20px;
      }
    }
  </style>
</head>
<body>
        <?php
            include('../assets/components/header.php')
         ?>
    
  <div class="container">
    <div class="content">
      <h3>O que são ODS's?</h3>
      <p>Os Objetivos de Desenvolvimento Sustentável (ODS) (ou Objetivos Mundiais para o Desenvolvimento Sustentável) são uma coleção de 17 metas globais, estabelecidas pela Assembleia Geral das Nações Unidas. Os ODS são parte da Resolução 70/1 da Assembleia Geral das Nações Unidas: "Transformando o nosso mundo: a Agenda 2030 para o Desenvolvimento Sustentável". As metas são amplas e interdependentes, mas cada uma tem uma lista separada de metas a serem alcançadas. Atingir todos os 169 alvos indicaria a realização de todos os 17 objetivos. Os ODS abrangem questões de desenvolvimento social e econômico, incluindo pobreza, fome, saúde, educação, aquecimento global, igualdade de gênero, água, saneamento, energia, urbanização, meio ambiente e justiça social.</p>

      <div class="ods-icons">
        <img src="../assets/img/ods/odss.jpg" alt="ODS">
      </div>

      <div class="ods-section">
        <h4>1. Erradicar a pobreza</h4>
        <img class="icon" src="../assets/img/ods/ODS1.jpg" alt="ODS 1">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
      </div>

      <div class="ods-section">
        <h4>2. Fome zero e agricultura sustentável</h4>
        <img class="icon" src="../assets/img/ods/ods2.png" alt="ODS 2">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
      </div>

      <div class="ods-section">
        <h4>3. Saúde e bem estar</h4>
        <img class="icon" src="../assets/img/ods/ods3.png" alt="ODS 3">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
      </div>

      <div class="ods-section">
        <h4>4. Educação de Qualidade</h4>
        <img class="icon" src="../assets/img/ods/ods4.png" alt="ODS 4">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
      </div>

      <div class="ods-section">
        <h4>5. Igualdade de Gênero</h4>
        <img class="icon" src="../assets/img/ods/ods5.png" alt="ODS 5">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
      </div>

      <div class="ods-section">
        <h4> 6. Água Potável e Saneamento </h4>
        <img class="icon" src="../assets/img/ods/ods6.png" alt="ODS 6">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
      </div>

      <div class="ods-section">
        <h4>7. Energia Limpa e Acessível </h4>
        <img class="icon" src="../assets/img/ods/ods7.png" alt="ODS 7">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
      </div>

      <div class="ods-section">
        <h4>8. Trabalho Decente e Crescimento Econômico  </h4>
        <img class="icon" src="../assets/img/ods/ods8.png" alt="ODS 8">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
      </div>

      <div class="ods-section">
        <h4>9. Indústria, Inovação e Infraestrutura </h4>
        <img class="icon" src="../assets/img/ods/ods9.png" alt="ODS 9">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
      </div>

      <div class="ods-section">
        <h4>10. Redução das Desigualdades</h4>
        <img class="icon" src="../assets/img/ods/ods10.png" alt="ODS 10">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
      </div>

      <div class="ods-section">
        <h4>11. Cidades e Comunidades Sustentávei</h4>
        <img class="icon" src="../assets/img/ods/ods11.png" alt="ODS 11">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
      </div>

      <div class="ods-section">
        <h4>12. Consumo e Produção Responsáveis</h4>
        <img class="icon" src="../assets/img/ods/ods12.png" alt="ODS 12">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
      </div>

      <div class="ods-section">
        <h4>13. Ação Contra a Mudança Global do Clima</h4>
        <img class="icon" src="../assets/img/ods/ods13.png" alt="ODS 13">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
      </div>

      <div class="ods-section">
        <h4>14. Vida na Água</h4>
        <img class="icon" src="../assets/img/ods/ods14.png" alt="ODS 14">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
      </div>

      <div class="ods-section">
        <h4>15. Vida Terrestre</h4>
        <img class="icon" src="../assets/img/ods/ods15.png" alt="ODS 15">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
      </div>

      <div class="ods-section">
        <h4>16. Paz Justiça e instituições eficazes</h4>
        <img class="icon" src="../assets/img/ods/ods16.png" alt="ODS 16">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
      </div>

      <div class="ods-section">
        <h4>17. Parcerias e Meios de Implementação</h4>
        <img class="icon" src="../assets/img/ods/ods17.png" alt="ODS 17">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
      </div>


    </div>

</body>
</html>
