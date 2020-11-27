<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Produto extends PDO {

	//Atributos ou Propriedades
	protected $nome;
	protected $descricao;
	protected $preco;

	//Métodos
	public function __construct( string $nome, string $descricao, float $preco ) {

		$this->nome = $nome;
		$this->descricao = $descricao;
		$this->preco = $preco;

		parent::__construct(	'mysql:dbname=cms;host=192.168.0.2',
								'cms',
								'cms');
	}

	public function setNome(string $nome): bool
	{
		return $this->nome = $nome;
	}

	public function setDescricao(string $descricao): bool
	{
		return $this->descricao = $descricao;
	}	

	public function setPreco(float $preco): bool
	{
		return $this->preco = $preco;
	}	

	public function gravar(): bool
	{
		$stmt = $this->prepare(' INSERT INTO produtos 
									(nome, descricao, preco) 
								VALUES 
									(:nome, :descricao, :preco) ');

		$stmt->bindParam( ':nome', $this->nome );
		$stmt->bindParam( ':descricao', $this->descricao );
		$stmt->bindParam( ':preco', $this->preco );

		return $stmt->execute();
	}
}