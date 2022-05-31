<div class="title">Do While</div>

<?php

const VALOR_LIMITE = 10;
$contador = 20;

do{
    echo "do while $contador <br> ";
    $contador--;
} while ($contador > VALOR_LIMITE);


?>

<div class="title">While</div>

<?php

$contador = 0;
while($contador < VALOR_LIMITE) {
    echo "while $contador <br>";
    $contador++;
}


