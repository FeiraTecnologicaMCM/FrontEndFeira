<?php
// Configurações do banco de dados
$host = 'localhost'; // Altere conforme necessário
$db = 'seu_banco_de_dadofeira'; // Nome do seu banco de dados
$user = 'seu_usuario'; // Nome de usuário do banco de dados
$pass = 'sua_senha'; // Senha do banco de dados

// Conexão com o banco de dados
$conn = new mysqli($host, $user, $pass, $db);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Consulta para obter os projetos ordenados por votos
$sql = "SELECT name, votes FROM projects ORDER BY votes DESC LIMIT 3";
$result = $conn->query($sql);

$ranking = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $ranking[] = $row; // Adiciona cada projeto ao array de ranking
    }
}

// Retorna os dados como JSON
header('Content-Type: application/json');
echo json_encode($ranking);

$conn->close();
?>
