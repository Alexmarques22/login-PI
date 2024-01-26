<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Login</title>
</head>

<body>
    <div class="container login-container">
        <h2 class="mb-3 text-center">Login</h2>
        <?php
        if (isset($_GET ['menssagem'])){
            echo '<h3 class="text-center mb-4">senha ou usuario incorreto <h3>';
        }
        ?>
        <form method="POST" action="validar-senha.php">

            <div class="mt-1 form-growp">
                <label for="usuario">Usuario:</label>
                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Digite o seu usuario">
            </div>
            <div class="mt-1 form-growp">
                <label for="senha">Senha:</label>
                <input type="text" class="form-control" id="senha" name="senha" placeholder="Digite o sua senha">
            </div>

            <div class="mt-3 text-center">
                <button type="submit" class="btn btn-warning">Login</button>
            </div>
        </form>
        <div class="mt-3 text-center">
            <a href="#">Esqueci a senha</a> | <a href="cadastro.php">Cadastrar</a>
        </div>
    </div>
</body>

</html>