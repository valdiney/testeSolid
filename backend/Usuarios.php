<?php 
class Usuarios
{
	protected $nome;
	protected $nascimento;
	protected $cpf;

	public function setNome($nome)
	{
		$this->nome = $nome;
	}

	public function setNascimento($nascimento)
	{
		$this->nascimento = $nascimento;
	}

	public function setCpf($cpf)
	{
		$this->cpf = $cpf;
	}

	public function geraArrayUsuario()
	{
		return array($this->nome, $this->nascimento, $this->cpf);
	}
}