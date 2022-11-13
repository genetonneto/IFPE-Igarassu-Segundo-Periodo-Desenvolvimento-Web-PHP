<table>
<?php 

$handler = fopen('diasdasemana.csv', 'r');

while (true) {
    $linha = fgets($handler);
    if ($linha == false) {
        break;
    }
    $partes = explode(',', $linha);
    
    echo "<tr>";
    foreach ($partes as $item) {
    echo "<td>" . $item . "</li>";

    }
    echo "</tr>";

}
?>
</table>
