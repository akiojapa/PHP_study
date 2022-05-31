<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="title">Excluir dados</div>


<a class="btn btn-primary" href="exercise.php?dir=db-sql&file=basic_formR" role="button">Voltar</a> <br>
<?php
//Forma mais simples de deletar um dado
/*
require_once "conexao.php";
$sql = "DELETE FROM cadastro WHERE id = 3";

$conexao = novaConexao();
$resultado = $conexao->query($sql);


if($resultado) {
    echo "Dados apagados";
} else {
    echo "Erro: " . $conexao->error;
}

$conexao->close();
*/
?>



<?php 

require_once "conexao.php";

$registros = [];
$conexao = novaConexao();


if($_GET['excluir']) {
    $excluirSQL = "DELETE FROM cadastro WHERE id = ?";
    $stmt = $conexao->prepare($excluirSQL);
    $stmt->bind_param("i", $_GET['excluir']);
    $stmt->execute();
}

$sql = "SELECT id,nome,nascimento,email FROM cadastro";

$resultado = $conexao->query($sql);
if($resultado->num_rows > 0) {
    while($row = $resultado->fetch_assoc()) {
        $registros[] = $row;
    }
} else if ($conexao->error) {
    echo "Erro: ". $conexao->error;
}

?>

<table class="table table-hover table-striped table-bordered">
    <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Nascimento</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php foreach($registros as $registro) { ?>
            <tr>
                <td><?= $registro['id'] ?></td>
                <td><?= $registro['nome'] ?></td>
                <td><?= $registro['email'] ?></td>
                <td>
                    <?=date('d/m/Y', strtotime($registro['nascimento']))?>
                </td>
                <td>
                    <a href="exercise.php?dir=db-sql&file=basic_formD&excluir=<?=$registro['id']?>" 
                    class="btn btn-danger">
                        Excluir
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>




