<?php
class User{

    public $nome;
	public $senha;
	public $email;
	public $cpf;
    public $sexo;
    public $data_de_nascimento;
    public $telefone;
    public $estilo_mus;
    public $tempo_exp;




	function __construct($nome,$senha,$email,$data_de_nascimento,$cpf,$sexo){
		$this->nome = $nome;
		$this->senha = $senha;
        $this->email = $email;
        $this->sexo = $sexo;
        $this->cpf = $cpf;
        $this->data_de_nascimento = $data_de_nascimento;
    }
}
?>