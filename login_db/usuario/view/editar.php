<center>
	<br><br><h1>EDITAR USUÁRIO</h1><br><br>
	<table border="1">
		<tr>
			<td>
				<form method="post">
					<br>
					<?php
					if ( isset($editado_ok) ) {
						echo "<font color='green'>Editado com sucesso!</font>";
					}
					?>
					<font color="red">
					<?php
					if ( isset($erros) ){
						if ( count($erros) > 0 ) {

							foreach ($erros as $erro) {
								echo $erro . '<br>';
							}
						}
					}
					?>
					</font>
					<br>
					<br>
					<label for="nome">Nome</label>
					<input type="text" id="nome" name="nome" 
							value="<?php echo $nome; ?>" required>
					<br><br>
					<label for="email">E-mail</label>
					<input type="text" id="email" name="email"
							value="<?php echo $email; ?>" required>
					<br><br>
					<label for="senha">Senha</label>
					<input type="password" id="senha" name="senha" value="****" required>
					<br>
					<br>
					<label for="conf_senha">Confirme a senha</label>
					<input type="password" id="conf_senha" name="conf_senha" value="****" required>
					<br><br>
					<input type="hidden" name="id" value="<?php echo $_GET['editar']; ?>">
					<input type="submit" name="gravar" value="Gravar">
				</form>	
			</td>
		</tr>
	</table>
</center>