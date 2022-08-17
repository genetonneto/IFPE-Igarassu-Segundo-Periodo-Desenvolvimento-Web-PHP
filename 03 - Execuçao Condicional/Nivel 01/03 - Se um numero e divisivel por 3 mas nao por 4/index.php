<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03 - Se um numero é divisivel por 3 mas não por 4</title>
</head>
<body>
    <p>Testar se um número é divisível por 3 mas não por 4</p>

    <?php
    $numero = 15;

    if($numero % 3 == 0){
        echo "O numero eh divisivel por 3 mas nao por 4";
    } else {
        echo "O numero nao eh divisivel por 3 e sim por 4";
    }

    ?>

</body>
</html>