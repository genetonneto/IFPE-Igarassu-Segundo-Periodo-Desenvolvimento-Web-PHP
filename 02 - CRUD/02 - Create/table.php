<?php $file = fopen('treino.csv', 'r') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha de Treino</title>
</head>
<style>
    * { font-family: sans-serif; }

    table,th, td {
        text-align: center;
        border: 2px solid black;
    }  

    th { background-color: #F2B705; } 

    td { background-color: #03A63C; }
</style>
<body>
    <table>
        <th colspan="100px">Ficha de Treino</th>
        <tr>
            <td style="background-color:#F28705;">Dia</td>
            <td style="background-color:#F28705;" colspan="100px">Treino</td>
            <?php while($linha = fgets($file)): ?>
                <tr>
                    <?php $partes = explode(',', $linha) ?>
                    <?php foreach($partes as $dados): ?>
                        <td><?= $dados ?></td>
                    <?php endforeach ?>   
                </tr>
            <?php endwhile ?>
        </tr>
    </table>
    <hr>
    <a href="form.html">Adicionar</a>
</body>
</html>