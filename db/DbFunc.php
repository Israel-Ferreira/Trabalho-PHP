<?php
class DbFunc {

    public static function procurar_usuario($tabela,$email,$senha,$conn){
        $query = "SELECT * FROM $tabela WHERE user_Email = '$email' AND senha = '$senha'";
        return mysqli_query($conn,$query);
    }

    public static function criar_usuario($tabela,$usuario,$conn){
        $query = "INSERT INTO $tabela (`user_nome`,`user_Email`,`user_CPF`,`senha`,`user_sexo`,`user_Data_Nasc`,`estilo_musical`) VALUES ('$usuario->nome','$usuario->email','$usuario->cpf','$usuario->senha','$usuario->sexo','$usuario->data_de_nascimento','$usuario->funcao')";
        return mysqli_query($conn,$query);
    }

    public static function deletar_usuario($conn,$tabela,$cpf){
        $query  = "DELETE FROM $tabela WHERE cpf=$cpf";
        return mysqli_query($conn,$query);
    }

    public static function informacoes_cpf($conn,$tabela,$cpf){
        $query = "SELECT * FROM $tabela WHERE user_CPF='$cpf'";
        return mysqli_query($conn,$query);
    }

    public static function achar_usuario($conn,$tabela,$nome){
        $query = "SELECT * FROM $tabela WHERE user_nome='$nome'";
        return mysqli_query($conn,$query);
    }

}

?>