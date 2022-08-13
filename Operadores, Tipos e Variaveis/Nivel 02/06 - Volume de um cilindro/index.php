<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volume de um Cilindro</title>
</head>
<body>
    <p>Exercicio 06 - Imprimir o volume de um cilindro (área da base vezes a altura);</p>

    <?php
    // V = pi * R² * h

    $pi = 3.14;
    $raio = 3;
    $altura = 5;

    $volume = $pi * ($raio ** 2) * $altura;
    echo "O volume do cilindro eh igual a $volume";
    ?>
</body>
</html>