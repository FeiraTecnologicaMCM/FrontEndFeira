<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $url = 'http://localhost/API-Feira-Tecnologica/votos/contagem';
        $response = file_get_contents($url);
        $data = json_decode($response, true);

        if(is_array($data['data'])){   
            foreach ($data['data'] as $voto) {
                echo($voto['total_votos']);
            }
        }else{
            
        }
    
    ?>
</body>
</html>