<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03 - Cassificar o valor da média das notas de um estudante.js</title>
</head>
<body>
    
    <p>Dados quatro notas, computar e classificar o valor da média das notas de um  estudante como 
    aprovado (> 6), reprovado (< 4) e recuperação (caso contrário)</p>

    <?php 

    $nota1 = 4.4;
    $nota2 = 1.6;
    $nota3 = 2.8;
    $nota4 = 3.7;

    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4; 

    if ($nedia > 6){
        echo "$media, O estudante foi aprovado";
    } else  if ($media <= 4){
        echo "$media, O estudante foi reprovado";
    } else {
        echo "$media, O estudante foi para recuperação";
    }

    ?>

</body>
</html>