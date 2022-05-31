<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="title">Cadastro de Formulário</div>


<a class="btn btn-primary" href="exercise.php?dir=db-sql&file=basic_formR" role="button">Voltar</a>

<?php



if (count($_POST) > 0) {
    $dados = $_POST;
    $erros = [];


    if (trim($dados['nome']) === "") {
        $erros['nome']  = "O nome é obrigatório!";
    }

    if (isset($dados['nascimento'])) {
        $data = DateTime::createFromFormat(
            'd/m/Y',
            $dados['nascimento']
        );
        if (!$data) {
            $erros['nascimento']  = "Data deve estar no padrão dd/mm/aaaa";
        }
    }

    if (!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)) {
        $erros['email']  = "Email inválido!";
    }

    if (!filter_var($dados['site'], FILTER_VALIDATE_URL)) {
        $erros['site']  = "Site inválido";
    }

    $filhosconfig = [
        "options" => ["min_range" => 0, "max_range" => 20]
    ];
    if (!filter_var($dados['filhos'], FILTER_VALIDATE_INT, $filhosconfig) && $dados != 0) {
        $erros['filhos']  = "Quantidade de filhos inválida(0-20)";
    }

    $salarioConfig = ['options' => ['decimal' => ',']];
    if (!filter_var(
        $dados['salario'],
        FILTER_VALIDATE_FLOAT,
        $salarioConfig
    )) {
        $erros['salario']  = "Salário inválido";
    }

    if (!count($erros)) {

        require_once "conexao.php";

        $sql = "INSERT INTO cadastro
    (nome,nascimento,email,site,filhos,salario)
    VALUES ( ?, ?, ?, ?, ?, ?)";


        $conexao = novaConexao();
        $stmt = $conexao->prepare($sql);

        $params = [
            $dados['nome'],
            $data ? $data->format('Y-m-d') : null,
            $dados['email'],
            $dados['site'],
            $dados['filhos'],
            $dados['salario'] ? str_replace(",", ".", $dados['salario']) : null
        ];

        $stmt->bind_param("ssssid", ...$params);

        if($stmt->execute()) {
            unset($dados);
        }
    }
}

?>



<form action="#" method="POST">
    <div class="form-row">
        <div class="form-group col-md-9">
            <label for="nome">Nome</label>
            <input type="text" class="form-control <?= isset($erros['nome']) ? 'is-invalid' : ' ' ?>" 
            name="nome" id="nome" placeholder="NOME" <?php if (isset($_POST['nome'])) { ?> value="<?= $dados['nome'] ?>" <?php } ?>>
            <div class="invalid-feedback">
                <?= $erros['nome'] ?>
            </div>

        </div>
        <div class="form-group col-md-3">
            <label for="nascimento">Nascimento</label>
            <input type="text" class="form-control <?= isset($erros['nascimento']) ? 'is-invalid' : ' ' ?>" name="nascimento" id="nascimento" placeholder="Nascimento" <?php if (isset($_POST['nascimento'])) { ?> value="<?= $dados['nascimento'] ?>" <?php } ?>>
            <div class="invalid-feedback">
                <?= $erros['nascimento'] ?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="text" class="form-control <?= isset($erros['email']) ? 'is-invalid' : ' ' ?>" name="email" id="email" placeholder="E-mail" <?php if (isset($_POST['email'])) { ?> value="<?= $dados['email'] ?>" <?php } ?>>
            <div class="invalid-feedback">
                <?= $erros['email'] ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text" class="form-control <?= isset($erros['site']) ? 'is-invalid' : ' ' ?>" name="site" id="site" placeholder="Site" <?php if (isset($_POST['site'])) { ?> value="<?= $dados['site'] ?>" <?php } ?>>
            <div class="invalid-feedback">
                <?= $erros['site'] ?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="filhos">Quantidade de filhos</label>
            <input type="number" class="form-control <?= isset($erros['filhos']) ? 'is-invalid' : ' ' ?>" name="filhos" id="filhos" placeholder="Quantidade de filhos" <?php if (isset($_POST['filhos'])) { ?> value="<?= $dados['filhos'] ?>" <?php } ?>>
            <div class="invalid-feedback">
                <?= $erros['filhos'] ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input class="form-control <?= isset($erros['salario']) ? 'is-invalid' : ' ' ?>" name="salario" id="salario" placeholder="Salário" <?php if (isset($_POST['salario'])) { ?> value="<?= $dados['salario'] ?>" <?php } ?>>
            <div class="invalid-feedback">
                <?= $erros['salario'] ?>
            </div>
        </div>
    </div>
    <div class="box">
    <button class="btn btn-primary bnt-lg">Enviar</button> 
    </div>
</form>