<?php

require_once "db/Db_Conn.php";
require_once "helpers/init_session.php";
require_once "helpers/help_func.php";
require_once "db/DbFunc.php";





if(verifica_campo("nome") && verifica_campo("senha")){
    $cpf = $_POST['cpf'];
    $tabela = $_POST['funcao'];
    $nome = $_POST['user_nome'];
    $senha = $_POST['senha'];
}






$atualizou = DbFunc::update_usuario($conexao,$tabela,$cpf,$nome,$senha);

if($atualizou){
    echo "<script>alert('Cadastro Atualizado com sucesso')</script>";
    $_SESSION['senha'] = $senha;
    header('Location:home.php');
} 

?>