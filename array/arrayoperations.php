<div class="title">Operações com Arrays</div>

<?php

$dados1 = [
    "nome" => "Jose",
    "idade" => 28
];

$dados2 = [
    "nome" => "Maria",
    "naturalidade" => "Fortaleza"
];

$dadosCompleto = $dados1 + $dados2;
print_r($dadosCompleto);

echo '<br> Conferindo se é´array ='. is_array($dadosCompleto);
echo '<br> Contando número de elementos dentro do array ='. count($dadosCompleto);

echo '<br>';
$indice = array_rand($dadosCompleto);
echo "$indice = $dadosCompleto[$indice]";
echo '<br>';


unset($dadosCompleto);
echo '<br>';
var_dump($dadosCompleto);

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

$decimais = $pares + $impares;
echo '<br>';
print_r($decimais);

$decimais = array_merge($pares, $impares);
echo '<br>';
print_r($decimais);

sort($decimais);
echo '<br>';
print_r($decimais);