<?php

require_once 'db.php';

//Consulta para listar meus contatos
$tabela = array();

$lista_sql = '	SELECT 
					id, nome, whatsapp 
				FROM 
					contatos 
				ORDER BY 
					nome';

foreach ( $objBanco->query( $lista_sql ) as $registro) {
	
	$tabela[$registro['id']] = [ 	'nome' => $registro['nome'], 
									'whatsapp' => $registro['whatsapp'] ];
}

//Chama o template (front-end)
include 'lista_contato_tpl.php';