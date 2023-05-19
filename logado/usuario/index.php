<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuário</title>
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
            if (!isset($nome) && !isset($id)) {
                header('location:../index.php');
            }
        ?>   
    </div>
</body>
</html>