<?php

if(!isset($_SESSION)){
    session_start();
}

if (!isset($_SESSION['nome'])) {
    header('Location: index.php'); // Redirecione se o usuário não estiver logado
    exit();
}
?>
