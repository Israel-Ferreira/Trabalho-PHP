<?php

require_once "helpers/init_session.php";
require_once "db/Db_Conn.php";
require_once "db/DbFunc.php";

$cpf = $_GET['cpf'];
$tabela = $_GET['tabela'];

$deletou = DbFunc::deletar_usuario($conexao,$tabela,$cpf);

if($deletou){
    echo "<script>alert('Usuário deletado com sucesso');</script>";
    require_once "logout.php";
}


?>
