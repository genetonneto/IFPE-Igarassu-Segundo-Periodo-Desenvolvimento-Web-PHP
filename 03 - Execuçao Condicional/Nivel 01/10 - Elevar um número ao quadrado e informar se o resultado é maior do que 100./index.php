<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 10 - Elevar um número ao quadrado e informar se o resultado é maior do que 100.</title>
</head>
<body>
    <p>Elevar um número ao quadrado e informar se o resultado é maior do que 100.</p>    

    <?php 

    $numero = 20;
    $numeroQ = $numero ** 2;

    if($numeroQ > 100){
       echo "O numero ao quadrado e maior que 100"; 
    } else {
        echo "O numero ao quadrado nao e maior que e 100";
    }

    ?>

</body>
</html>