<div class="title">Sessão</div>

<?php
session_start();

print_r($_SESSION);
echo "<br>";

if(!$_SESSION['nome']) {
    $_SESSION['nome'] = "Akio";
}

if (!$_SESSION['email']) {
    $_SESSION['email'] = "akio@email.com";
}

print_r($_SESSION);

?>

<p>
    <a href="/session/basic_session_alterar.php">
        Alterar Sessão
    </a>

</p>

<p>
    <a href="/index.php">Voltar</a>
</p>