<?php 

$nome = $_GET['nome'];
$idade = $_GET['age'];
$estado = $_GET['estado'];

$file = fopen('pessoas.csv', 'a');
fwrite($file, "$nome, $idade, $estado\n");

?>

<h2>Valores inseridos</h2>

<p>Nome: <?= $nome ?></p>
<p>Idade: <?= $idade ?></p>
<p>Estado: <?= $estado ?></p>