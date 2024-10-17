<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $projeto_id = $_POST['projeto_id'];
        $telefone = $_POST['nome_novo_aluno'];

        $data = array("projeto_id" => $projeto_id , "telefone" => $telefone);
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/json\r\n",
                'method'  => 'PUT',
                'content' => json_encode($data),
            ),
        );

        $context  = stream_context_create($options);
        $url = 'http://localhost/API-Feira-Tecnologica/votos/registrar';
        $result = file_get_contents($url, false, $context);

        if ($result === FALSE) {
            echo "<p>Erro ao atualizar aluno.</p>";
        } else { ?>
            <script>
                // Exibe o alerta
                alert('Operação concluída com sucesso!');

                // Após o usuário clicar em "OK", redireciona para outra página
                window.location.href = 'lista_alunos.php'; // Altere para a página de destino
            </script>
        <?php    
        }
    }
?>