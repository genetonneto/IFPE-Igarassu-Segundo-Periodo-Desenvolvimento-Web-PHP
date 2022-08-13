<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02 - Média ponderada de quatro numeros</title>
</head>
<body>
    <p>Imprimir média ponderada de quatro números (pesos 3, 1, 4 e 2);</p>
    <?php
        $n1 = 7;
        $n2 = 6;
        $n3 = 8;
        $n4 = 7.5;

        $pesos = 3 + 1 + 4 + 2;

        $mediaPonderada = ($n1 * 3) + ($n2 * 1) + ($n3 * 4) + ($n4 * 2);

        $resultado = $mediaPonderada / $pesos;
        echo "A media ponderada vale $resultado";
    ?>

</body>
</html>