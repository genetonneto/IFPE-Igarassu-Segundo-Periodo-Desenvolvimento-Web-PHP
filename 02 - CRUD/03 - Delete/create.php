<?php 

$dia = $_POST['dia'];
$treino01 = $_POST['treino01'];
$treino02 = $_POST['treino02'];
$treino03 = $_POST['treino03'];
$repetiçoes = $_POST['repetiçoes'];

$file = fopen('dados.csv', 'r');
while($linha = fgets($file)){
    $partes = explode(',', $linha);
    if($partes[0] == $dia){
        echo "Dia da semana ja cadastrado";
        exit();
    }
}

$file = fopen('dados.csv', 'a');
fwrite($file, "$dia, $treino01, $treino02, $treino03, $repetiçoes\n");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD-C</title>
</head>
<body>
    <table>
        <th>
            <h4>Treino Adicionado</h4>
            <p>Dia: <?= $dia ?></p>
            <p>Treino01: <?= $treino01 ?></p>
            <p>Treino02: <?= $treino02 ?></p>
            <p>Treino03: <?= $treino03 ?></p>
            <p>Repetiçoes: <?= $repetiçoes ?></p>
        </th>
    </table>
    <a href="table.php">Return</a>
</body>
</html>