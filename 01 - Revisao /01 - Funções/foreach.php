<!-- 
    O foreach funciona somente em arrays e objetos, e emitirá um erro ao tentar usá-lo em uma variável com um tipo de dado diferente ou em uma variável não inicializada;
 -->

<?php

$arr = [1, 2, 3, 4];
foreach ($arr as $valor) { // Cada elemento de array vai ser passado para variavel valor;
    echo $valor . "\n"; // Mando imprimir meu valor;
}

?>