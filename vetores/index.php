<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

date_default_timezone_set('America/Sao_Paulo');

//Solução com muitas linhas (sem vetor)
$domingo 	= 0;
$segunda 	= 1;
$terca		= 2;
$quarta		= 3;
$quinta		= 4;
$sexta		= 5;
$sabado		= 6;

echo "\n\n"; 

var_dump( date('d/m/Y') ); //Para fazer o debug (verbose) 

echo "\n\n"; 

switch ( date('w') ) {

 	case $domingo:
 		echo 'Domingo';
 		break;
 	case $segunda:
 		echo 'Segunda';
 		break;
 	case $terca:
 		echo 'Terça';
 		break;
 	case $quarta:
 		echo 'Quarta';
 		break;
 	case $quinta:
 		echo "Quinta do switch\n";
 		break;
 	case $sexta:
 		echo 'Sexta';
 		break;
 	case $sabado:
 		echo 'Sábado'; 		
 		break; 	
 } 

//Solução com poucas linhas (com vetor)
$semana[0] = 'Domingo';
$semana[1] = 'Segunda';
$semana[2] = 'Terça';
$semana[3] = 'Quarta';
$semana[4] = 'Quinta';
$semana[5] = 'Sexta';
$semana[6] = 'Sábado';

$hoje = date('w');

echo "\nHoje é " . $semana[$hoje] . "\n";

echo "\n\n";

unset($semana);

//Solução com poucas linhas (com vetor)
$semana['Domingo'] = 0;
$semana['Segunda'] = 1;
$semana['Terça'] = 2;
$semana['Quarta'] = 3;
$semana['Thursday'] = 4;
$semana['Sexta'] = 5;
$semana['Sábado'] = 6;

$hoje = date('l');

echo "\nHoje é " . $semana[$hoje] . " com índice alfanumérico\n";

echo "\n\n";

//Constantes no PHP
define('MUNDO', 'Raimundo Nonato');

define('RES_P_PAG', 10);

for ( $i = 0 ; $i < RES_P_PAG ; $i++ ) {

	echo "Resultado $i\n";
}

echo 'Olá ' . MUNDO . "\n\n";

//Vetor simples
$usuario = [	'nome' 	=> 	'Luiz Bono',
				'idade'	=>	25,
				'peso'	=>	67808.44,
				'signo'	=>	'aquariano'];

//Escrever
//O professor Luiz Bono tem 25 anos, pesa 67,8 Kg e é aquariano.				

//Como mostrar vetor dentro de string especial (entre aspas duplas)
echo 	"O professor {$usuario['nome']} tem {$usuario['idade']} anos, pesa "
		. number_format( $usuario['peso'], 2, ',', '.') . //brinde, função para formatar números	
		" gramas e é {$usuario['signo']}.\n\n";				

unset($usuario);

//Exemplo de vetor com mais de uma dimensão (matriz)
$professores = array(	0 => array(	'nome' 	=> 	'Luiz Bono',
									'idade'	=>	25,
									'peso'	=>	67808.44,
									'signo'	=>	'aquariano'),
						1 => array(	'nome' 	=> 	'Thiago Claro',
									'idade'	=>	35,
									'peso'	=>	54808.44,
									'signo'	=>	'sagitário'),
						2 => array(	'nome' 	=> 	'Thyago Quintas',
									'idade'	=>	21,
									'peso'	=>	7808.44,
									'signo'	=>	'leonino'));
?>
<table border="1">
<tr> <td>ID</td> <td>Nome</td> <td>Idade</td> <td>Peso</td> <td>Signo</td> </tr>
<?php
//Exemplo de como utilizar uma matriz
foreach ($professores as $linha => $professor) {
	
	echo "<tr> 	<td>$linha</td> 
				<td>{$professor['nome']}</td> 
				<td>{$professor['idade']}</td> 
				<td>{$professor['peso']}</td> 
				<td>{$professor['signo']}</td> </tr>";
}

?>
</table>