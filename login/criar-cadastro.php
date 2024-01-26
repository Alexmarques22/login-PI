<?php
echo '<h2>criar-cadastro.php<h2>';

$nome_form =$_POST['nome'];
$usuario_form =$_POST['usuario'];
$email_form =$_POST['email'];
$senha_form =$_POST['senha'];

function CadastroUsuario($usuario,$senha){

    $conexao = new PDO("mysql:host=localhost;dbname=login_bd_sql", "root", "");
    $query = "INSERT INTO
     usuarios (usuario, senha)
     VALUE
      ('".$usuario."','".$senha."')";
      $conexao->exec($query); 

      $ultimo_id = ($conexao->lastInsertId());
      
      return $ultimo_id;

}

function InformacoesPessoais($nome, $email,$id_usuario){
$conexao = new PDO('mysql:host=localhost;dbname=login_bd_sql', 'root',"");  


    $query = "INSERT INTO
    tb_informacoes_pessoais(nome, email)
     VALUE
      ('".$nome."','".$email."''".$id_usuario."')";
      $conexao->exec($query); 
      


}


$id_usuario = CadastroUsuario($usuario_form,$senha_form);
InformacoesPessoais($nome_form,$email_form,$id_usuario);