<?php
require_once 'db.php';

$objBanco = new PDO(DSN, DB_USER, DB_PASS);

/*try {
    $objBanco = new PDO(DSN, DB_USER, DB_PASS);
} catch (PDOException $objErro) {
    echo ' SGBD Indisponivel: ' . $objErro->getMessage();
    exit();
}*/

$objStmt = $objBanco->prepare('
    INSERT INTO contatos(nome, whatsapp) 
    VALUES( :nm, :wzap)');

$objStmt->bindParam(':nm', $_POST['nm']);
$objStmt->bindParam(':wzap', $_POST['whats']);


if ($objStmt->execute()) {
    $msg = 'Obrigado por se cadastrar';
} else {
    $msg = ': -(deu erro, tente novamente!';
}

include 'grava_contato_tpl.php';
