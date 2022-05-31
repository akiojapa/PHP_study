<div class="title">Tipo inteiro</div>

<?php
echo 11;
echo '<br>';

var_dump(11);
echo '<br>';

echo PHP_INT_MAX, '<br>';
echo PHP_INT_MIN, '<br>';
echo 017, '<br>'; //Base octal
echo 0b11, '<br>'; //Base binária
echo 0x117acf0; //Base hexadecimal
?>

<div class="title">Tipo float</div>

<?php

echo 1.1, '<br>';

var_dump(1.1);
echo '<br>';

echo PHP_FLOAT_MAX, '<br>';
echo PHP_FLOAT_MIN, '<br>';
echo 1.2e3, '<br>'; //1200
echo 1.3E-3; // 0.013

?>

<div class="title">Tipo String</div>

<?php
echo'Eu sou uma string';
echo'<br>';
var_dump("Eu também");
echo'<br>';

//concatenação
echo "Nós também". " somos uma". " string";
echo '<br>', "Também aceito", " vírgulas";

echo "'Teste' ". '"teste 2" '. '\'Teste 3\' '. "\"Teste 4\" ";

print("<br> Também existe a função print");
print"<br> Também existe a função print sem parênteses";

//Algumas funções
echo '<br>'. strtoupper('Todas maiúsculas');
echo '<br>'. strtolower('TODAS MINÚSCULAS');
echo '<br>'. ucfirst("só A PRIMEIRA LETRA");
echo '<br>'. ucwords("Todas as palavras");
echo '<br>'. strlen("Quantas letras?");
echo '<br>'. mb_strlen("Eu também", "utf-8");
echo '<br>'. substr("Só uma parte mesmo", 7, 6);
echo '<br>'. str_replace('isso', 'aquilo', 'Trocar isso aquele');
?>

<div class="title">Tipo booleano</div>

<?php
echo TRUE;
echo '<br>';
echo FALSE;

echo '<br>', var_dump(true);
echo '<br>', var_dump(false);
echo '<br>', var_dump('false');
echo '<br>', is_bool(false);
echo '<br>'. is_bool('true');

//fazer as regras de conversões

echo '<p>Regras:</p>';
echo '<br>'. var_dump((bool) 0); // Apenas zero é false
echo '<br>'. var_dump((bool) 20); // True
echo '<br>'. var_dump((bool) -1);// True
?>