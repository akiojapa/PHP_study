<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="title">Formulário</div>

<h2>Cadastro</h2>

<?php 

if(count($_POST) > 0) {
    if(!filter_input(INPUT_POST, "nome")) {
        echo "O nome é obrigatório!", '<br>';
    }

    if(filter_input(INPUT_POST, "nascimento")) {
        $data = DateTime::createFromFormat(
            'd/m/Y', $_POST['nascimento']);
        if(!$data) {
            echo"Data deve estar no padrão dd/mm/aaaa", "<br>";
        }
    }

    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        echo "Email inválido!", '<br>';
    }
        
    if(!filter_var($_POST['site'], FILTER_VALIDATE_URL)){
        echo "site inválido!", '<br>';
    }

    $filhosconfig = [
        "options" => ["min_range" => 0, "max_range" => 20]
    ];
    if(!filter_var($_POST['filhos'], FILTER_VALIDATE_INT, $filhosconfig) && $_POST != 0) {
        echo "Quantidade de filhos inválida", "<br>";
    }

    $salarioConfig = ['options' => ['decimal' => ',']];
    if(!filter_var($_POST['salario'],
    FILTER_VALIDATE_FLOAT, $salarioConfig)) {
        echo "Salário inválido", '<br>';
    }

}

?>

<form action="#" method="POST">
    <div class="form-row">
        <div class="form-group col-md-9">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" 
            name="nome" id="nome" placeholder="NOME"
            <?php if(isset($_POST['nome'])) { ?>
                value="<?=$_POST['nome'] ?>"
            <?php } ?>>

        </div>
        <div class="form-group col-md-3">
            <label for="nascimento">Nascimento</label>
            <input type="text" class="form-control" 
            name="nascimento" id="nascimento" placeholder="Nascimento"
            <?php if(isset($_POST['nascimento'])) { ?>
                value="<?=$_POST['nascimento'] ?>"
            <?php } ?>>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="text" class="form-control" 
            name="email" id="email" placeholder="E-mail"
            <?php if(isset($_POST['email'])) { ?>
                value="<?=$_POST['email'] ?>"
            <?php } ?>>

        </div>
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text" class="form-control" 
            name="site" id="site" placeholder="Site"
            <?php if(isset($_POST['site'])) { ?>
                value="<?=$_POST['site'] ?>"
            <?php } ?>>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="filhos">Quantidade de filhos</label>
            <input type="number" class="form-control" 
            name="filhos" id="filhos" placeholder="Quantidade de filhos"
            <?php if(isset($_POST['filhos'])) { ?>
                value="<?=$_POST['filhos'] ?>"
            <?php } ?>>

        </div>
        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input type="number" class="form-control" 
            name="salario" id="salario" placeholder="Salário"
            <?php if(isset($_POST['salario'])) { ?>
                value="<?=$_POST['salario'] ?>"
            <?php } ?>>
        </div>
    </div>
    <button class="btn btn-primary bnt-lg">Enviar</button>



</form>