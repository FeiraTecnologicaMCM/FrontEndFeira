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

    <div class="search-container">
        <input type="text" placeholder="Pesquisar projeto..." class="search-bar">
    </div>

    <div class="header">
        <button id="filter-btn" class="filter-button">Filtrar</button>
    </div>

    <div id="filter-modal" class="filter-modal">
        <h4>Curso</h4>
        <div class="filter-options cursos">
            <button class="filter-option">Administração</button>
            <button class="filter-option">Logística</button>
            <button class="filter-option">Recursos Humanos</button>
            <button class="filter-option">Informática</button>
            <button class="filter-option">Contabilidade</button>
            <button class="filter-option">Química</button>
        </div>
        <h4>Série</h4>
        <div class="filter-options series">
            <button class="filter-option">1º ano</button>
            <button class="filter-option">2º ano</button>
            <button class="filter-option">3º ano</button>
            <button class="filter-option">1º módulo</button>
            <button class="filter-option">2º módulo</button>
            <button class="filter-option">3º módulo</button>
        </div>
        <div class="filter-buttons">
            <button class="apply-button">Aplicar</button>
            <button class="clear-button">Limpar</button>
        </div>
    </div>

    <div class="section">
        <h2>Manhã</h2>
        <div class="grid">
            <div class="box">
                <img src="../assets/img/Rize.png" alt="Imagem 1">
                <span class="name">Tokyo Ghoul</span>
            </div>
            <div class="box">
                <img src="../assets/img/gojo.jpg" alt="Imagem 2">
                <span class="name">Jujutsu Kaisen</span>
            </div>
            <div class="box">
                <img src="../assets/img/Charlotte.jpg" alt="Imagem 3">
                <span class="name">Charlotte</span>
            </div>
            <div class="box">
                <img src="../assets/img/kuro.jpg" alt="Imagem 4">
                <span class="name">Kuroshitsuji</span>
            </div>
            <div class="box">
                <img src="../assets/img/diabolik.jpg" alt="Imagem 5">
                <span class="name">CAPS</span>
            </div>
            <div class="box">
                <img src="../assets/img/magi.jpg" alt="Imagem 6">
                <span class="name">Magi</span>
            </div>
        </div>
    </div>

    <div class="section">
        <h2>Tarde</h2>
        <div class="grid">
            <div class="box">
                <img src="https://via.placeholder.com/200" alt="Imagem 1">
                <span class="name">Nome</span>
            </div>
            <div class="box">
                <img src="https://via.placeholder.com/200" alt="Imagem 2">
                <span class="name">Nome</span>
            </div>
            <div class="box">
                <img src="https://via.placeholder.com/200" alt="Imagem 3">
                <span class="name">Nome</span>
            </div>
            <div class="box">
                <img src="https://via.placeholder.com/200" alt="Imagem 4">
                <span class="name">Nome</span>
            </div>
            <div class="box">
                <img src="https://via.placeholder.com/200" alt="Imagem 5">
                <span class="name">Nome</span>
            </div>
            <div class="box">
                <img src="https://via.placeholder.com/200" alt="Imagem 6">
                <span class="name">Nome</span>
            </div>
        </div>
    </div>

    <div class="section">
        <h2>Noite</h2>
        <div class="grid">
            <div class="box">
                <img src="https://via.placeholder.com/200" alt="Imagem 1">
                <span class="name">Nome</span>
            </div>
            <div class="box">
                <img src="https://via.placeholder.com/200" alt="Imagem 2">
                <span class="name">Nome</span>
            </div>
            <div class="box">
                <img src="https://via.placeholder.com/200" alt="Imagem 3">
                <span class="name">Nome</span>
            </div>
            <div class="box">
                <img src="https://via.placeholder.com/200" alt="Imagem 4">
                <span class="name">Nome</span>
            </div>
            <div class="box">
                <img src="https://via.placeholder.com/200" alt="Imagem 5">
                <span class="name">Nome</span>
            </div>
            <div class="box">
                <img src="https://via.placeholder.com/200" alt="Imagem 6">
                <span class="name">Nome</span>
            </div>
        </div>
    </div>
    <script src="../assets/js/projeto.js"></script>
</body>
</html>