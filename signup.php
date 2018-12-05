<?php
session_start();
require_once "db/Db_Conn.php";
require_once "db/DbFunc.php";
require_once "models/User.php";



if (isset($_POST['nome'])){
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $senha = $_POST["senha"];
    $sexo = $_POST["sexo"];
    $data_de_nascimento = $_POST["birthdate"];
    $funcao = $_POST["funcao"];
}


$usuario = new User($nome,$senha,$email,$data_de_nascimento,$cpf,$sexo,$funcao);

$inseriu = "";
if($funcao === "Vocalista"){
    $inseriu = DbFunc::criar_usuario('cantor',$usuario,$conexao);
}else if($funcao === "Musico"){
    $inseriu = DbFunc::criar_usuario('musico',$usuario,$conexao);
}


if ($inseriu) {
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    setcookie('login', $email);
    header("Location:home.php");
}else{
    echo "<h1>Tem Mutreta</h1>";
}



?>