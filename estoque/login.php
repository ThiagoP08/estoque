<?php

session_start();
ob_start();

require 'config.php';

if (isset($_SESSION['id'])){
    header ('Location: index.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="container">

        <form action="login_action.php" method="post">

            <label for="">
                Email: <br>
                <input type="text" name="email" id="">
            </label> <br>
            
            <label for="">
                Senha: <br>
                <input type="password" name="senha" id="">
            </label> <br>

            <button type="submit"> Entrar </button>

        </form>

        <div><a href="cadastro.php">Ainda não tem uma conta?</a></div>

    </div>
    
</body>
</html>