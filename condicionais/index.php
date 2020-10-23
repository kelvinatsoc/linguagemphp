<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$clima = 'quente';

//Condicional if
if ( $clima == 'gelado' ) {

	echo '<br><br>Meu pé congela!<br><br>';
}

$bool = '1';

//Condicional "operador ternário"
$var = $bool == 1 ? '$bool é igual de 1' : '$bool é diferente de 1';

echo $var . '<br><br>';

//Condicional "operador ternário" e comparador de tipo e valor
$var = $bool === 1 ? '$bool é igual de 1' : '$bool é diferente de 1';

echo $var . '<br><br>';

$var = $bool != 1 ? '$bool é diferente de 1' : '$bool é igual de 1';

echo $var . '<br><br>';

$var = $bool !== 1 ? '$bool é diferente de 1' : '$bool é igual de 1';

echo $var . '<br><br>';

$frase = 'Meu pai tinha um cachorro amarelo e rosa';

// if com comparador de valor e tipo de variável
if ( strpos( $frase, 'meu') !== false ) {

	echo 'Encontrei o meu!';

} elseif ( strpos( $frase, 'MEU') !== false ) {

	echo 'Encontrei o MEU!';

} else if ( strpos( $frase, 'Meu') !== false ) {

	echo 'Encontrei o Meu!';

} else {

	echo 'Não há Meu algum!';
}

echo '<br><br>';

//switch
switch ( $clima ) {

	case 'quente':
	case 'tropical':
		
		echo 'Adoro clima quente!';

		if ( true ) {

			echo '<br> -- if dentro do switch';

			if ( true ) {

				echo '<br> ---- if aninhado dentro de um switch';
			}
		} 

		break;

	case 'morno':
		
		echo 'Morno é melhor que frio!';
		break;	

	case 'frio':
		
		echo 'Frio eu adoro quando está longe!';
		break;	

	case 'gelado':
		
		echo 'Canadá!';
		break;	
	
	default:

		echo 'Clima desconhecido!';
		break;
}

$isso = 'véi';

//Condicional nova no PHP
$isso = $isso ?? 'coisa';

echo "<br><br>Olha só $isso";




