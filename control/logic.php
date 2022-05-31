<div class="title">Operadores relacionais e lógicos</div>

<div>Operadores relacionais</div>

<?php

echo "<br> 1 == 1 <br>";
var_dump(1 == 1);
echo "<br> 1 > 1 <br>";
var_dump(1 > 1);
echo "<br> 1 >= 1 <br>";
var_dump(1 >= 1);
echo "<br> 1 < 1 <br>";
var_dump(1 < 1);
echo "<br> 1 <= 1 <br>";
var_dump(1 <= 1);
echo "<br> 1 <> 1 || 1 != 1 <br>";
var_dump(1 <> 1);

// == Igualdade( 1 == '1' } TRUE)
// ===Igualdade restrita (1 === '1' } FALSE)

echo "<p> Relacionais no If/Else </p>";

$idade = 15;

echo "<br> idade = 15 <br>";
if($idade < 18) {
    echo "Menor de idade <br>";
} else if($idade  <= 65) {
    echo "Adulto<br>";
} else {
    echo "Terceiro idade!";
}

echo "<p> Relacionais de outra forma... </p>";
var_dump(500 <=>3); // Se o primeiro número for maior que o segundo, retorna 1
var_dump(500 <=> 500); // Se o primeiro número for igual ao segundo, retorna 0
var_dump(5 <=> 50); // Se o primeiro número for menor que o segundo, retorna -1

?>

<div class="title">Operadores lógicos</div>
<?php
echo "! significa not ou seja inversão( !true == false) <br>";
var_dump(true);
echo "<br>";
var_dump(!true);


echo "<br> Tabela verdade 'OU' <br> ";
echo "<br>V or V<br>";
var_dump(true || true);
echo "<br>V or F<br>";
var_dump(true || false);
echo "<br>F or V<br>";
var_dump(false || true);
echo "<br>F or F<br>";
var_dump(false || false);
echo "<br>";

echo "<br> Tabela verdade 'AND' <br> ";
echo "<br>V and V<br>";
var_dump(true && true);
echo "<br>V and F<br>";
var_dump(true && false);
echo "<br>F and V<br>";
var_dump(false && true);
echo "<br>F and F<br>";
var_dump(false && false);
echo "<br>";
?>