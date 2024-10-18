<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $projeto_id = $_POST['projeto_id'];
        $telefone = $_POST['telefone'];
        
        $data = array("projeto_id" => $projeto_id , "telefone" => $telefone);

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'localhost/api-feira-tecnologica/votos/registrar',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
        ),
        ));

        $response = curl_exec($curl);
        $response = json_decode($response, true);
        curl_close($curl);
        

        if ($response['code'] == 400) {
            echo "<p>Telefone não existente.</p>";
        }elseif($response['code'] == 403){
            echo "<p>Erro ao votar (telefone já usado).</p>";
            ?>
                <script>
                    const spanNome = document.getElementById('span_telefone');

                    spanNome.classList.add('active');
                </script>
            <?php

        } else { ?>
            <script>
                // Exibe o alerta
                alert('Voto registrado!');

                // Após o usuário clicar em "OK", redireciona para outra página
                window.location.href = 'projeto.php'; // Altere para a página de destino
            </script>
        <?php    
        }
    }
?>
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

        <?php
            $id = $_GET['id'];

            $url = "http://localhost/API-Feira-Tecnologica/projects/getbyid/$id";
            $response = file_get_contents($url);
            $data = json_decode($response, true);

            if(is_array($data['data'])){   
                foreach ($data['data'] as $projeto){
                    ?>
                        <h2><?php echo($projeto['nome']) ?> - <?php echo($projeto['turma']) ?></h2>
                        <h1 class='Quadros'>Local: <?php echo($projeto['local']) ?></h1>
                        <div class="container_itens">
                            <h2 class='integrantes'>Descricao</h2>
                            <p class='txt'><?php echo($projeto['descricao']) ?></p>
                        </div>
                        <div class="container_itens">
                            <h2 class='odsutilizadas'>Ods Utilizada</h2>
                            <div class='Odss'>
                                <img class='fotods' src="../assets/img/ods/<?php echo($projeto['ods']) ?>.png" alt="">
                            </div>
                        </div>
                        
                        <div class="container_itens">
                            <h2 class='integrantes'>Integrantes</h2>
                            <p class='txt'><?php echo($projeto['integrantes']) ?></p>
                        </div>
                        <!-- Botão de votação -->
                        <a class="btnVoto">VOTAR COMO MELHOR PROJETO</a>

                        <img class='logocps' src="../assets/img/logocps.png" alt="" style="width:30%">
                    </div>

                    <!-- Modal de Confirmação -->
                    <form id="voteModal" class="modal" method="POST">
                        <div class="modal-content">
                            <h2>ATENÇÃO!</h2>
                            <p>Só é possível escolher <strong>1 projeto</strong> por telefone como o melhor da feira tecnológica!</p>
                            <input type="text" name="projeto_id" id="projeto_id" class="projeto_id" value="<?php echo($id); ?>">
                            <span>Digite o seu telefone</span>
                            <span id="span_telefone">TELEFONE JÁ CADASTRADO</span>
                            <input type="number" name="telefone" id="telfone">
                            <p> Deseja confirmar seu voto?</p>
                            <button class="btn-confirm" type="submit">Confirmar</button>
                            <button class="btn-cancel">Voltar</button>
                        </div>
                    </form>

                    <?php
                }
            }
        ?>
        
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

    </script>
</body>
</html>
