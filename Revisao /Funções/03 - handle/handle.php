<?php 
$handler = fopen('filmes.txt', 'r');

while (true) { // Laço infinito para que ele leia todo o meu filmes.txt;
    $linha = fgets($handler);
    if ($linha === false){
        break;
    }
    echo "<li>" . $linha . "</li>";
}
?>