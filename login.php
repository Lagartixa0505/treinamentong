<?php
include('conexao.php');

if (isset($_POST['email']) || isset($_POST['senha'])){
    if (strlen($_POST['email']) == 0){
        echo "Preencha seu e-mail";
    } else if (strlen($_POST['senha']) == 0){
        echo "Preencha sua senha";
    } else {
        $email = $mysqli-> real_escape_string($_POST['email']);
        $senha = $mysqli-> real_escape_string($_POST['senha']);
        
        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli  ->query ($sql_code) or die ("Falha na execução do SQL:" .$mysqli->error);
        
        $quantidade =  $sql_query->num_rows;

        if( $quantidade == 1){
            $usuario = $sql_query-> fetch_assoc();
            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];
            
            header('Location: home.php');

        } else {
            echo "Email- ou senha incorreto";
        }

    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <form action="#">
                <h1>Login</h1>
                <input type="email" name="email">
                <input type="senha" name="senha">
                <button>Entrar</button>
                <button type="button">Voltar</button>
                
            </form>
        </div>
    </div>
</body>
</html>
