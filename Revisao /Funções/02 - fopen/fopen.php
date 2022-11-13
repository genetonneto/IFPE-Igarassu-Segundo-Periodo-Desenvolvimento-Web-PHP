<!-- fopen — Abre um arquivo ou URL -->

<!--
Lista dos possíveis modos de fopen() utilizando mode:

'r'	Abre somente para leitura; coloca o ponteiro do arquivo no começo do arquivo.
'r+'	Abre para leitura e escrita; coloca o ponteiro do arquivo no começo do arquivo.
'w'	Abre somente para escrita; coloca o ponteiro do arquivo no começo do arquivo e reduz o comprimento do arquivo para zero. Se o arquivo não existir, tenta criá-lo.
'w+'	Abre para leitura e escrita; coloca o ponteiro do arquivo no começo do arquivo e reduz o comprimento do arquivo para zero. Se o arquivo não existir, tenta criá-lo.
'a'	Abre somente para escrita; coloca o ponteiro do arquivo no final do arquivo. Se o arquivo não existir, tenta criá-lo.
'a+'	Abre para leitura e escrita; coloca o ponteiro do arquivo no final do arquivo. Se o arquivo não existir, tenta criá-lo.
'x'	Cria e abre o arquivo somente para escrita; coloca o ponteiro no começo do arquivo. Se o arquivo já existir, a chamada a fopen() falhará, retornando false e gerando um erro de nível E_WARNING. Se o arquivo não existir, tenta criá-lo. Isto é equivalente a especificar as flags O_EXCL|O_CREAT para a chamada de sistema open(2).
'x+'	Cria e abre o arquivo para leitura e escrita; coloca o ponteiro no começo do arquivo. Se o arquivo já existir, a chamada a fopen() falhará, retornando false e gerando um erro de nível E_WARNING. Se o arquivo não existir, tenta criá-lo. Isto é equivalente a especificar as flags O_EXCL|O_CREAT para a chamada de sistema open(2). 

-->

<?php 

$handler = fopen('treino.txt', 'r');

$linha = fgets($handler);
var_dump($linha);

$linha = fgets($handler);
var_dump($linha);

$linha = fgets($handler);
var_dump($linha);
// FGTES: Lê uma linha de um ponteiro de arquivo;
?>
