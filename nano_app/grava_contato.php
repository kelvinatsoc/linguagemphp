<?php

require_once 'db.php';

//Como evitar SQL injection

//Preparo a consulta

$objStmt = $objBanco->prepare('	INSERT INTO contatos 
									( nome, whatsapp)
								VALUES 
									( :nm, :wzap)');


//Substitui :nm e :wzap pelo valor enviado pelo usuário

$objStmt->bindParam(':nm', $_POST['nm']);					
$objStmt->bindParam(':wzap', $_POST['whats']);	

/*
Outra forma de preparar e executar a consulta, usando ?
no lugar de :label
Quando passar o array em execute, a ordem dos elementos
importa!

$objStmt = $objBanco->prepare('	INSERT INTO contatos 
									( nome, whatsapp)
								VALUES 
									( ?, ?)');

$objStmt->execute( array( $_POST['nm'], $_POST['whats'])); 
*/

//Executo

if ( $objStmt->execute() ) {

	$msg = 'Obrigado por se cadastrar';

} else {

	$msg = ' :-( deu erro, tente novamente! ';
}

//Chama o template (front-end)

include 'grava_contato_tpl.php';