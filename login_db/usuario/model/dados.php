<?php

chdir( __DIR__ );

require_once '../../db.php';

function listar( int $id = null): array 
{
	global $db;

	if ( is_null($id) ) { 

		$str = '';

		//SQL se $id não for passado como parâmetro
		//SELECT id, nome, email FROM usuario
	
	} else {

		//Caso o usuário passe um parâmetro para listar()
		//Na consulta SQL será adicionada a cláusula WHERE.
		//Ainda, o preg_replace() garante que não haverá 
		//SQL injection.
		$str = 'WHERE id = ' . preg_replace('/\D/', '', $id);

		//SQL se $id for passado como parâmetro
		//SELECT id, nome, email FROM usuario WHERE id = N
	}

	$r = $db->query("SELECT id, nome, email FROM usuario $str");
	$reg = $r->fetchAll();

	return is_array($reg) ? $reg : [];
}

function ja_existe_email( string $email ): bool
{
	if ( empty($email) ) return false;

	global $db;

	$stmt = $db->prepare('SELECT id FROM usuario WHERE email = :email');

	$stmt->bindParam(':email', $email);					

	$stmt->execute();

	$registro = $stmt->fetch();

	return is_numeric($registro['id']) ? true : false;
}

function vincula_imagem_ao_usuario( int $id, string $nome_imagem ): bool
{
	global $db;

	$stmt = $db->prepare('UPDATE usuario SET foto = :foto WHERE id = :id');

	$stmt->bindParam(':foto', $nome_imagem);					
	$stmt->bindParam(':id', $id);

	return $stmt->execute();	
}

function get_imagem_usuario( int $id ): array
{
	global $db;

	$stmt = $db->prepare('SELECT foto FROM usuario WHERE id = :id');

	$stmt->bindParam(':id', $id);

	$stmt->execute();	

	return $stmt->fetchAll();
}

function gravar_usuario( string $nome, string $email, string $senha): ?int 
{
	global $db;

	$senha = password_hash( $senha, PASSWORD_DEFAULT);

	$stmt = $db->prepare('	INSERT INTO usuario 
								( nome, email, senha) 
							VALUES 
								( :nome, :email, :senha)');

	$stmt->bindParam(':nome', $nome);
	$stmt->bindParam(':email', $email);
	$stmt->bindParam(':senha', $senha);

	$stmt->execute();

	return (int) $db->lastInsertId();
}

function editar_usuario( int $id, string $nome, string $email, string $senha): bool 
{
	global $db;

	$senha = password_hash( $senha, PASSWORD_DEFAULT);

	$stmt = $db->prepare('	UPDATE 
								usuario 
							SET 
								nome = :nome, email = :email, senha = :senha
							WHERE
								id = :id');

	$stmt->bindParam(':id', $id);
	$stmt->bindParam(':nome', $nome);
	$stmt->bindParam(':email', $email);
	$stmt->bindParam(':senha', $senha);

	return $stmt->execute();
}

function apagar_usuario( int $id ): bool
{
	if ( is_numeric($id) ) {

		global $db;

		if ( $db->exec("DELETE FROM usuario WHERE id = $id") > 0 ) {

			return true;

		} else {

			return false;
		}

	} else {

		return false;
	}
}