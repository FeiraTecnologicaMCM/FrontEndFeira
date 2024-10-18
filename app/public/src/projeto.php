<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetos da Feira Tecnológica</title>
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/projeto.css">
    <?php
            include('../assets/components/head.php')
        ?>
</head>
<body>
        <?php
            include('../assets/components/header.php')
         ?>
     
     <div class="header">
        <h1 class="H1">Projetos da Feira Tecnológica</h1>
    </div>         

    <div class="header">
        <button id="filter-btn" class="filter-button">Filtrar</button>
    </div>

    <div id="filter-modal" class="filter-modal">
        <h4>Curso</h4>
        <div class="filter-options cursos">
            <a href="projeto.php?filtro=ADM" class="filter-option">Administração</a>
            <a href="projeto.php?filtro=logistica" class="filter-option">Logística</a>
            <a href="projeto.php?filtro=RH" class="filter-option">Recursos Humanos</a>
            <a href="projeto.php?filtro=informatica" class="filter-option">Informática</a>
            <a href="projeto.php?filtro=contabilidade" class="filter-option">Contabilidade</a>
            <a href="projeto.php?filtro=quimica" class="filter-option">Química</a>
        </div>
        <h4>Periodo</h4>
        <div class="filter-options series">
            <a href="projeto.php?filtro=padrao" class="filter-option">Todos</a>
            <a href="projeto.php?filtro=manha" class="filter-option">Manhã</a>
            <a href="projeto.php?filtro=tarde" class="filter-option">Tarde</a>
            <a href="projeto.php?filtro=noite" class="filter-option">Noite</a>
        </div>
    </div>

    <?php

        $filtro = $_GET['filtro'] ?? 'padrao';

        switch($filtro){
            case "padrao":
                ?>
                    <div class="section">
                        <h2>Manhã</h2>
                        <div class="grid">
                            <?php
                                $url = 'http://localhost/API-Feira-Tecnologica/projects/getbyperiodo/manha';
                                $response = file_get_contents($url);
                                $data = json_decode($response, true);

                                if (is_array($data['data'])) {
                                    // Embaralha os projetos para exibi-los de forma aleatória
                                    shuffle($data['data']);

                                    // Limita a exibição a no máximo 6 projetos
                                    $projetosParaExibir = array_slice($data['data'], 0, 6);

                                    foreach ($projetosParaExibir as $projeto) {
                                        $curso = htmlspecialchars($projeto['curso'], ENT_QUOTES, 'UTF-8');
                                        $nome = htmlspecialchars($projeto['nome'], ENT_QUOTES, 'UTF-8');
                                        $id_stand = htmlspecialchars($projeto['id_stand'], ENT_QUOTES, 'UTF-8');
                                        $imagemPath = "../assets/img/$curso.jpeg";

                                        // Verifica se a imagem existe; se não, usa uma imagem padrão
                                        if (!file_exists($imagemPath)) {
                                            $imagemPath = "../assets/img/padrao.jpeg";
                                        }
                                        ?>
                                        <a href="infoprojetos.php?id=<?php echo $id_stand; ?>" class="box">
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
                    <div class="section">
                        <h2>Tarde</h2>
                        <div class="grid">
                        <?php
                                $url = 'http://localhost/API-Feira-Tecnologica/projects/getbyperiodo/tarde';
                                $response = file_get_contents($url);
                                $data = json_decode($response, true);

                                if (is_array($data['data'])) {
                                    // Embaralha os projetos para exibi-los de forma aleatória
                                    shuffle($data['data']);

                                    // Limita a exibição a no máximo 6 projetos
                                    $projetosParaExibir = array_slice($data['data'], 0, 6);

                                    foreach ($projetosParaExibir as $projeto) {
                                        $curso = htmlspecialchars($projeto['curso'], ENT_QUOTES, 'UTF-8');
                                        $nome = htmlspecialchars($projeto['nome'], ENT_QUOTES, 'UTF-8');
                                        $id_stand = htmlspecialchars($projeto['id_stand'], ENT_QUOTES, 'UTF-8');
                                        $imagemPath = "../assets/img/$curso.jpeg";

                                        // Verifica se a imagem existe; se não, usa uma imagem padrão
                                        if (!file_exists($imagemPath)) {
                                            $imagemPath = "../assets/img/padrao.jpeg";
                                        }
                                        ?>
                                        <a href="infoprojetos.php?id=<?php echo $id_stand; ?>" class="box">
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
                    <div class="section">
                        <h2>Noite</h2>
                        <div class="grid">
                        <?php
                                $url = 'http://localhost/API-Feira-Tecnologica/projects/getbyperiodo/noite';
                                $response = file_get_contents($url);
                                $data = json_decode($response, true);

                                if (is_array($data['data'])) {
                                    // Embaralha os projetos para exibi-los de forma aleatória
                                    shuffle($data['data']);

                                    // Limita a exibição a no máximo 6 projetos
                                    $projetosParaExibir = array_slice($data['data'], 0, 6);

                                    foreach ($projetosParaExibir as $projeto) {
                                        $curso = htmlspecialchars($projeto['curso'], ENT_QUOTES, 'UTF-8');
                                        $nome = htmlspecialchars($projeto['nome'], ENT_QUOTES, 'UTF-8');
                                        $id_stand = htmlspecialchars($projeto['id_stand'], ENT_QUOTES, 'UTF-8');
                                        $imagemPath = "../assets/img/$curso.jpeg";

                                        // Verifica se a imagem existe; se não, usa uma imagem padrão
                                        if (!file_exists($imagemPath)) {
                                            $imagemPath = "../assets/img/padrao.jpeg";
                                        }
                                        ?>
                                        <a href="infoprojetos.php?id=<?php echo $id_stand; ?>" class="box">
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
                <?php
                break;
            case 'ADM':
                ?>
                    <div class="section">
                        <h2>Administração</h2>
                        <div class="grid">
                            <?php
                                $url = 'http://localhost/API-Feira-Tecnologica/projects/getbycourse/ADM';
                                $response = file_get_contents($url);
                                $data = json_decode($response, true);

                                if(is_array($data['data'])){   
                                    foreach ($data['data'] as $projeto){
                                        ?>
                                            <a href="infoprojetos.php?id=<?php echo($projeto['id_stand']);?>" class="box">
                                                <img src="../assets/img/<?php echo($projeto['curso']) ?>.jpeg" alt="Imagem 1">
                                                <span class="name"><?php echo($projeto['nome']) ?></span>
                                            </a>
                                        <?php
                                    }
                                }
                            ?>
                        </div> 
                    </div>
                <?php
                break;
            case 'logistica':
                ?>
                    <div class="section">
                        <h2>Logística</h2>
                        <div class="grid">
                            <?php
                                $url = 'http://localhost/API-Feira-Tecnologica/projects/getbycourse/logistica';
                                $response = file_get_contents($url);
                                $data = json_decode($response, true);

                                if(is_array($data['data'])){   
                                    foreach ($data['data'] as $projeto){
                                        ?>
                                            <a href="infoprojetos.php?id=<?php echo($projeto['id_stand']);?>" class="box">
                                                <img src="../assets/img/<?php echo($projeto['curso']) ?>.jpeg" alt="Imagem 1">
                                                <span class="name"><?php echo($projeto['nome']) ?></span>
                                            </a>
                                        <?php
                                    }
                                }
                            ?>
                        </div> 
                    </div>
                <?php
                break;
            case 'RH':
                ?>
                    <div class="section">
                        <h2>Recursos Humanos</h2>
                        <div class="grid">
                            <?php
                                $url = 'http://localhost/API-Feira-Tecnologica/projects/getbycourse/RH';
                                $response = file_get_contents($url);
                                $data = json_decode($response, true);

                                if(is_array($data['data'])){   
                                    foreach ($data['data'] as $projeto){
                                        ?>
                                            <a href="infoprojetos.php?id=<?php echo($projeto['id_stand']);?>" class="box">
                                                <img src="../assets/img/<?php echo($projeto['curso']) ?>.jpeg" alt="Imagem 1">
                                                <span class="name"><?php echo($projeto['nome']) ?></span>
                                            </a>
                                        <?php
                                    }
                                }
                            ?>
                        </div> 
                    </div>
                <?php
                break;
            case 'informatica':
                ?>
                    <div class="section">
                        <h2>Informática</h2>
                        <div class="grid">
                            <?php
                                $url = 'http://localhost/API-Feira-Tecnologica/projects/getbycourse/informatica';
                                $response = file_get_contents($url);
                                $data = json_decode($response, true);

                                if(is_array($data['data'])){   
                                    foreach ($data['data'] as $projeto){
                                        ?>
                                            <a href="infoprojetos.php?id=<?php echo($projeto['id_stand']);?>" class="box">
                                                <img src="../assets/img/<?php echo($projeto['curso']) ?>.jpeg" alt="Imagem 1">
                                                <span class="name"><?php echo($projeto['nome']) ?></span>
                                            </a>
                                        <?php
                                    }
                                }
                            ?>
                        </div> 
                    </div>
                <?php
                break;
            case 'contabilidade':
                ?>
                    <div class="section">
                        <h2>Contabilidade</h2>
                        <div class="grid">
                            <?php
                                $url = 'http://localhost/API-Feira-Tecnologica/projects/getbycourse/contabilidade';
                                $response = file_get_contents($url);
                                $data = json_decode($response, true);

                                if(is_array($data['data'])){   
                                    foreach ($data['data'] as $projeto){
                                        ?>
                                            <a href="infoprojetos.php?id=<?php echo($projeto['id_stand']);?>" class="box">
                                                <img src="../assets/img/<?php echo($projeto['curso']) ?>.jpeg" alt="Imagem 1">
                                                <span class="name"><?php echo($projeto['nome']) ?></span>
                                            </a>
                                        <?php
                                    }
                                }
                            ?>
                        </div> 
                    </div>
                <?php
                break;
            case 'quimica':
                ?>
                    <div class="section">
                        <h2>Química</h2>
                        <div class="grid">
                            <?php
                                $url = 'http://localhost/API-Feira-Tecnologica/projects/getbycourse/quimica';
                                $response = file_get_contents($url);
                                $data = json_decode($response, true);

                                if(is_array($data['data'])){   
                                    foreach ($data['data'] as $projeto){
                                        ?>
                                            <a href="infoprojetos.php?id=<?php echo($projeto['id_stand']);?>" class="box">
                                                <img src="../assets/img/<?php echo($projeto['curso']) ?>.jpeg" alt="Imagem 1">
                                                <span class="name"><?php echo($projeto['nome']) ?></span>
                                            </a>
                                        <?php
                                    }
                                }
                            ?>
                        </div> 
                    </div>
                <?php
                break;
            case '1':
                echo('1');
                break;
            case '2':
                echo('2');
                break;
            case '3':
                echo('3');
                break;
            case 'manha':
                ?>
                <div class="section">
                        <h2>Manhã</h2>
                        <div class="grid">
                            <?php
                                $url = 'http://localhost/API-Feira-Tecnologica/projects/getbyperiodo/manha';
                                $response = file_get_contents($url);
                                $data = json_decode($response, true);

                                if(is_array($data['data'])){   
                                    foreach ($data['data'] as $projeto){
                                        ?>
                                            <a href="infoprojetos.php?id=<?php echo($projeto['id_stand']);?>" class="box">
                                                <img src="../assets/img/<?php echo($projeto['curso']) ?>.jpeg" alt="Imagem 1">
                                                <span class="name"><?php echo($projeto['nome']) ?></span>
                                            </a>
                                        <?php
                                    }
                                }
                            ?>
                        </div> 
                    </div>
                <?php
                break;
            case 'tarde':
                ?>
                <div class="section">
                        <h2>Tarde</h2>
                        <div class="grid">
                            <?php
                                $url = 'http://localhost/API-Feira-Tecnologica/projects/getbyperiodo/tarde';
                                $response = file_get_contents($url);
                                $data = json_decode($response, true);

                                if(is_array($data['data'])){   
                                    foreach ($data['data'] as $projeto){
                                        ?>
                                            <a href="infoprojetos.php?id=<?php echo($projeto['id_stand']);?>" class="box">
                                                <img src="../assets/img/<?php echo($projeto['curso']) ?>.jpeg" alt="Imagem 1">
                                                <span class="name"><?php echo($projeto['nome']) ?></span>
                                            </a>
                                        <?php
                                    }
                                }
                            ?>
                        </div> 
                    </div>
                <?php
                break;
            case 'noite':
                ?>
                <div class="section">
                        <h2>Noite</h2>
                        <div class="grid">
                            <?php
                                $url = 'http://localhost/API-Feira-Tecnologica/projects/getbyperiodo/noite';
                                $response = file_get_contents($url);
                                $data = json_decode($response, true);

                                if(is_array($data['data'])){   
                                    foreach ($data['data'] as $projeto){
                                        ?>
                                            <a href="infoprojetos.php?id=<?php echo($projeto['id_stand']);?>" class="box">
                                                <img src="../assets/img/<?php echo($projeto['curso']) ?>.jpeg" alt="Imagem 1">
                                                <span class="name"><?php echo($projeto['nome']) ?></span>
                                            </a>
                                        <?php
                                    }
                                }
                            ?>
                        </div> 
                    </div>
                <?php
                break;
        }
    ?>

    
    <script src="../assets/js/projeto.js"></script>
</body>
</html>