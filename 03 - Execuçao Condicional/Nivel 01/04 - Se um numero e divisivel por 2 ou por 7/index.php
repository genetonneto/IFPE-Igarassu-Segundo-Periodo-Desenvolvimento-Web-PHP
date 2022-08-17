<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 04 - Se um numero é divisivel por 2 ou por 7</title>
</head>
<body>
    <p>Testar se um número é divisível por 2 ou por 7 </p>

    <?php
    $numero = 7;

    if($numero % 2 == 0){
        echo "O numero eh divisivel por 2";
    } else {
        echo "O numero eh divisivel por 7";
    }

    ?>

</body>
</html>