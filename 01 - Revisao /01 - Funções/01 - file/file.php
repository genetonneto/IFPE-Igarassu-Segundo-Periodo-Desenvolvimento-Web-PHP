<?php
$array = file('animais.txt');
?>

<?php foreach($array as $item): ?>
    <?= $item ?>
<?php endforeach ?>