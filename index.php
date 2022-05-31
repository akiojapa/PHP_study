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
    <link rel="shortcut icon" href="images/brasill.ico" type="image/x-icon">
    <title>Curso PHP</title>
</head>

<body>
   <header class= "intro">
        <h1>Curso PHP</h1>
        <h2>Índice dos exercícios</h2>
    </header> 
    <nav class="navigation">  
        <span class="user"> Usuário: <?= $_SESSION['user'] ?></span>
        <a href="logout.php" class="red">Sair</a>
    </nav>
    <main class="principal">
        <div class="content">
           <?php require_once('menu.php')?>
        </div>
    </main>
    <footer class="foot">
        Dev_Inglorius © <?= date('Y'); ?>
    </footer>
</body>
</html>


