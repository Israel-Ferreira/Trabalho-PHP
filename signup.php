<?php
session_start();
require_once "db/Db_Conn.php";
require_once "db/DbFunc.php";
require_once "models/User.php";
//$conn =  mysqli_connect("localhost","root","","linkedin_musical") or die("Falha ao Conectar com o banco de dados");


echo "<script>alert('Está conectado com o banco')</script>";

if (isset($_POST['nome'])){
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $senha = $_POST["senha"];
    $sexo = $_POST["sexo"];
    $data_de_nascimento = $_POST["birthdate"];
    $funcao = $_POST["funcao"];
    echo "<script>alert('Entrou aqui')</script>";
}


$usuario = new User($nome,$senha,$email,$data_de_nascimento,$cpf,$sexo,$funcao);
$inseriu =  DbFunc::criar_usuario('cantor',$usuario,$conexao);

if($inseriu){
    echo "Cadastro Realizado com Sucesso";
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    echo "<script>alert('Cadastro realizado com sucesso')</script>";
    setcookie('login',$email);
    mysqli_close($conexao);
}

?>