<?php 

function novaConexao($banco =  'PHP_course') {
    $servidor = '127.0.0.1:3307';
    $usuario = 'root';
    $senha = '';

    try{
        $conexao = new PDO("mysql:host=$servidor; db=name=$banco",
        $usuario, $senha);
        return $conexao;
    } catch (PDOException $e) {
        die('Erro: ' . $e->getMessage());
    }
}

?>