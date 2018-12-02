<?php
require_once 'db/Db_Conn.php';
require_once 'db/DbFunc.php';
require_once 'helpers/help_func.php';


session_start();


if(verifica_campo('email') && verifica_campo('senha')){
    $email = $_POST['email'];
    $senha = $_POST['senha'];
}else{
    header('Location:index.html');
}

echo "<script>alert($email);</script>";



$resultados =  DbFunc::procurar_usuario("cantor",$email,$senha,$conexao);
if(mysqli_num_rows($resultados) <= 0 && mysqli_num_rows($resultados) > 1){
    header("Location:index.html");
}else{
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    setcookie("login",$login);
    header("Location:home.php");
}

?>