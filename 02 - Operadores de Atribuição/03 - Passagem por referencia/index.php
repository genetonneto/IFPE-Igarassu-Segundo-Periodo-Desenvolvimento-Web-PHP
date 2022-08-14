<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03 - Passagem por referencia</title>
</head>
<body>
    <p>Passagem por referencia</p>
    <?php
    //PASSAGEM POR REFENCIA SIMPLES

    $a = 3;
    $b = $a;
    $b = $b + 5;
    
    echo "Variavel A vale $a ";
    echo "Variavel B vale $b ";

    //PASSAGEM POR REFENCIA COM "&" COMERCIAL

    $a = 3;
    $b = &$a;
    $b = $b + 5;
    
    echo "Variavel A vale $a ";
    echo "Variavel B vale $b ";


    ?>
</body>
</html>