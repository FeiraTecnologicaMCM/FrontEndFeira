<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        include('../assets/components/head.php')
    ?>
</head>
<style>
        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'League Spartan';
    }

    body {
        background-color: #ffffff;
        color: #333;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        padding: 20px;
    }

    .container {
        width: 100%;
        max-width: 400px;
        text-align: center;
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background-color: #fff;
    }

    header .logo {
        width: 100px;
        margin-bottom: 20px;
    }

    header h1 {
        color: #c80000;
        margin-bottom: 20px;
    }

    main h2 {
        font-size: 1.4em;
        color: #333;
        margin-bottom: 5px;
    }

    main p {
        font-size: 1em;
        color: #c80000;
        margin-bottom: 20px;
    }

    .objetivos {
        margin-bottom: 20px;
    }

    .objetivos img {
        width: 100%;
        max-width: 250px;
    }

    button {
        background-color: #c80000;
        color: white;
        border: none;
        padding: 15px;
        font-size: 1em;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #a00000;
    }

    footer {
        margin-top: 20px;
    }

    footer img {
        width: 80px;
    }

    /* Estilos responsivos */
    @media (min-width: 768px) {
        .container {
            max-width: 600px;
        }
    }

</style>
<body>
    <div class="container">
        <header>
            <img src="../assets/img/logomcm.png" alt="Logo MCM" class="logo">
            <h1>Bem vindo!</h1>
        </header>
        <main>
            <h2>FEIRA TECNOLÓGICA 2024</h2>
            <p>ETEC Maria Cristina Medeiros</p>
            <div class="objetivos">
                <h3>OBJETIVOS DO DESENVOLVIMENTO SUSTENTÁVEL</h3>
                <p></p>
                <img src="../assets/img/odsinicio.png" alt="Objetivos do Desenvolvimento Sustentável">
            </div>
            <a href="home.php"><button id="verMais">Ver mais</button></a>   
        </main>
        <footer>
            <img src="../assets/img/logocps.png" alt="Logo CPS">
        </footer>
    </div>
    <script src="script.js"></script>
</body>
</html>
