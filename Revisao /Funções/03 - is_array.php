<!-- is_array — Verifica se a variável é um array -->

<?php 

$array = [
    [1,2,3],
    [true, false, 'Geneton']
];

echo is_array($array) ? 'Array' : 'Not array';

?>