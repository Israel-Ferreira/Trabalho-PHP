<?php
require_once './db/Db_Conn.php';
require_once './db/DbFunc.php';

$db = new DbConn();
$conn = $db->connect("linkedin_musical");

session_start();


if(verifica_campo('email') && verifica_campo('senha')){
$email = $_POST['email'];
$senha =  $_POST['senha'];


if($conn->connect_errno){
    die("Falha ao conectar com o banco de dados");
    header("location:index.html");
}

$orm = new DbFunc($conn); //"SELECT user_Email,senha FROM cantor WHERE user_Email = '$email' AND senha = $senha"
$resultados =  $orm->procurar_usuario("cantor",$email,$senha);
if(mysqli_num_rows($resultados) <= 0 && mysqli_num_rows($resultados) > 1){
    header("Location:index.html");
}else{
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    setcookie("login",$login);
    header("Location:home.php");
}

?>