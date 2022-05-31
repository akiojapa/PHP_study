<?php 
$_SESSION['erros'] = null;


session_start();

if(isset($_POST['email'])) {
$email = $_POST['email'];
$senha = $_POST['senha'];
    $users = [
        [
            "nome" => "Convidado",
            "email" => "convidado@email.com.br",
            "senha" => "123456",
        ],
        [
            "nome" => "",
            "email" => "@email.com.br",
            "senha" => "654321",
        ],
    ];

    foreach($users as $user) {
        $emailValido = $email === $user['email'];
        $senhaValida = $senha === $user['senha'];

        if($emailValido && $senhaValida) {
            $_SESSION['erros'] = null;
            $_SESSION['user'] = $user['nome'];
            $exp = time() + 60 * 60 * 24 * 30;
            setcookie('user', $user['nome'], $exp);
            header('Location: index.php');
        }
    };

    if(!isset($_SESSION['user'])) {
        $_SESSION['erros'] = ['Usuário/senha inválido!'];
    }

$email = null;
$senha = null;
    
}
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/login.css">
     <link rel="shortcut icon" href="images/brasill.ico" type="image/x-icon">
    <title>Curso PHP</title>
</head>

<body class="login">
   <header class= "intro">
        <h1>Curso PHP</h1>
        <h2>Seja Bem-Vindo</h2>
    </header> 
    <main class="principal">
        <div class="content_login">
            <h3>Identifique-se</h3>
           <?php if (isset($_SESSION['erros'])) { ?>
                <div class="erros">
                     <?php foreach($_SESSION['erros'] as $erro) : ?>
                        <p><?= $erro ?></p>
                    <?php endforeach ?>
                </div>
            <?php } ?>
            <form action="login.php" method="POST">
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha">
                </div>

                <div class="kak">
                    <input type="submit" value="Entrar" name="submit" class="submit"> 
                </div>
                    
                
               
            </form>            
        </div>
    </main>
    <footer class="foot">
        Dev_Inglorius © <?= date('Y'); ?>
    </footer>
</body>
</html>


