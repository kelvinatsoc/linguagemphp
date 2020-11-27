<?php

require 'model/dados.php';

if ( isset($_POST['cadastrar']) ) { 

	$dir_imagens = '../view/imagens/';

	if ( !is_dir('../view/imagens') ) {

		mkdir( $dir_imagens );
	}

	require 'controller/consist_cadastro.php';

	$id = gravar_usuario( $_POST['nome'], $_POST['email'], $_POST['senha']);
	
	if ( $id ) {

		if ( isset( $_FILES['foto'] ) ) { //Verifica se foi enviado o arquivo

			if ( $_FILES['foto']['error'] == 0 ) { //Verifica se não deu erro no upload

				$nome_explodido = explode( '.', $_FILES['foto']['name']);
				$ext = end($nome_explodido);
				$nome_imagem = 'foto_' . md5(rand(-99999999999,9999999999)) . '_' . $id . '.' . $ext;

				$arquivo_temp = $_FILES['foto']['tmp_name'];
				$destino = $dir_imagens . $nome_imagem;

				move_uploaded_file(	$arquivo_temp, $destino);

				vincula_imagem_ao_usuario( $id, $nome_imagem);
			}
		}



		session_start();

		$_SESSION['login'] = $_POST['email'];
		$_SESSION['id'] = $id;

		header('Location: ../');

	} else {

		$erros = ['Não foi possível criar o usuário'];
	}

} else {

	$erros = [];
}

include 'view/cadastro_tpl.php';