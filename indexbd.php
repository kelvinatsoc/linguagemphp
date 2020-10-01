<?php

$db = mysqli_connect('dockerhost', 'cms', 'cms', 'cms');

$query = mysqli_query(
    $db,
    'CREATE TABLE IF NOT EXISTS contatos(
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    whatsapp BIGINT
)'
);

if ($query) {
    echo 'Tabela contatos criada com sucesso!<br>';
} else {
    echo 'Não foi possivel criar a tabela contatos: ';
    echo mysqli_connect_error();
}

$contato = ['nome' => 'Kelvin', 'whatsapp' => '5546587931'];


if (mysqli_query(
    $db,
    "INSERT INTO contatos(nome, whatsapp)
VALUES('{$contato['nome']}','{$contato['whatsapp']}')"
)) {
    echo "Contatos inserido com sucesso!";
}


$query = mysqli_query($db, 'SELECT
                                id, nome, whatsapp
                            FROM
                                contatos');

echo '<table border="1">';
echo "<tr><td>ID</td><td>NOME</td><td>WHATSAPP</td></tr>";

while ($registro = $query->fetch_assoc()) {
    echo    "<tr>
                <td>{$registro['id']}</td>
                <td>{$registro['nome']}</td>
                <td>{$registro['whatsapp']}</td>
            </tr>";
}

echo '</table>';

if (mysqli_query($db, 'DELETE FROM contatos WHERE id = 10')) {
    echo "Registro apagado com sucesso!";
} else {
    echo "Não foi possivel apagar o registro";
}

echo "<br><br>Nome enviado: {$_POST['nm']}, whatsapp: {$_POST['whats']}";
