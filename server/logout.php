<?php

if(!isset($_SESSION)) {
    session_start();
}
session_destroy(); // Destrua a sessão
header("Location: index.php"); // Redireciona para a página de login

?>
