código, nome da obra, nome do autor, edição, editora,
ano de publicação, número de páginas
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livro</title>
</head>
<body>
    <h1>Cadastro de Livro</h1>
    <form method="post">
        <label for="nome">nome da obra: </label><br>
        <input type="text" name = "nome"><br>
        <label for="autor">nome do autor: </label><br>
        <input type="text" name = "autor"><br>
        <label for="edicao">nome do edição: </label><br>
        <input type="text" name = "edicao"><br>
        <label for="editora">nome do editora: </label><br>
        <input type="text" name = "editora"><br>
        <label for="ano">nome do ano da publicação: </label><br>
        <input type="text" name = "ano"><br>
        <label for="pagina">nome do números de páginas: </label><br>
        <input type="text" name = "pagina"><br>
        <button name = "cadastrar">Cadastrar</button>
        <button name = "voltar">Voltar</button>
    </form>
    <?php
        if (isset($_POST["cadastrar"])) {
            require_once("./php/cadLivro.php");
        }
        if (isset($_POST["voltar"])) {
            header("location:./index.php");
        }
    
    ?>
</body>
</html>