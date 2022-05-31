<div class="title">Variáveis</div>

<?php

//A sintaxe de PHP é case-sensitive(Não importa letra maiúscula ou minúscula)

$numero = 13;
echo $numero, '<br>';
var_dump($numero);
echo '<br>';


$a = 3; //EM php é necessário haver "$" como primeiro dígito para ser uma variável
$b = 16;

$soma = $a + $b;

echo $soma;

echo '<br>';
echo isset($soma);//Verificar se a variável está setada

echo '<br>';
unset($soma); //
var_dump($soma);
echo '<br>';

$var = 10;
echo '<br>'. $var;

$var = "Agora sou String!";
echo '<br>'. $var;

//Para referenciar uma variável é necessário utilizar o &.
$varef = &$var;
echo "<br> $varef";
?>

