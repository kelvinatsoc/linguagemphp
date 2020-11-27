<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function operacao(	float $num1, //float é o tipo de dado esperado
					float $num2 /* parâmetro obrigatório */, 
					string $operacao = '+' /* parâmetro não obrigatório */ ): ?float //Tipo de saída, o ? permite que além de float a função retorne null 
{
	switch ( $operacao ) {

		case '+':

			return $num1 + $num2;

		case '-':

			return $num1 - $num2;

		case '/':

			return $num1 / $num2;

		case '*':

			return $num1 * $num2;

		default:

			return null;
	}
}

$dia = 2;//Variável fora do escopo da função 

function dia_da_semana( int $dia ): string
{
	$semana = ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];

	return $semana[$dia] ?? 'Use de 0 a 6';
}

echo "\nO resultado é: " . operacao( 2.5, 2.5, '*') . "\n\n";

echo "\n\nO dia é " . dia_da_semana(6) . "\n\n";

$nome = 'Bono';

//Passagem de parâmetro por referência, o & ;-) (muda o valor da variável fora do escopo da função)
function muda_nome( string &$var ): string 
{
	$var = 'Outro nome';
	return $var;
}

function exemplo( $param1, $param2 )
{
	return 'Isso também funciona';	
}

echo "\nA função retornará: " . muda_nome($nome) . "\n\n";

echo "\nA variável \$nome ainda vale: \"$nome\" \n\n";