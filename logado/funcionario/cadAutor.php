<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Autor</title>
</head>
<body>
    <h1>Cadastro de Autor</h1>
    <form method = "post">
    <label for="usuario">Digite o Usuário: </label><br>
        <input type="text" name='usuario'><br>
        <label for="senha">Digite a Senha: </label><br>
        <input type="password" name='senha'><br>
        <label for="senhaR">Repita a Senha: </label><br>
        <input type="password" name='senhaR'><br>
        <label for="nome">Digite o Nome: </label><br>
        <input type="text" name='nome'><br>
        <label for="celular">Digite o Celular: </label><br>
        <input type="text" name='celular'><br>
        <label for="data_nascimento">Digite a Data de Nascimento: </label><br>
        <input type="text" name='data_nascimento'><br>
        <label for="cpf">Digite o CPF: </label><br>
        <input type="text" name='cpf'><br>
        <label for="endereco">Digite o Endereço: </label><br>
        <input type="text" name='endereco'><br>
        <label for="nascionalidade">Digite a Nascionalidade: </label><br>
        <input type="text" name = "nascionalidade"><br>
        <label for="biografia">Digite a Biografia: </label><br>
        <input type="text" name = "biografia"><br>

        <button name = "enviar">Cadastrar</button>
        <button name = "voltar">Voltar</button>
    </form>
    <?php
        if (isset($_POST["voltar"])) {
            header("location:./index.php");
        }
        if (isset($_POST["enviar"])) {
            require_once('./php/cadAutor.php');
        }
    ?>
</body>
</html>