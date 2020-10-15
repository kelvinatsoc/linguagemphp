<?php

session_start();

echo 'Mesmo em outro diretório, dá na mesma, veja: ' . $_SESSION['nome'];