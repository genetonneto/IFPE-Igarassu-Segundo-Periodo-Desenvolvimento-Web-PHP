<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 04 - Variavel de variavel</title>
</head>
<body>
    <p>Variavel de variavel</p>

    <?php
    $x = "ABC";
    $$x = "DEF";
    echo "O valor da variavel x eh $x ";
    echo "O valor da varial abc eh $ABC ";
    ?>
</body>
</html>