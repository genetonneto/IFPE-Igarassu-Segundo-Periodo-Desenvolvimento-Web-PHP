<?php

$dia = $_GET['dia'];
$treino01 = $_GET['treino01'];
$treino02 = $_GET['treino02'];
$treino03 = $_GET['treino03'];

$file = fopen('treino.csv', 'a');
fwrite($file, "$dia, $treino01, $treino02, $treino03\n");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<style>
    * {
        font-family: sans-serif;
    }

    table, th, td {
        text-align: center;
        border: 2px solid black;
    }

    p {
        text-align: center;
        border: 2px solid black;
    }
</style>
<body>
    <table>
        <th colspan="100px">
            <h2>Treino Adicionado</h2>
            <p>Dia: <?= $dia ?></p>
            <p>Treino:<?= $treino01 ?></p>
            <p>Treino:<?= $treino02 ?></p>
            <p>Treino:<?= $treino03 ?></p>
        </th>
    </table>
    <a href="table.php">Voltar</a>
</body>
</html>