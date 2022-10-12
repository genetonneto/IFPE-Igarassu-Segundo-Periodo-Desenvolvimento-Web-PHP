<?php

/* 
$a = 10;
$b = 10.0;
$diferentes = 'diferentes';

if ($a === $b){
    echo "iguais";
} else {
    echo $diferentes;
}

    for($i = 0; $i <= 10; $i++){
        echo $i;
    }
 */

 $a = 10;
 $b = 10.0;

function comp($a, $b){
    return $a == $b;
}

$arr = [1,2,3,4];
$arrBi = [1,2,3, 'nomes', [4,5,6]];

    for($i = 0; $i < sizeof($arrBi); $i++){
        if(is_array($arr[$i])){
            continue;
        }
        echo $arr[$i];
    }
?>