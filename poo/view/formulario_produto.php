<html>
	<body>
		<center>
			<form method="post">

				<?php
				if ( !empty($msg) ) {

					echo "<strong>$msg</strong>";
				}
				?>

				<table>
					<tr>
						<td>Nome: </td><td> <input type="text" name="nome"> </td>
					</tr>
					<tr>
						<td>Descrição: </td><td> <input type="text" name="descricao"> </td>
					</tr>
					<tr>
						<td>Preço: </td><td> <input type="text" name="preco"> </td>
					</tr>
					<tr>
						<td></td><td> <input type="submit" name="gravar" value="Gravar"> </td>
					</tr>
				</table>
			</form>
		</center>
	</body>
</html>