<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de nomes</title>
</head>
<body>
    <h1>Lista de Nomes:</h1>

    <ul>

    <?php
    $nomes = file('pessoas.txt');
    ?> 

    <!--
        
    <?php for ($contador = 0; $contador < sizeof($nomes);$contador++): ?>

    <li>
        <?= $nomes [$contador] ?>
    </li>
    
    <?php endfor ?>
    
    -->

    <?php  foreach($nomes as $var):  ?>
        <li class="nome"><?= $var ?></li>
    
    <?php endforeach ?>

    </ul>


</body>
</html>