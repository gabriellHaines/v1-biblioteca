<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <form method="post">
        <h1>Cadastro de Usuários</h1>

        <label for="usuario">Digite seu Usuário: </label><br>
        <input type="text" name='usuario'><br>
        <label for="senha">Digite sua Senha: </label><br>
        <input type="password" name='senha'><br>
        <label for="senhaR">Repita sua Senha: </label><br>
        <input type="password" name='senhaR'><br>
        <label for="nome">Digite seu Nome: </label><br>
        <input type="text" name='nome'><br>
        <label for="celular">Digite seu Celular: </label><br>
        <input type="text" name='celular'><br>
        <label for="data_nascimento">Digite sua Data de Nascimento: </label><br>
        <input type="text" name='data_nascimento'><br>
        <label for="cpf">Digite seu CPF: </label><br>
        <input type="text" name='cpf'><br>
        <label for="endereco">Digite seu Endereço: </label><br>
        <input type="text" name='endereco'><br>

        <button name='cadUsuario'>Cadastrar</button>
        <button name='login'>Ir para Login</button>
    </form>

    <?php
        if (isset($_POST['cadUsuario'])) {
            require_once('./php/cadUsuario.php');
        }
        if (isset($_POST['login'])) {
            header('location:./index.php');
        }
    ?>

</body>
</html>