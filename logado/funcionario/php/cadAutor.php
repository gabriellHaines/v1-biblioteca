<?php
    require_once('./php/conexao.php');
    $usuario = $_POST["usuario"];
    $senhaR = $_POST["senhaR"];
    $senha = $_POST["senha"];
    $testaUsuario = "SELECT usu_usuario
    FROM usuario
    WHERE usu_usuario = '$usuario'";
    $testa = mysqli_query($con , $testaUsuario);
    if ($senhaR == $senha && mysqli_num_rows($testa) == 0 ) {
        $nome = $_POST['nome'];
        $celular = $_POST['celular'];
        $data_nascimento = $_POST['data_nascimento'];
        $cpf = $_POST['cpf'];
        $endereco = $_POST['endereco'];
        $nascionalidade = $_POST["nascionalidade"];
        $biografia = $_POST["biografia"];
        $insertTabela = "INSERT INTO 
        usuario 
        (usu_usuario,
        usu_senha,
        usu_nome,
        usu_celular,
        usu_data_nascimento,
        usu_cpf,
        usu_endereco,
        usu_nascionalidade,
        usu_biografia,
        usu_tipo)
        VALUES
        ('$usuario',
        '$senha',
        '$nome',
        '$celular',
        '$data_nascimento',
        '$cpf',
        '$endereco',
        '$nascionalidade',
        '$biografia',
        'autor'
        )";
        $insert = mysqli_query($con,$insertTabela);
    }else if ($senhaR !== $senha) {
        echo "Insira senhas iguais";
    }else{
        echo "Usuário já existente";
    }

?>