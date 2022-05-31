<?php
session_start();
session_destroy();
unset($_COOKIE['user']);
setcookie('user', '');
//unset($SESSION['email'], $_SESSION['senha']);
header('Location: login.php');