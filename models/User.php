<?php
class Usuarios{

    public $nome;
	public $senha;
	public $email;
	public $cpf;
    public $sexo;
    public $data_de_nascimento;
    public $telefone;
    public $estilo_mus;
    public $tempo_exp;




	function __construct($nome,$sobrenome,$senha,$email,$telefone,$estilo_mus,$data_de_nascimento,$tempo_exp,$cpf,$sexo){
		$this->nome = $nome;
		$this->senha = $senha;
        $this->email = $email;
        $this->sexo = $sexo;
        $this->cpf = $cpf;
		$this->telefone = $telefone;
        $this->estilo_mus = $estilo_mus;
        $this->data_de_nascimento = $data_de_nascimento;
        $this->tempo_exp = $tempo_exp;
    }
}
?>