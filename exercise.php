<?php
session_start();

if($_COOKIE['user']) {
    $_SESSION['user'] = $_COOKIE['user'];
}

if(!$_SESSION['user']) {
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
<link rel= "stylesheet" href="assets/css/exercise.css">
 <link rel="shortcut icon" href="images/brasill.ico" type="image/x-icon">
    <title>Exercicio</title>
</head>
<body class="exercise">
    <header class="intro">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercício</h2>
    </header>
    <nav class="navigation">
    <span class="user"> Usuário: <?= $_SESSION['user'] ?></span>
    <a href=<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?> class="green">Sem formatação</a>
    <a href="index.php" class="cian"> Voltar</a>
    <a href="logout.php" class="red">Sair</a>
    
    </nav>
    <main class="principal">
        <div class="content">
            <?php
              //  include($_GET['dir']."/".$_GET['file'].'.php');
              include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
            ?>
        </div>
    </main>
    <footer class="foot">
        Dev_Inglorius © <?= date('Y'); ?>
    </footer>
</body>
</html>