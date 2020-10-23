<?php

date_default_timezone_set('America/Sao_Paulo');

//Exemplo de for
for ( $i = 0, $j = 4 ; $i < 5 && $j >= 0 ; $i++, $j-- ) {

	echo "Linha: $i $j<br>";
}

echo '<br><br>';

//Exemplo de while
$i = 0;
$j = 4;

while ( $i < 5 && $j >= 0) {

	echo "Linha: $i $j<br>";

	$i++;
	$j--;
}

echo '<br><br>';

//Exemplo de do while
$i = 0;
$j = 4;

do {

	echo "Linha: $i $j<br>";

	$i++;
	$j--;

} while ( $i < 5 && $j >= 0 );

echo '<br><br>';

//Solução com muitas linhas (sem vetor)
$domingo 	= 0;
$segunda 	= 1;
$terca		= 2;
$quarta		= 3;
$quinta		= 4;
$sexta		= 5;
$sabado		= 6;

echo '<br><br>';

var_dump( date('d/m/Y') ); //Para fazer o debug (verbose) 

echo '<br><br>';

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
 		echo 'Quinta do switch<br>';
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

echo "Hoje é " . $semana[$hoje];