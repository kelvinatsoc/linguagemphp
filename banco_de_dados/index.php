<?php

// mysqli_connect( 'host', 'user', 'pass', 'nome_do_db');

///////////////////
//Conecta no sgbd
$db = mysqli_connect( 'dockerhost', 'cms', 'cms', 'cms'); // Conecta no SGBD

///////////////
//Cria tabela
$query = mysqli_query(	$db, //faz consulta no banco - cria tabela
						'CREATE TABLE IF NOT EXISTS contatos 
							(	id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
								nome VARCHAR(255) NOT NULL,
								whatsapp BIGINT)');

if ( $query ) {

	echo 'Tabela contatos criada com sucesso!<br>';

} else {

	echo 'Não foi possível criar a tabela contatos: ';

	echo mysqli_connect_error();
}

$contato = ['nome' => 'Luiz Bono', 'whatsapp' => '5511925633652'];

///////////////////////
//Insere dados no banco
if ( mysqli_query( $db, //Aspas duplas, pois há variável no meio da string
					"
					INSERT INTO contatos 
						(nome, whatsapp) 
					VALUES 
						('{$contato['nome']}', '{$contato['whatsapp']}')")){

	echo "Contato inserido com sucesso!";
}

/////////////////////////////
//Lista o que está na tabela 
$query = mysqli_query( $db, '	SELECT 
									id, nome, whatsapp
								FROM
									contatos');
echo '<table border="1">';
echo "<tr><td>ID</td><td>NOME</td><td>WHATSAPP</td></tr>";

while ( $registro = $query->fetch_assoc() ) {

	echo "	<tr>
				<td>{$registro['id']}</td>
				<td>{$registro['nome']}</td>
				<td>{$registro['whatsapp']}</td>
			</tr>";
}

echo '</table>';

/////////////////////////////
//Apaga o que está na tabela 
if ( mysqli_query( $db, 'DELETE FROM contatos WHERE id = 10') ) {

	echo "Registro apagado com sucesso!";

} else {

	echo "Não foi possível apagar o registro";
}

//$_POST $_GET $_REQUEST - Vetores super globais para recebermos dados do usuário

echo "<br><br>Nome enviado: {$_POST['nm']}, whatsapp: {$_POST['whats']}";