<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 06 - Dia da semana</title>
</head>
<body>
    <p>Dado o dia da semana, imprime as aulas que os estudantes do primeiro semestre terão no dia;</p>

    <?php 

$segunda = '';
$terça = '';
$quarta = '';
$quinta = '';

    if ($segunda == 2){
        echo "Seg. do Trabalho e Matematica";
    } else if ($terça == 3){
        echo "LGPD e Redes";
    } else if ($quarta == 4){
        echo "Redes e Matematica";
    } else if ($quinta == 5){
        echo "LGPD e Fundamentos da informatica";
    } else {
        echo "Sextou";
    }


    ?>

</body>
</html>