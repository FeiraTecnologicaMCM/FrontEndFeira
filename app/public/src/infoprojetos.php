<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info - Projetos</title>
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/infoprojetos.css">
    <?php
        include('../assets/components/head.php')
    ?>
    <style>
        /* Estilos do Modal */
        .modal {
            display: none; /* Modal começa oculto */
            position: fixed;
            z-index: 999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Fundo escuro */
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: white;
            padding: 20px;
            border-radius: 40px;
            text-align: center;
            width: 300px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            font-family: 'League Spartan', sans-serif;
        }

        .modal h2 {
            color: #E31212;
            margin-bottom: 10px;
            font-size: 30px;
        }

        .modal p {
            font-size: 20px;
            margin-bottom: 20px;
        }

        .modal button {
            width: 40%;
            padding: 10px;
            border: none;
            border-radius: 50px;
            font-size: 18px;
            font-family: 'League Spartan', sans-serif;
            cursor: pointer;
            margin: 10px;
        }

        .btn-confirm {
            background-color: #E31212;
            color: white;
        }

        .btn-cancel {
            background-color: white;
            color: #E31212;
            border: 2px solid #E31212;
        }

        .btnVoto {
            cursor: pointer;
        }
    </style>
</head>
<body>
    <?php
        include('../assets/components/header.php')
    ?>

    <div class="infoContainer">
        <h1>Projetos da feira tecnológica</h1>
        <h1 class='Quadros'>Quadro n°1</h1>
        <img class='fotoinfo' src="../assets/img/img_infoprojetos/fotoinfo.png" alt="">
        <h2>Projeto PERR - 3C</h2>
        <p class='txt'>O projeto PERR é focado no desenvolvimento de um site de apoio a Imigrantes e Refugiados no mercado de trabalho...</p>
        <h2 class='odsutilizadas'>Ods's Utilizadas</h2>
        <div class='Odss'>
            <img class='fotods' src="../assets/img/img_infoprojetos/ods1.png" alt="">
            <img class='fotods' src="../assets/img/img_infoprojetos/ods2.png" alt="">
            <img class='fotods' src="../assets/img/img_infoprojetos/ods3.png" alt="">
        </div>
        <h2 class='integrantes'>Integrantes</h2>
        <p class='txt'>Thales Magno, Memphis Depay, Rogrigo Garro, Cristiano Romero, Luciano Reis</p>

        <!-- Botão de votação -->
        <a class="btnVoto">VOTAR COMO MELHOR PROJETO</a>

        <img class='logocps' src="../assets/img/logocps.png" alt="" style="width:30%">
    </div>

    <!-- Modal de Confirmação -->
    <div id="voteModal" class="modal">
        <div class="modal-content">
            <h2>ATENÇÃO!</h2>
            <p>Só é possível escolher <strong>1 projeto</strong> como o melhor da feira tecnológica!<br> Deseja confirmar seu voto?</p>
            <button class="btn-confirm">Confirmar</button>
            <button class="btn-cancel">Voltar</button>
        </div>
    </div>

    <script>
        // Abertura do Modal ao clicar no botão de votação
        document.querySelector(".btnVoto").addEventListener("click", function(event) {
            event.preventDefault(); // Impede o comportamento padrão do link
            document.getElementById("voteModal").style.display = "flex"; // Exibe o modal
        });

        // Fechar o Modal ao clicar no botão "Voltar"
        document.querySelector(".btn-cancel").addEventListener("click", function() {
            document.getElementById("voteModal").style.display = "none"; // Fecha o modal
        });

        // Fechar o modal ao confirmar (você pode adicionar a lógica de votação aqui)
        document.querySelector(".btn-confirm").addEventListener("click", function() {
            alert("Voto confirmado!"); // Mensagem temporária de confirmação
            document.getElementById("voteModal").style.display = "none"; // Fecha o modal após confirmar
        });
    </script>
</body>
</html>
