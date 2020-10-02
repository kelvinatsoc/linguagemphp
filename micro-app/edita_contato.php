<?php

require_once 'db.php';

$id = preg_replace('/\D/', '', $_GET['id']);
$lista_sql = "SELECT
                id, nome, whatsapp
            FROM
                contatos
            WHERE
                id = $id";
foreach ($objBanco->query(lista_sql) as $registro) {
    $contato = $registro;
}
$contato = $objBanco->query($lista_sql);
include 'edita_contato_tpl.php';
