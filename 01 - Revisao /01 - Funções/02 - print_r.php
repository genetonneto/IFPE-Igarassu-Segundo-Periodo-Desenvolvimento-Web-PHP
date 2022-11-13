<!--  Imprime informação sobre uma variável de forma legível -->
<?php

$array = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

$arrayTri = [
    [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ]
];

echo "<pre>";
    echo "<hr>";
        print_r($array);
    echo "<hr>";
        print_r($arrayTri);
    echo "<hr>";
echo "</pre>";

?>