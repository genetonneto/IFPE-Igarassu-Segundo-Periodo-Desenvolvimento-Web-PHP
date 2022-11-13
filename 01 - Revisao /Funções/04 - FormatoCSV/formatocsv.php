<table>
<?php 
// Arquivo CSV ou Comma-separated values (Basicamente, arquivo de planilha);
$handler = fopen('dados.csv', 'r');

while (true) {
    $linha = fgets($handler);
    if ($linha === false) {
        break;
    }
    // explode: Quebra uma string é um determinado caracter,(',') remove as minhas virgulas e transforma cada valor dentro de um array;
    $partes = explode(',', $linha);
    echo "<tr>";
    foreach($partes as $elementos ){
        echo "<td>" . $elementos . "</li>";
    }
    echo "</tr>";
}

?>
</table>