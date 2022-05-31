<?php

function novaConexao($banco = 'PHP_study') {
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = 'root';

    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    if($conexao->connect_error) {
        die('Erro: '. $conexao->connect_error);
        
    }

    return $conexao;
}





?>