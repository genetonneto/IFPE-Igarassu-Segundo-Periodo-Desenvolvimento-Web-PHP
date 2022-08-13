<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03 - IMC</title>
</head>
<body>
    <p>Imprimir o indice de massa corporal(IMC)</p>
    <?php
    $peso = 75;
    $altura = 1.82;

    $imc = $peso / ($altura * $altura);
    echo "IMC igual a $imc"
    ?>

</body>
</html>