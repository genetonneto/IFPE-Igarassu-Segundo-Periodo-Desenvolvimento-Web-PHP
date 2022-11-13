<?php
$array = [
    [
        'nome' => 'Geneton Neto',
        'idade'  => 23,
        'nacionalidade' => 'BR'
    ],
    [
        'nome' => 'Maria Alice',
        'idade'  => 4,
        'nacionalidade' => 'US'
    ],
    [
        'nome' => 'Geovanny Oliveira',
        'idade'  => 21,
        'nacionalidade' => 'FR'
    ]
];
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
    <table>
        <tr>
            <th>Nome</th> <!-- TH para colocar os cabeçarios da minha tabela -->
            <th>Idade</th>
            <th>Nacionalidade</th>
        </tr>
    </table>

    <table>
        <?php foreach ($array as $linha) : ?>
            <tr>
                <!-- Utilizando este metodo eu consigo me aproveitar dos meus índices estarem indexados -->
                <td> <?= $linha['nome'] ?> </td>  <!-- TD para adicionar os dados da minha tabela -->
                <td> <?= $linha['idade'] ?> </td>
                <td> <?= $linha['nacionalidade'] ?> </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>