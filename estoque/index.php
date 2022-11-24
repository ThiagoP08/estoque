<?php

require 'config.php';

session_start();
ob_start();


// if( (!isset($_SESSSION['id'])) ){
//     // $_SESSION['msg'] = "<p style='color: #ff0000'>Erro: Necessário fazer o login!</p>";
//     header("Location: login.php");
// }


$lista = [];

$sql = $pdo->query("SELECT * FROM produtos");

if($sql->rowCount() > 0){
    $lista = $sql->fetchall(PDO::FETCH_ASSOC);
}

//Lista input get

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

        <h2> Pesquisar </h2>

        <form action="" method="get">

            <input type="search" name="codigo" id="" placeholder="Buscar por codigo">
            <input type="search" name="nome" id="" placeholder="Buscar por nome">
            <input type="search" name="preco" id="" placeholder="Buscar por preco">
            <input type="search" name="quantidade" id="" placeholder="Buscar por quantidade">
            <input type="search" name="min_quantidade" id="" placeholder="Buscar por quantidade minima">

        </form>

    </div>

    <div>

        <table class="table">

            <tr>

                <th> codigo </th>
                <th> nome </th>
                <th> preço </th>
                <th> quantidade </th>
                <th> mim quantidade </th>

            </tr>

            <?php foreach($lista as $usuario): ?>
                <tr>

                    <td> <?php echo $usuario['codigo']?> </td>
                    <td> <?php echo $usuario['nome']?> </td>
                    <td> <?php echo $usuario['preco']?> </td>
                    <td> <?php echo $usuario['quantidade']?> </td>
                    <td> <?php echo $usuario['min_quantidade']?> </td>

                    <td>

                        <a href="editar.php?id=<?=$usuario['id']; ?>"
                            class="btn brn-success"
                        > Editar </a>

                        <a href="excluir.php?id=<?$usuario['id']; ?>"
                        onclick="return confirm('Tem certeza que deseja exluir?')"
                        class="btn btn-danger"
                        > Excluir </a>

                    </td>

                </tr>
            <?php endforeach; ?>   
        </table>

        <a href="adicionar.php" class="btn btn-primary"> Adicionar </a> <br>

        <a href="./logout.php">Sair</a>

    </div>
    
</body>
</html>