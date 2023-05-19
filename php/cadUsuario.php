<?php
    
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $senhaR = $_POST['senhaR'];
    if ($senha == $senhaR) {
        require_once('./php/conexao.php');
        $verificaUsuario = "SELECT usu_usuario
        FROM usuario
        WHERE usu_usuario = '$usuario'
        ";
        $resultado = mysqli_query($con, $verificaUsuario);
        if (mysqli_error($con)) {
            echo "Erro: ". mysqli_error($con);
        }
        $retorno = mysqli_num_rows($resultado);
        if ($retorno == 0) {
            $nome = $_POST['nome'];
            $celular = $_POST['celular'];
            $data_nascimento = $_POST['data_nascimento'];
            $cpf = $_POST['cpf'];
            $endereco = $_POST['endereco'];
            $insertTabela = "INSERT INTO 
            usuario 
            (usu_usuario,
            usu_senha,
            usu_nome,
            usu_celular,
            usu_data_nascimento,
            usu_cpf,
            usu_endereco)
            VALUES
            ('$usuario',
            '$senha',
            '$nome',
            '$celular',
            '$data_nascimento',
            '$cpf',
            '$endereco')
            ";
            $insert = mysqli_query($con,$insertTabela);
            if (mysqli_error($con)) {
                echo "Erro ao executar a query: ". mysqli_error($con);
            }else{
                $buscaID = "SELECT usu_id , usu_tipo
                FROM usuario
                WHERE usu_usuario = '$usuario'
                ";
                $aaaa = mysqli_query($con,$buscaID);
                $aaa = mysqli_fetch_assoc($aaaa);
                $usu_tipo = $aaa["usu_tipo"];
                $usu_id = $aaa["usu_id"];
                session_start();
                $_SESSION['usu_id'] = $usu_id;
                $_SESSION['usu_tipo'] = $usu_tipo;
                $_SESSION['usu_usuario'] = $usuario;
                $_SESSION['usu_nome'] = $nome;
                if ($usu_tipo == "usuario") {
                    header('location:./logado/usuario/index.php');
                }else if ($usu_tipo == "autor") {
                    header('location:./logado/autor/index.php');
                }else if ($usu_tipo == "funcionario") {
                    header('location:./logado/funcionario/index.php');
                }
                
                
            }
        }else {
            echo 'O usuário $usuario já esta cadastrado tente outro nome  de usuário ';
        }
        mysqli_close($con);
    }else {
        echo'Senhas Diferentes, insira senha iguais';
    }
    
?>