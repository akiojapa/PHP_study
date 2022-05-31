<div class="title">Maps</div>

<?php
echo 'Notas = | 5,8 | 7,3 | 9,8 | 6,7 | <br>';
$notas = [5.8, 7.3, 9.8, 6.7];
$notasfinais = [];

foreach($notas as $nota){
    $notasfinais[] = round($nota);
}

print_r($notasfinais);
echo '<br> <br>';
echo '<div class= "title"> Filter </div>';


echo '<br> filtrando somente notas acima de 7';
$apenasOsAprovados = [];

foreach($notas as $nota){
    $notasfinais[] = round($nota);
    if ($nota >= 7) {
        $apenasOsAprovados[] = $nota;
    }
}

echo '<br>';
print_r($apenasOsAprovados);

function aprovados ($nota) {
    return $nota >= 7;
}; 





?>


