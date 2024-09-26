<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- !NOME DA PÁGINA! -->
    <title>Feira Tecnológica</title>

    <!-- !RESET! -->
    <link rel="stylesheet" href="../assets/css/reset.css">

    <!-- !CSS! -->
    <link rel="stylesheet" href="../../public/assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/cadastroprojeto.css">

    <!-- !GOOGLE FONTS! -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">

    <!-- !FONTWASOME! -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- !FAVICON! -->
    <link rel="shortcut icon" alt="logo" href="../assets/img/etecmcm.png" type="image/x-icon">
</head>
<body>
    <?php
        include('../../public/assets/components/header.php');
    ?>
    <div class="cadastro_projeto">
        <div class="header_cadastro">
            <h1>Cadastro de projetos</h1>
        </div>
        <form action="POST" class="forms_cadastro">
            <div class="item_forms">
                <h2>Número do stand</h2>
                <input type="number" name="id_stand" id="id_stand" required>
            </div>
            <div class="item_forms">
                <h2>Nome do Projeto</h2>
                <input type="text" id="nome" name="nome_projeto" required>
            </div>
            <h2>Selecione a(s) ODS do projeto</h2>
            <div class="ods_item_forms">
                <div class="opt_checkbox">
                    <input type="checkbox" name="ODS1" id="1">
                    <label for="2">ODS 1 – Erradicação da pobreza</label>
                </div>
                <div class="opt_checkbox">
                    <input type="checkbox" name="ODS2" id="2">
                    <label for="3">ODS 2 – Fome zero e agricultura sustentável</label>
                </div>
                <div class="opt_checkbox">
                    <input type="checkbox" name="ODS3" id="3">
                    <label for="3">ODS 3 – Saúde e bem-estar</label>
                </div>
                <div class="opt_checkbox">
                    <input type="checkbox" name="ODS4" id="4">
                    <label for="4">ODS 4 – Educação de qualidade</label>
                </div>
                <div class="opt_checkbox">
                    <input type="checkbox" name="ODS5" id="5">
                    <label for="5">ODS 5 – Igualdade de gênero</label>
                </div>
                <div class="opt_checkbox">
                    <input type="checkbox" name="ODS6" id="6">
                    <label for="6">ODS 6 – Água potável e saneamento</label>
                </div>
                <div class="opt_checkbox">
                    <input type="checkbox" name="ODS7" id="7">
                    <label for="7">ODS 7 – Energia limpa e acessível</label>
                </div>
                <div class="opt_checkbox">
                    <input type="checkbox" name="ODS8" id="8">
                    <label for="8">ODS 8 – Trabalho decente e crescimento econômico</label>
                </div>
                <div class="opt_checkbox">
                    <input type="checkbox" name="ODS9" id="9">
                    <label for="9">ODS 9 – Indústria, inovação e infraestrutura</label>
                </div>
                <div class="opt_checkbox">
                    <input type="checkbox" name="ODS10" id="10">
                    <label for="10">ODS 10 – Redução das desigualdades</label>
                </div>
                <div class="opt_checkbox">
                    <input type="checkbox" name="ODS11" id="11">
                    <label for="11">ODS 11 – Cidades e comunidades sustentáveis</label>
                </div>
                <div class="opt_checkbox">
                    <input type="checkbox" name="ODS12" id="12">
                    <label for="12">ODS 12 – Consumo e produção responsáveis</label>
                </div>
                <div class="opt_checkbox">
                    <input type="checkbox" name="ODS13" id="13">
                    <label for="13">ODS 13 – Ação contra a mudança global do clima</label>
                </div>
                <div class="opt_checkbox">
                    <input type="checkbox" name="ODS14" id="14">
                    <label for="14">ODS 14 – Vida na água</label>
                </div>
                <div class="opt_checkbox">
                    <input type="checkbox" name="ODS15" id="15">
                    <label for="15">ODS 15 – Vida terrestre</label>                
                </div>
                <div class="opt_checkbox">
                    <input type="checkbox" name="ODS16" id="16">
                    <label for="16">ODS 16 – Paz, Justiça e Instituições Eficazes</label>
                </div>
                <div class="opt_checkbox">
                    <input type="checkbox" name="ODS17" id="17">
                    <label for="17">ODS 17 – Parcerias e meios de implementação</label>
                </div>
            </div>
            <div class="item_forms">
                <h2>Descrição do Projeto</h2>
                <textarea name="descricao" id="descricao" cols="30" rows="10" required></textarea>
            </div>
            <div class="item_forms">
                <h2>Nome dos integrantes do Projeto</h2>
                <input type="text" id="integrantes" name="integrantes" required>
            </div>
            <div class="item_forms">
                <h2>Turma do Projeto</h2>
                <select name="turma" id="turma" required>
                    <option value="" default>Selecione a turma</option>
                    <optgroup label="Manhã">
                        <option value="1A">1A</option>
                        <option value="2A">2A</option>
                        <option value="3A">3A</option>
                        <option value="1B">1B</option>
                        <option value="2B">2B</option>
                        <option value="3B">3B</option>
                        <option value="1C">1C</option>
                        <option value="2C">2C</option>
                        <option value="3C">3C</option>
                    </optgroup>
                    <optgroup label="Tarde">
                        <option value="1F">1F</option>
                        <option value="2F">2F</option>
                        <option value="3F">3F</option>
                        <option value="1I">1I</option>
                        <option value="2I">2I</option>
                        <option value="3I">3I</option>
                    </optgroup>
                    <optgroup label="Noite">
                        <option value="1H">1H</option>
                        <option value="2H">2H</option>
                        <option value="3H">3H</option>
                        <option value="1D">1D</option>
                        <option value="2D">2D</option>
                        <option value="3D">3D</option>
                        <option value="G1">G1</option>
                        <option value="G2">G2</option>
                        <option value="K1">K1</option>
                        <option value="K2">K2</option>
                        <option value="K3">K3</option>
                    </optgroup>
                </select>
            </div>
            <div class="item_forms">
                <h2>Local do projetpo</h2>
                <select name="local" id="local" required>
                    <option value="" default>Selecione um local</option>
                    <option value="blocoA">Bloco A</option>
                    <option value="blocoB">Bloco B</option>
                    <option value="quadra">Quadra</option>
                    <option value="biblioteca">Biblioteca</option>
                </select>
            </div>
            <div class="item_forms">
                <h2>Logo do projeto</h2>
                <input type="file" name="logo" id="logo" required>
            </div>
            <input type="submit" value="ENVIAR" class="btn_enviar">
        </form>
    </div>
    <script src="../assets/js/cadastro"></script>
</body>
</html>