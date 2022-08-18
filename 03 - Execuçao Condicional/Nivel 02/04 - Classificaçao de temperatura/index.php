<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 04 - Classificação de temperatura</title>
</head>
<body>
    <p>Dada a temperatura, classificá-la como fria (< 15), quente (> 30) e normal (caso contrário);</p>

    <?php 

    $temperatura = 16;

    if ($temperatura <= 15){
        echo "$temperatura, temperatura fria"; 
    } else if ($temperatura >= 30){
        echo "$temperatura, temperatura quente";
    } else {
        echo "$temperatura, temperatura normal";
    }

    ?>

</body>
</html>