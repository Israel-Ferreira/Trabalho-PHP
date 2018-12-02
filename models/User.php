<?php
class User
{

    public $nome;
    public $senha;
    public $email;
    public $cpf;
    public $sexo;
    public $funcao;
    public $data_de_nascimento;
    public $telefone;
    public $estilo_mus;
    public $tempo_exp;


    function __construct($nome, $senha, $email, $data_de_nascimento, $cpf, $sexo, $funcao)
    {
        $this->funcao = $funcao;
        $this->nome = $nome;
        $this->senha = $senha;
        $this->email = $email;
        $this->sexo = $sexo;
        $this->cpf = $cpf;
        $this->data_de_nascimento = $data_de_nascimento;
    }

    public function get_username()
    {
        return $this->nome;
    }

    public function get_email()
    {
        return $this->email;
    }

    public function get_cpf()
    {
        return $this->cpf;
    }

    public function get_senha()
    {
        return $this->senha;
    }

    public function get_sexo()
    {
        return $this->sexo;
    }

    public function get_birthdate()
    {
        return $this->data_de_nascimento;
    }


}
?>