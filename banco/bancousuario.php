<?php
require_once('../php/conexao.php');
$deletable = "DROP TABLE usuario";
if(mysqli_query($con, $deletable)){
    echo 'tabela deletada com sucesso';
}else{
    echo 'ERRO: '. mysqli_error($con);
}
$tabela ="CREATE TABLE 
usuario(
usu_id INT(10) AUTO_INCREMENT PRIMARY KEY,  
usu_usuario VARCHAR(20), 
usu_senha VARCHAR(20), 
usu_nome VARCHAR(80), 
usu_celular VARCHAR(20), 
usu_data_nascimento VARCHAR(10),
usu_cpf VARCHAR(20),
usu_endereco VARCHAR(80),
usu_nascionalidade VARCHAR(50),
usu_biografia VARCHAR(100),
usu_tipo ENUM('funcionario','autor','usuario') NOT NULL DEFAULT 'usuario',
usu_status ENUM('ativo', 'desativado') NOT NULL DEFAULT 'ativo'
)";
$resultado = mysqli_query($con, $tabela);
if ($resultado !== false) {
    echo "Tabela criada com sucesso!!";
} else {
    echo "Erro: " . mysqli_error($con);
}
mysqli_close($con);
?>