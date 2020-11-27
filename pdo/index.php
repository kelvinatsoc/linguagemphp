<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$dsn = 'mysql:dbname=cms;host=dockerhost';//trocar dockerhost para localhost

//Tutorial para instalação dos drivers: 
//https://hcode.com.br/blog/instalando-sql-server-e-conectando-com-php

//DSN para SQL Server
//$dsn = 'sqlsrv:Server=localhost\\SQLEXPRESS;Database=MyDatabase';
$user = 'cms';
$password = 'cms';

//Como se conectar com o banco
$db = new PDO($dsn, $user, $password);

//Como fazer uma consulta SELECT
$sql = 'SELECT nome, telefone FROM cliente';

$r = $db->query($sql);

echo '<pre>';

while ($reg = $r->fetch(PDO::FETCH_ASSOC)) {

	echo "Sr(a) {$reg['nome']}, seu telefone {$reg['telefone']} será bloqueado se a conta não for paga \n\n";
}

//Como fazer um DELETE
if ( $db->query('DELETE FROM cliente WHERE id = 2') ) {

	echo "ID 2 apagado com sucesso!\n\n";

} else {

	echo "Erro ao tentar apagar o ID 2";
}

//Como fazer um SELECT
foreach ( $db->query($sql) as $reg ) {

	echo "Sr(a) {$reg['nome']}, seu telefone {$reg['telefone']} será bloqueado se a conta não for paga \n\n";
}

//Como fazer um UPDATE
if ( $db->query('UPDATE cliente SET nome = "Arthur" WHERE id = 3') ) {

	echo "ID 3 atualizado com sucesso!\n\n";

} else {

	echo "Erro ao tentar atualizar o ID 3";
}

//Como fazer um SELECT
foreach ( $db->query($sql) as $reg ) {

	echo "Sr(a) {$reg['nome']}, seu telefone {$reg['telefone']} será bloqueado se a conta não for paga \n\n";
}

//Como fazer um INSERT
if ( $db->query('	INSERT INTO cliente 
						(id, nome, telefone) 
					VALUES 
						(2, "Luiz Bono", 5511994586373)') ) {

	echo "ID 2 gerado novamente com sucesso!\n\n";

} else {

	echo "Erro ao tentar gerar novamente o ID 2";
}

//Como fazer um SELECT
foreach ( $db->query($sql) as $reg ) {

	echo "Sr(a) {$reg['nome']}, seu telefone {$reg['telefone']} será bloqueado se a conta não for paga \n\n";
}