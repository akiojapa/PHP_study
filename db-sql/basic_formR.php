<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class="title">Consultando dados</div>



<?php

require_once"conexao.php";

$sql = "SELECT * FROM cadastro";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

$registros = [];

if($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $registros[] = $row;
    }

} elseif($conexao->error) {
    echo "Erro:" . $conexao->error;

    $conexao->close();
}

?>
 

<table class="table">
    <thead>
        <th>Código</th>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>E-mail</th>
    </thead>
    <tbody>
        <?php foreach($registros as $registro) { ?>
            <tr>
                <td><?=$registro['id']?></td>
                <td><?=$registro['nome']?></td>
                <td>
                    <?=date('d/m/Y', strtotime($registro['nascimento']))?>
                </td>
                <td><?=$registro['email']?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>




<div class="box">

<a class="btn btn-success" href="exercise.php?dir=db-sql&file=basic_formC" role="button">Cadastrar</a> 

<a class="btn btn-info" href="exercise.php?dir=db-sql&file=basic_formU" role="button">Alterar dados</a> 

<a class="btn btn-danger" href="exercise.php?dir=db-sql&file=basic_formD" role="button">Excluir dados</a> 
</div>