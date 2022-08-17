<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 06 - Dividir dois números inteiros e verificar se o resultado é divisível por 10;</title>
</head>
<body>
    <p>Dividir dois números inteiros e verificar se o resultado é divisível por 10;</p>

    <?php
    $n1 = 20;
    $n2 = 2;

    $dividi = $n1 / $n2; 

    if ($dividi % 10 == 0){
        echo "eh divisivel";
    } else {
        echo "Nao eh divisivel";
    }

    ?>

</body>
</html>