<div class="title">Escrever arquivo</div>

<?php
$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Valor inicial \n");
$str = "Segunda linha  \n";
fwrite($arquivo, $str);
fclose($arquivo);

/*
$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Novo conteúdo");
fclose($arquivo);
*/

?>

<div class="title">Lendo arquivos</div>

<?php

$arquivo = fopen('teste.txt', 'r');
echo fread($arquivo, 10);
echo '<br>';
echo fread($arquivo, 10);


echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
$tam = filesize('teste.txt');
echo $tam, '<br>';
echo fread($arquivo, $tam);
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
echo '<br>';
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
while (!feof($arquivo)) {
    echo fgets($arquivo), '<br>';
}
fclose($arquivo);

$arquivo = fopen('teste.txt', 'r');
while (!feof($arquivo)) {
    echo fgetc($arquivo), '<br>';
}
fclose($arquivo);

?>

