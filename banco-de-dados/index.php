<?php
// mysql_connect('host', 'user', 'pass', 'nome-do-bd')

$db = mysqli_connect('dockerhost', 'cms', 'cms', 'cms'); // conecta no SGDB

echo '<prev';

var_dump($bd);



// criar tabela no mysql, primary key tem que ser uma chave unica, que nao seja repetida, 
$query = mysqli_query(
    $db,
    'CREATE TABLE contatos(id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
nome VARCHAR(255) NOT NULL, 
whatsapp BIGINT)'
);

// verifica se a tabela foi criada na PRIMEIRA VEZ, se na primeira vez der TRUE, na segunda ele ira dar FALSE, mas o banco continuara funcionando
if ($query) {
    echo 'Tabela criada';
} else {
    echo 'Tabela nao criada: ';
    echo mysqli_connect_error();
};

$contato =  ['nome' => 'Kelvin', 'whatsapp' => '11950611722'];

if(mysqli_query($db, "INSERT INTO contatos (nome, whatsapp) 
VALUES));
