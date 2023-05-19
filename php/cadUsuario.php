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
            usuarios 
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
        
        
        
        
        }else {
            echo 'O usuário $usuario já esta cadastrado tente outro nome  de usuário ';
        }
        mysqli_close($con);
    }else {
        echo'Senhas Diferentes, insira senha iguais';
    }
    
?>