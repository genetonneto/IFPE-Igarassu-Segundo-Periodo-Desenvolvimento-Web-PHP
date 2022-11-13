<!-- <?php
$array = file('nomes.txt');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach($array as $item): ?>
            <li><?= $item ?></li>
        <?php endforeach ?>
    </ul>
</body>
</html>
 -->
<?php 
    $array = file('nomes.txt');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach($array as $item): ?>
            <li><?= $item ?></li>
        <?php endforeach ?>
    </ul>
</body>
</html>