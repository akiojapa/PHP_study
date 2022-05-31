<div class="title">Função</div>

<?php

$var = 1;

function trocavalor() {
    $var = 2;
    echo "Durante a função: $var <br>";
}

echo "Antes: $var <br>";
trocavalor();
echo "Depois: $var <br>";

function trocaValordeVerdade() {
    global $var;
    $var = 3;
    echo "Durante a função: $var <br>";
}

echo "Antes: $var <br>";
trocaValordeVerdade();
echo "Depois: $var <br>";

?>

