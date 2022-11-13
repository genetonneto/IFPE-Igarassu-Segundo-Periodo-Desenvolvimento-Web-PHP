<?php
$array = [1, 2, 3, 4, 5];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New List</title>
</head>

<body>
    <ul>
        <?php foreach ($array as $item) : ?>
            <li><?= $item ?></li>
        <?php endforeach ?>
    </ul>
</body>

</html>