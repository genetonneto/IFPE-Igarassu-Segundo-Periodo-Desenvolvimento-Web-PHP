<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alimentos</title>
</head>
<body>
    <h1>Lista de alimentos</h1>
    <a href="test.php">Click Me</a>
    <form action="form-test.php">
        <input type="text" name="nome">
        <input type="text" name="complemento">
        <input type="submit">
    </form>

    <ul>

        <?php
        // chamo a minha lista frutas
        //$nomes = file('frutas.txt')
        $nomes = file('comidas.txt');
        ?>

        <?php for($contador = 0; $contador < sizeof($nomes); $contador++): ?>
        <li> 
            <?= $nomes[$contador] ?>
        </li>
        <?php endfor ?>

    </ul>
</body>
</html>