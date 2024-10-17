<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php include('../assets/components/head.php') ?>

        <!-- !AQUI VAI O CSS DA SUA PÁGINA! -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../assets/css/votaocao.css">
    </head>
    <body>
        <?php
            include('../assets/components/header.php')
        ?>

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

    

    <div class="ranking">
        <?php
            $url = 'http://localhost/API-Feira-Tecnologica/votos/contagem';
            $response = file_get_contents($url);
            $data = json_decode($response, true);

            $nomesProjetos = []; // Cache para nomes de projetos

            if(is_array($data['data'])) {   
                foreach ($data['data'] as $voto) {
                    // Ignora as posições 1, 2 e 3
                    if ($voto['posicao'] < 4) {
                        continue;
                    }

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

                    // Exibe as informações do projeto a partir da posição 4
                    ?>
                    <div class="row">
                        <span class="position"><?php echo($voto['posicao']); ?>°</span>
                        <span class="name"><?php echo($nomesProjetos[$projeto_id] ?? 'Nome não encontrado'); ?></span>
                        <span class="votes"><?php echo($voto['total_votos']); ?></span>
                    </div>
                    <?php
                }
            }
        ?>
    </div>

    <button class="ver-projetos">Ver Mais Projetos</button>

    <footer>
        <img src="../assets/img/cps.png" alt="Logo MCM">
    </footer>
        
    </body>
</html>

















    


    
