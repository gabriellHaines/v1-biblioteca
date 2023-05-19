<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionário</title>
</head>
<body>
    <div>
        <?php
            session_start();
            $nome = $_SESSION['usu_nome'];
            $usuario = $_SESSION['usu_usuario'];
            $id = $_SESSION['usu_id'];
            $tipo = $_SESSION['usu_tipo'];
            echo "nome: " . $nome . ' usuário: ' . $usuario . ' id: '. $id.' tipo: ' . $tipo;
            if (!empty($id)) {
                header('location:../../index.php');
            }else if ($tipo !== "funcionario") {
                session_unset();
                session_destroy();
                header('location:../../index.php');  
                exit();
            }
        ?>   
    </div>
    <form  method="post">
        <button name = 'login'>Ir para Login</button>
        <button name = 'cadAutor'>Cadastrar Autor</button>
        <button>Cadastrar Livro</button>
    </form>
            cadAutor.php
            excluirConta.php
            recuperarConta.php
            cadLivro.php
            editarDados.php
            pesquisaLivro.php
            pesquisaAutor.php
    
    <?php

        if (isset($_POST["login"])) {
            session_unset();
            session_destroy();
            header('location:../../index.php');
        }
        
        if (isset($_POST["cadAutor"])) {
            header("location:./cadAutor.php");
        }
    ?>
</body>
</html>