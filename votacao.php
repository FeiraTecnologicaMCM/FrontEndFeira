<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include('../assets/components/head.php') ?>

    <!-- !AQUI VAI O CSS DA SUA PÁGINA! -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">

    <title>Votação</title>

    <style>
        /* !CORE PADRÕES! */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'League Spartan', sans-serif;
        }

        :root {
            --Branco-cor: #FFF;
            --Preto-cor: #000;
            --Vermelho-cor: #E31212;
            --Cinza-cor: #D9D9D9;
            --Azul-escuro: #062261;
            --Amarelo: #FFC107;
            --Prata: #C0C0C0;
            --Bronze: #CD7F32;
        }
        .topo {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px;
        }

        .logo {
            width: 150px;
        }

        i {
            position: absolute;
            margin-left: 30px;
            font-size: 32px;
            left: 0;
        }

        header {
            display: flex;
            align-items: center;
            justify-content: center;
            background: #000;
            padding: 30px;
            height: 80px;
        }

        .text {
            text-align: center;
            display: grid;
            place-items: center;
            gap: 10px;
        }

        .rank-container {
            display: grid;
            place-items: center;
            gap: 30px;
            margin-top: 20px;
        }

        .rank-container h1 {
            text-align: center;
            width: 350px;
            margin-top: 1%;
        }

        .caixas {
            display: flex;
            align-items: flex-end;
            justify-content: center;
            position: relative;
        }

        .box1, .box2, .box3 {
            background: var(--Azul-escuro);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: var(--Branco-cor);
            text-align: center;
            position: relative;
        }

        .box1 {
            width: 100px;
            height: 130px;
        }
        
        .box2 {
            width: 100px;
            height: 150px;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .box3 {
            width: 100px;
            height: 100px;
        }

        .podio{
            display: flex;
            align-items: center;
            z-index: 2;
        }

        .caixa1 {
            width: 100px;
            height: 40px;   
            background: linear-gradient(to left,#929292, #E1E1E1, #929292 );

            display: grid;
            place-items: center;

            margin-bottom: -40%;
        }
    
        .caixa2{
            width: 100px;
            height: 40px;   
            background: linear-gradient(to left, #D39F25, #FFDE24, #D39F25);

            display: grid;
            place-items: center;

            margin-bottom: -30%;
        }
    
        .caixa3{
            width: 100px;
            height: 40px;   
            background: linear-gradient(to left, #9E6629, #FFC66D, #9E6629);
            margin-bottom: -45%;

            display: grid;
            place-items: center;
        }

        .medalha {
            display: flex;
        }

        .medalha div:not(:last-child) {
            margin-right: 50px;
        }

        .medalha div {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: var(--Azul-escuro);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
        }

        .medalha .ouro {
            background: #F78024;
            position: absolute;
            margin-bottom: -190px;
            margin-top: 36px;
            margin-left: -30px
        }

        .medalha .prata {
            background-color: #9531E1;
            position: absolute;
            margin-bottom: -190px;
            margin-top: 50px;
            right: 51%;
        }

        .medalha .bronze {
            background-color: #2BBEB2;
            position: absolute;
            margin-bottom: -70%;
            margin-top: 60px;
            right: calc(43% + 7px);
        }

        .ranking {
            background-color: #001f54;
            border-radius: 15px;
            padding: 10px;
            width: 400px;
            color: white;
            font-weight: bold;
            margin-left: auto;
            margin-right: auto;
            margin-top: 40px;
        }

        .row {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            background-color: #022d74;
            border-radius: 10px;
            margin-bottom: 5px;
        }

        .alternate {
            background-color: #003a99;
        }

        .position {
            width: 20%;
            text-align: left;
        }

        .name {
            width: 50%;
            text-align: center;
        }

        .votes {
            width: 30%;
            text-align: right;
        }

        .ver-projetos {
            background-color: var(--Vermelho-cor);
            color: var(--Branco-cor);
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            margin: 20px 0;
            cursor: pointer;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .ver-projetos:hover {
            background-color: darkred;
        }

        footer {
            text-align: center;
            bottom: 0;
        }

        footer img {
            width: 60px;
        }

        /* Estilos responsivos para dispositivos móveis */
        @media (max-width: 768px) {
            .ranking {
                width: 90%;
                margin: 20px auto;
                padding: 20px;
            }

            .row {
                font-size: 14px;
                padding: 8px;
            }

            .ver-projetos {
                width: 100%;
                margin: 20px auto;
            }

            .caixas {
                flex-direction: column;
                align-items: center;
            }

            .box1, .box2, .box3 {
                width: 80px;
                height: auto;
            }

            .medalha div {
                width: 50px;
                height: 50px;
            }

            .topo {
                flex-direction: column;
            }

            .logo {
                width: 100px;
            }
        }

        @media (max-width: 480px) {
            .box1, .box2, .box3 {
                width: 70px;
            }

            .topo {
                padding: 10px;
            }

            .logo {
                width: 100px;
            }

            .ver-projetos {
                padding: 8px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <header>
    </header>

    <div class="container">
        <div class="topo">
            <a href="mapa.php">
                <i class="fa-solid fa-chevron-left"></i>
            </a>
            <img src="../assets/img/logomcm.png" alt="Logo MCM" class="logo">
        </div>
        <div class="text">
            <h1>FEIRA TECNOLÓGICA 2024</h1>
            <span style="color: var(--Vermelho-cor);">ETEC Maria Cristina Medeiros</span>
        </div>
    </div>

    <div class="rank-container">
        <h1>Ranking Atualizado dos Melhores Projetos</h1>
        <div class="medalha">
            <div class="prata">PERR</div>
            <div class="ouro">PEER</div>
            <div class="bronze">PEER</div>
        </div>

        <img src="public/assets/img/trofeu.png" alt="" class="trofeu">

        <div class="podio">
            <div class="caixa1">
                2°
            </div>
            <div class="caixa2">
                1°
            </div>
            <div class="caixa3">
                3°
            </div>
        </div>

    
        <div class="caixas">
            <div class="box1">
                <div class="boxprata"></div>
                <div>Projeto PERR2<br>61 votos</div>
            </div>
            <div class="box2">
                <div>Projeto PERR<br>65 votos</div>
            </div>
            <div class="box3">
                <div>Projeto PERR ruim<br>55 votos</div>
            </div>
        </div>
    </div>

    <div class="ranking">
        <div class="row">
            <span class="position">4º</span>
            <span class="name">CATATAU</span>
            <span class="votes">50 votos</span>
        </div>
        <div class="row alternate">
            <span class="position">5º</span>
            <span class="name">CATATAU</span>
            <span class="votes">47 votos</span>
        </div>
        <div class="row">
            <span class="position">6º</span>
            <span class="name">CATATAU</span>
            <span class="votes">46 votos</span>
        </div>
        <div class="row alternate">
            <span class="position">7º</span>
            <span class="name">CATATAU</span>
            <span class="votes">45 votos</span>
        </div>
        <div class="row">
            <span class="position">8º</span>
            <span class="name">CATATAU</span>
            <span class="votes">46 votos</span>
        </div> 
        <div class="row alternate">
            <span class="position">9º</span>
            <span class="name">CATATAU</span>
            <span class="votes">45 votos</span>
        </div>
        <div class="row">
            <span class="position">10º</span>
            <span class="name">CATATAU</span>
            <span class="votes">46 votos</span>
        </div> 
    </div>

    <a href="projeto.php">
        <button class="ver-projetos">Ver Projetos</button>
    </a>

    <footer>
        <img src="../assets/img/cps.png" alt="Logo MCM">
    </footer>
</body>
</html>
