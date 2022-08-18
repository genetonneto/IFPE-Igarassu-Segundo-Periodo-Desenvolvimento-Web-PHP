<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 05 - IMC</title>
</head>
<body>
    <p>Computar o Índice de Massa Corporal (peso dividido pelo quadrado da altura) e classificar o resultado 
    entre magreza (inferior a 18.5), saudável (entre 18.5 e 25), sobrepeso (acima de 25);</p>

    <?php 

    $peso = 72;
    $altura = 1.82;

    $imc = $peso / ($altura ** 2);

    if ($imc <= 18){
        echo "$imc, magreza";
    } else if ($imc >= 18.5 && $imc <= 25){
        echo "$imc, saudavel";
    } else {
        echo "$imc, sobrepeso";
    }

    ?>

</body>
</html>