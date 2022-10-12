<?php
$array = [
    ['Geneton', 23, 'IFPE Igarassu'],
    ['Geovanny', 22, 'UFPE'],
    ['Maria', 49, 'Uninassau']
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Arrays e HTML</title>
</head>
<style>
    *{
        background-color: tomato;
        color: black;
        text-align: center;
    }
    h1 {
        font-family: sans-serif;
    }

    table, th, td {
        background-color: white;
        border-radius: 10px;
        border: 1px solid black;       
    }

</style>

<body>
    <h1>Arrays e HTML</h1>
    <table style="margin: auto;">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Instituição</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($array as $element) : ?>
                <tr>
                    <td><?= $element[0] ?></td>
                    <td><?= $element[1] ?></td>
                    <td><?= $element[2] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <hr>
</body>

</html>