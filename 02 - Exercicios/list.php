<!-- 
    Uma lista com html;
 -->

<ul>
    <?php
    // O array pode estar definido em quaquer lugar, ela se comporta como uma variavel global;
    $array = [
        '1, 2, 3',
        '4, 5, 6',
        '7, 8, 9',
    ];
    ?>
    <!-- Cada elemento de array vai ser passado para variavel elementos; -->
    <?php foreach ($array as $elementos): ?>   <!-- Abri um foreach/laço -->
        <?php if(sizeof($array) >= 3): ?>  <!-- Abro um if -->
        <li class='elementos'> <!-- Agora ele vai imprimir a minha lista até encontrar o código php -->
            <?php echo $elementos ?> <!-- Mando imprimir meu elementos -->
        </li>
        <?PHP endif ?>  <!-- Fecho o if -->
    <?php endforeach ?> <!-- Fecho o foreach/laço -->
</ul>