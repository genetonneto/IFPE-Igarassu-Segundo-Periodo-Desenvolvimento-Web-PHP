<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01 - Ordem crescente de tres numeros quaisquer</title>
</head>
<body>

    <p>Dados três números quaisquer, imprimi-los em ordem crescente;</p>

    <?php

    $n1 = 7;
    $n2 = 11;
    $n3 = 1;

    if($n1 < $ $n2 && $n2 < $n3){
        echo "$n1, $n2, $n3";
    } else if ($n1 < $n3 && $n3 < $n2){
        echo "$n1, $n3, $n2";
    } else if ($n2 < $n1 && $n1 < $n3){
        echo "$n2, $n1, $n3"; 
    } else if ($n2 < $n3 && $n3 < $n1){
        echo "$n2, $n3, $n1"; 
    } else if ($n3 < $n1 && $n1 < $n2){
        echo "$n3, $n1, $n2"; 
    } else if ($n3 < $n2 && $n2 < $n1){
        echo "$n3, $n2, $n1"; 
    }

    ?>

</body>
</html>