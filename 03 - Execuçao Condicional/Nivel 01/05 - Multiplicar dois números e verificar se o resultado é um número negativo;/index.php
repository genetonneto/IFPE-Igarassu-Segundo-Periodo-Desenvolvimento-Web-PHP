<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 05 - Multiplicar dois números e verificar se o resultado é um número negativo;</title>
</head>
<body>
    <p>Multiplicar dois números e verificar se o resultado é um número negativo;</p>

    <?php 

    $n1 = -2;
    $n2 = 5;

    $mult = $n1 * $n2;

    if ($mult > 0){
        echo "$mult eh um numero positivo";
    } else {
        echo "$mult eh um numero negativo";
    }

    ?>

</body>
</html>