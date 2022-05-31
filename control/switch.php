<div class="title">Expressões úteis</div>

<div>Operador ternário</div>

<?php

$idade = 17;
$status;

echo'$var2 = $var <=> x ? "Maior : Menor"'; // Se for verdade a afirmação, retorna 'Maior' senão retorna 'menor

$status = $idade >= 18 ? 'Maior de idade' : 'Menor de idade';

echo"<br> idade = 17<br>";
echo"<br>$status<br>";
?>

<div class="title">Switch</div>

<?php
$categoria = 'LUXO';
$preco = 0.0;
$carro = '';

switch (strtolower($categoria)) {
    case 'luxo': 
        $carro = 'Mercedes';
        $preco = 250000;
        break;
    case 'suv':
    case 'suv Básico':
        $carro = 'Renegade';
        $preco = 80000;
        break;
    case 'sedan':
        $carro = 'Etios';
        $preco = 55000;
        break;
    default:
        $carro = 'Mobi';
        $preco = 33000;
        break;
}

$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p>Carro: $carro<br>Preço: R$ $precoFormatado</p>";
?>

