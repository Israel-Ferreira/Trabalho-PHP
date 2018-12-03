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


$resultados_sing =  DbFunc::procurar_usuario("cantor",$email,$senha,$conexao);
$resultados_mus = DbFunc::procurar_usuario("musico",$email,$senha,$conexao);

if(mysqli_num_rows($resultados_mus) <= 0 && mysqli_num_rows($resultados_sing) <= 0){
    header("Location:index.html");
}else{
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    setcookie("login",$login);
    header("Location:home.php");
}

?>