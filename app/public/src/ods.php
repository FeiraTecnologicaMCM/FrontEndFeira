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
        <img src="../assets/img/odss.jpg" alt="ODS">
      </div>

      <div class="ods-section">
        <h4>1. Erradicar a pobreza</h4>
        <img class="icon" src="../assets/img/ods/1.png" alt="ODS 1">
        <p>O objetivo da ODS 01 é acabar com a pobreza em todas as suas formas, em todos os lugares.</p>
      </div>

      <div class="ods-section">
        <h4>2. Fome zero e agricultura sustentável</h4>
        <img class="icon" src="../assets/img/ods/2.png" alt="ODS 2">
        <p> O objetivo da ODS 02 é acabar com a fome, alcançar a segurança alimentar e melhoria da nutrição e promover a agricultura sustentável.</p>
      </div>

      <div class="ods-section">
        <h4>3. Saúde e bem estar</h4>
        <img class="icon" src="../assets/img/ods/3.png" alt="ODS 3">
        <p> A ODS 3 tem o objetivo de assegurar uma vida saudável e promover o bem-estar para todos, em todas as idades.</p>
      </div>

      <div class="ods-section">
        <h4>4. Educação de Qualidade</h4>
        <img class="icon" src="../assets/img/ods/4.png" alt="ODS 4">
        <p>A ODS 04 visa assegurar a educação inclusiva, e equitativa e de qualidade, e promover oportunidades de aprendizagem ao longo da vida para todos.</p>
      </div>

      <div class="ods-section">
        <h4>5. Igualdade de Gênero</h4>
        <img class="icon" src="../assets/img/ods/5.png" alt="ODS 5">
        <p>A ODS 05 visa alcançar a igualdade de gênero e empoderar todas as mulheres e meninas.</p>
      </div>

      <div class="ods-section">
        <h4> 6. Água Potável e Saneamento </h4>
        <img class="icon" src="../assets/img/ods/6.png" alt="ODS 6">
        <p>A ODS 06 tem o objetivo de garantir disponibilidade e manejo sustentável da água e saneamento para todos.</p>
      </div>

      <div class="ods-section">
        <h4>7. Energia Limpa e Acessível </h4>
        <img class="icon" src="../assets/img/ods/7.png" alt="ODS 7">
        <p>A ODS 07 tem o objetivo de garantir acesso à energia barata, confiável, sustentável e renovável para todos.</p>
      </div>

      <div class="ods-section">
        <h4>8. Trabalho Decente e Crescimento Econômico  </h4>
        <img class="icon" src="../assets/img/ods/8.png" alt="ODS 8">
        <p>A ODS 08 prromove o crescimento econômico sustentado, inclusivo e sustentável, emprego pleno e produtivo, e trabalho decente para todos.</p>
      </div>

      <div class="ods-section">
        <h4>9. Indústria, Inovação e Infraestrutura </h4>
        <img class="icon" src="../assets/img/ods/9.png" alt="ODS 9">
        <p>A ODS 09 tem objetivo de construir infraestrutura resiliente, promover a industrialização inclusiva e sustentável, e fomentar a inovação.</p>
      </div>

      <div class="ods-section">
        <h4>10. Redução das Desigualdades</h4>
        <img class="icon" src="../assets/img/ods/10.png" alt="ODS 10">
        <p>A ODS 10 visa reduzir a desigualdade dentro dos países e entre eles.</p>
      </div>

      <div class="ods-section">
        <h4>11. Cidades e Comunidades Sustentávei</h4>
        <img class="icon" src="../assets/img/ods/11.png" alt="ODS 11">
        <p>A ODS 11 tem o objetivo de tornar as cidades e os assentamentos humanos inclusivos, seguros, resilientes e sustentáveis.</p>
      </div>

      <div class="ods-section">
        <h4>12. Consumo e Produção Responsáveis</h4>
        <img class="icon" src="../assets/img/ods/12.png" alt="ODS 12">
        <p>A ODS 12 tem o objetivo de assegurar padrões de produção e de consumo sustentáveis.</p>
  </div>

      <div class="ods-section">
        <h4>13. Ação Contra a Mudança Global do Clima</h4>
        <img class="icon" src="../assets/img/ods/13.png" alt="ODS 13">
        <p> A ODS 13 visa tomar medidas urgentes para combater a mudança do clima e seus impactos.</p>
      </div>

      <div class="ods-section">
        <h4>14. Vida na Água</h4>
        <img class="icon" src="../assets/img/ods/14.png" alt="ODS 14">
        <p>A ODS 14 visa a conservação e uso sustentável dos oceanos, dos mares e dos recursos marinhos para o desenvolvimento sustentável.</p>
      </div>

      <div class="ods-section">
        <h4>15. Vida Terrestre</h4>
        <img class="icon" src="../assets/img/ods/15.png" alt="ODS 15">
        <p> A ODS 15 tem o objetivo de proteger, recuperar e promover o uso sustentável dos ecossistemas terrestres, gerir de forma sustentável as florestas, combater a desertificação, deter e reverter a degradação da terra e deter a perda de biodiversidade.</p>
      </div>

      <div class="ods-section">
        <h4>16. Paz Justiça e instituições eficazes</h4>
        <img class="icon" src="../assets/img/ods/16.png" alt="ODS 16">
        <p> A ODS 16 tem o objetivo de promover sociedades pacíficas e inclusivas para o desenvolvimento sustentável, proporcionar o acesso à justiça para todos e construir instituições eficazes, responsáveis e inclusivas em todos os níveis.</p>
      </div>

      <div class="ods-section">
        <h4>17. Parcerias e Meios de Implementação</h4>
        <img class="icon" src="../assets/img/ods/17.png" alt="ODS 17">
        <p>A ODS 17 tem o objetivo de fortalecer os meios de implementação e revitalizar a parceria global para o desenvolvimento sustentável.</p>
      </div>


    </div>

</body>
</html>
