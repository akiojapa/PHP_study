<div class="title">Inserindo dados</div>

<?php

require_once "conexao.php";

$sql = "INSERT INTO cadastro 
    (nome,nascimento,email,site,filhos,salario)
    VALUES (
        'Marieta',
        '1989-10-29',
        'marieta@email.com',
        'https://marieta123.site.com.br',
        2,
        13000.99
)";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro:" . $conexao->error;
}

$conexao->close();




?>

<a href="exercise.php?dir=db-sql&file=criar_banco">Voltar</a>