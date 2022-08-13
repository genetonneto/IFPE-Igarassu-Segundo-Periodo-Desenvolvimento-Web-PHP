<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Execicio 07 - Equaçao</title>
</head>
<body>
    <p>Solucionar a equação: f(x) = x² + 2x – 3, para uma valor determinado de x:</p>

    <?php
    $a = 1;
    $b = 2;
    $c = -3;

    $delta = ($b ** 2) - (4 * $a * $c);

    $x1 = (-$b + sqrt($delta)) / (2 * $a);
    echo "O valor da raiz de X1 eh $x1";

    $x2 = (-$b - sqrt($delta)) / (2 * $a);
    echo "O valor da raiz de X2 eh $x2";
    ?>
</body>
</html>