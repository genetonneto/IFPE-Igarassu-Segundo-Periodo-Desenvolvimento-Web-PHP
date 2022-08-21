<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IFPE IPI - Lista de Disciplinas</title>
</head>
<body>
    <h1>IPI - Segundo Periodo</h1>
    <ul>

    <?php $disciplinas = file('Disciplinas.txt'); ?>

    <?php 
    for($contador = 0; $contador < sizeof($disciplinas); $contador++):
    ?>

    <li> <?= $disciplinas[$contador] ?> </li>

    <?php endfor ?>

    </ul>
</body>
</html>