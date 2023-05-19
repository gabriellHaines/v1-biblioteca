<?php
    $usuario = $_POST["usuario"];
    require_once('./php/conexao.php');
    $usu =  "SELECT usu_usuario, usu_senha , usu_id, usu_nome  , usu_tipo , usu_status
    FROM usuario
    WHERE ( usu_usuario = '$usuario'  )
    ";
    $resultado = mysqli_query($con , $usu);
    if (mysqli_num_rows($resultado) == 0){
        echo "Usuário inexistente";
    }else{
        $row = mysqli_fetch_assoc($resultado);
        $usu_status = $row['usu_status'];
        if ($usu_status == 'ativo') {
            $usu_senha = $row["usu_senha"];
            $senha = $_POST["senha"];
            if ($senha == $usu_senha) {
                $usu_id = $row["usu_id"];
                $usu_usuario = $row['usu_usuario'];
                $usu_nome = $row["usu_nome"];
                $usu_tipo = $row['usu_tipo'];
                session_start();
                $_SESSION['usu_usuario'] = $usu_usuario;
                $_SESSION['usu_nome'] = $usu_nome;
                $_SESSION['usu_id'] = $usu_id;
                $_SESSION['usu_tipo'] = $usu_tipo;
                if ($usu_tipo == 'usuario') {
                    header('location:./logado/usuario/index.php');
                }else if ($usu_tipo == 'autor') {
                    header('location:./logado/autor/index.php');    
                }else if ($usu_tipo == 'funcionario') {
                    header('location:./logado/funcionario/index.php');
                }    
                } else {
                echo "Senha Incorreta";
            }
        }else{
            echo'Usuário Inativado';
        }
    }
    mysqli_close($con);
?>