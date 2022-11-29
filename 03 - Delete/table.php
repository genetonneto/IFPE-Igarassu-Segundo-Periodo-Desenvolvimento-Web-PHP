<?php $file = fopen('dados.csv', 'r') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD-R</title>
</head>
<body>
    <table>
        <th>Ficha de treino</th>
        <tr>
            <td>Dia</td>
            <td>Treino</td>
            <td>Treino</td>
            <td>Treino</td>
            <td>Repetiçoes</td>
            <?php while($linha = fgets($file)): ?>
                <tr>
                    <?php $partes = explode(',', $linha) ?>
                    <?php foreach($partes as $item): ?>
                        <td><?= $item ?></td>
                        <?php endforeach ?>
                        <td>
                            <a href="delete.php?dia=<?= $partes[0] ?>"></a>
                    </td>
                </tr>
            <?php endwhile ?>
        </tr>
    </table>
    <a href="form.html">Adicionar</a>
</body>
</html>


