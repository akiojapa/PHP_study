<?php
session_start();
print_r($_SESSION);
?>

<p>
    <b>Nome: </b> <?= $_SESSION['nome']?>
</p>

<p>
    <b>Email: </b> <?= $_SESSION['email']?>
</p>


<?php
$_SESSION['email'] = "akioandrei@email.com";
?>

<p>
<a href="basic_session.php">Voltar</a> <br>
<a href="basic_session_limpa.php">Limpar Sessão</a>
</p>