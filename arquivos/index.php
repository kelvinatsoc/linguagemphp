<?php

$fp = fopen( 'planilha.csv', 'w');

fwrite( $fp, "Nome;Telefone\n");
fwrite( $fp, "Luiz;1112344321\n");

fclose( $fp );

echo "<pre>ARQUIVO GERADO\n\n";

$fp = fopen( 'planilha.csv', 'a');

fwrite( $fp, "Marcel;119999999\n");
fwrite( $fp, "Bruno;1155555555\n");
fwrite( $fp, "Eduardo;1133333333\n");

fclose( $fp );

echo "ARQUIVO ALTERADO\n\n";

echo "VEJA O CONTEÚDO DO ARQUIVO\n\n";

$fp = fopen( 'planilha.csv', 'r');

while ( $linha = fgets( $fp ) ) {

	echo $linha;
}

fclose( $fp );

