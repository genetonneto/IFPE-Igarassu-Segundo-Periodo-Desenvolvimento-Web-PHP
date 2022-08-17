<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 07 - Dividir a por b e verificar se o resultado é maior do que a;</title>
</head>
<body>
    <p>Dividir a por b e verificar se o resultado é maior do que a;</p>

    <?php 

    $a = 20;
    $b = 2;

    $resultado = $a / $b;

    if ($resultado > $a){
        echo "Resultado eh maior que a";
    } else if ($resultado == $a){
        echo "Resultado igual ao valor $a";
    } else {
        echo "O resultado eh menor que $a";
    }

    ?> 

</body>
</html>