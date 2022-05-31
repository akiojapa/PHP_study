<div class="title">ForEach</div>

<?php
$array = [
    1000 => 'Domingo',
    'Segunda',
    'Terça',
    'Quarta',
    'Quinta',
    'Sexta',
    'Sábado'
];

foreach($array as $valor) {
    echo "$valor <br>";
}

echo '<br>';

foreach($array as $indice => $valor) {
    echo "$indice => $valor <br>";
}

?>

<div class="title">Break / Continue</div>

<?php

$cont = 10;
for(;;){  //Laço infinito
    echo "$cont <br>";
    $cont++;
    if ($cont > 20) {
        break;
    }
}

echo "FIM Break!<br>";
echo "<br>";

for(;;) {
    $cont++;
    if($cont % 2 == 1) {
        continue;
    }
    echo "$cont <br>";
    if ($cont >= 30) {
        break;
    }
}

echo "<br>FIM continue!(Não recomendado utilizar 'continue' e sim a lógica simples";