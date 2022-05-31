<div class="title">Arrays</div>

<?php
$lista = array(1, 2, 3.4, "texto");
echo $lista . '<br>';
var_dump($lista);
echo '<br>';
print_r($lista);

echo '<br>' . $lista[0];
echo '<br>' . $lista[1];
echo '<br>' . $lista[2];
echo '<br>' . $lista[3];
?>

<div class="title">Maps</div>

<?php

$dados = array(
    "idade" => 25,
    "cor" => "verde",
    "peso" => 49.8
);

print_r($dados);

echo $dados[0];
echo '<br>'. $dados["idade"];
echo '<br>'. $dados["cor"];
echo '<br>'. $dados["peso"];
echo '<br>';
var_dump($dados["outra informação"]);

$lista[] = 'i';
echo '<br>';
print_r($lista);

?>

<div class="title">Arrays Multidimensionais</div>


<?php

$dadoss = [
    [
        "nome" => "Roberto",
        "idade" => 26,
        "naturalidade" => "São Paulo"
    ],
    [
        "nome" => "Maria",
        "idade" => 25,
        "naturalidade" => "Bahia"
        
    ],
];

print_r($dadoss);



