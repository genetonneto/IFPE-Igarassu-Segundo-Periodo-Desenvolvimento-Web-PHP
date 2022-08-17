<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01 Quadrado de um numero maior do que ele multiplicado por 10</title>
</head>
<body>
    <p>Testar se o quadrado de um número é maior do que ele multiplicado por 10;</p>
    <?php
    $numero = 7;
    $quadrado = $numero * $numero;
    $multiplica = $numero * 10;

    if($quadrado > $multiplica){
        echo "Quadrado eh maior ";
    } else if ($quadrado == $multiplica){
        echo "Os valores sao iguais ";
    } else {
        echo "Multiplicado por 10 eh maior ";
    }
    ?>
</body>
</html>