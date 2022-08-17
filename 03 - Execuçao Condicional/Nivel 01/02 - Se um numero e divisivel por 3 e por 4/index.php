<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02 - Se um numero é divisivel por 3 e por 4</title>
</head>
<body>
    <p>Testar se um numero é divisivel por 3 e por 4</p>

    <?php
    $numero = 12;
    
    if($numero % 3 == 0 && $numero % 4 == 0){
        echo "O numero eh divisivel por 3 e por 4";
    }
    else {
        echo "O numero nao eh divisivel";
    }
    ?>
</body>
</html>