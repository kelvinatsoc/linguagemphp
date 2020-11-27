<?php

chdir( __DIR__ );

require '../model/Produto.class.php';

class ProdutoController extends Produto {

	private $precoMinimo = 100;

	public function __construct(string $nome, string $descricao, float $preco){

		parent::__construct( $nome, $descricao, $preco);
	} 

	public function maiorIgualPrecoMinimo(): bool
	{
		return $this->preco >= $this->precoMinimo;
	}
}