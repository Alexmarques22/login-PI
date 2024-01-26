<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="index.css" />
    <title>Singup</title>
  </head>
  <body>
  <form method="POST" action="criar-cadastro.php"> 
    <div class="container">
      <div class="card">
        <h1>Cadastrar</h1>

        <div id="msgError"></div>
        <div id="msgSuccess"></div>
        <form method="POST" action="">

        <div class="label-float">
          <input type="text" id="nome"name="nome" placeholder=" " required />
          <label id="labelNome" for="nome">Nome</label>
        </div>

        <div class="label-float">
          <input type="text" id="usuario"name="usuario" placeholder=" " required />
          <label id="labelUsuario" for="usuario">Usuário</label>
        </div>

        <div class="label-float">
          <input type="text" id="Email" name="email" placeholder=" " required />
          <label id="labelEmail" for="Email">Email</label>
        </div>

        <div class="label-float">
          <input type="password" id="senha" name="senha" placeholder=" " required />
          <label id="labelSenha" for="senha">Senha</label>
          <i id="verSenha" class="fa fa-eye" aria-hidden="true"></i>
        </div>


        <div class="justify-center">
          <button onclick="cadastrar()">Cadastrar</button>
        </div>
      </div>
    </div>
    
  </form>

    <script src="../js/signup.js"></script>
  </body>
</html>