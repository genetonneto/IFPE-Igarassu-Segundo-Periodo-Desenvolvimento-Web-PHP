<?php
    // _GET é uma variavel superglobal
    // var_dump($_GET);
?>

<?php
    $fp = fopen('comidas.txt', 'a');
    fwrite($fp, $_GET['nome'] . "" . $_GET['complemento'] . "\n");
?>

<?php
    header('location: index.php');
?>