<?php $file = fopen('pessoas.csv', 'r'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dados</h1>
    <table>
    <?php while($linha = fgets($file)):  ?>   
        <tr>
            <?php $partes = explode(',', $linha) ?>
            <?php foreach($partes as $dado):  ?>
            <td><?= $dado ?></td>
            <?php endforeach ?>
        </tr>
       <?php endwhile ?>
    </table>
    <hr>
    <a href="form.html">Adicionar</a>
</body>
</html>