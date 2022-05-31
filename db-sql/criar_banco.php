<div class="title">Criando banco de dados</div>

<?php 

require_once "conexao.php";

$conexao = novaConexao(null);


$sql = 'CREATE DATABASE PHP_study';

$resultado = $conexao->query($sql);

if($resultado) {
    echo "Banco criado com sucesso!";

} else {
    echo "Erro:" . $conexao->error;
}

$conexao->close();



?>

<div class="tile">Criando tabela.</div>

<?php 

require_once "conexao.php";

$sql = "CREATE TABLE IF NOT EXISTS cadastro(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    nascimento DATE,
    email VARCHAR(100) NOT NULL,
    site VARCHAR(100),
    filhos INT,
    salario FLOAT
)";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado) {
    echo "Tabela criada com sucesso!";

} else {
    echo "Erro:" . $conexao->error;
}

$conexao->close();

?>



<div class="title">Inserir dados</div>

<p>
<a href="exercise.php?dir=db-sql&file=insert">Inserir</a> <br> <br>

<a href="exercise.php?dir=db-sql&file=consult">Consultar</a> <br> <br>

<a href="exercise.php?dir=db-sql&file=excluir">Excluir</a> <br> <br>

<a href="/index.php">Voltar</a>
</p>