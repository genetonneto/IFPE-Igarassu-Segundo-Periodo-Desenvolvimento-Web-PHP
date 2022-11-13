<table>
<?php 

$handler = fopen('ficha.csv', 'r');

while (true) {
    
    $linha = fgets($handler);
    
    if ($linha === false) {
        break;
    }
    
    $partes = explode(',', $linha);
    
    echo "<th>";
    foreach ($partes as $item) {
    echo "<td>" . $item . "</li>";

    }
    echo "</tr>";
} 
?>
</table>