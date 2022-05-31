<div class="title">Argumentos</div>

<?php
 
 function obterMensagem(){
 return 'Seja bem vindo(a)!';
 }

 obterMensagem();

 $m = obterMensagem();
echo $m;
echo '<br>', obterMensagem();
echo '<br>';


function obterMensagemComNome($nome){
    return "Bem vindo, {$nome}!";
}

echo '<br>', obterMensagemComNome('Akio');
echo '<br>', obterMensagemComNome('Andrei');

function soma($a, $b){
    return $a + $b;
}

$x = 4;
$y = 5;
echo '<br>', soma(45, 78);
echo '<br>', soma($x, $y);

?>

<div class="title">Função recursiva</div>

<?php 

echo '<br> uma função pode ser uma $variavel <br>';

function somaRecursivaUmAte($numero) {
    //Condição de parada!!!
    if($numero === 1){
        return 1;
    }
    return $numero + somaRecursivaUmAte($numero - 1);
}

echo 'Soma recursiva de um até $var = 10 <br>';

echo somaRecursivaUmAte(10);
