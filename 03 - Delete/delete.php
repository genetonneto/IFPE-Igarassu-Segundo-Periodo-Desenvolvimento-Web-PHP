<?php

$dia = $_GET['dia'];

$conteudo = '';

$file = fopen('dados.csv', 'r');
while($linha = fgets($file)){
    $partes = explode(',', $linha);
    if($partes[0] != $dia){
        $conteudo = $conteudo .$linha;
    }
}

file_put_contents('dados.csv', $conteudo);

header("location :table.php");

?>