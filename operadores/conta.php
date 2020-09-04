<?php

//comentario de linha 

/*
 * comentario de bloco
 *
 *
 *
 */

$saldo = 35.4;
//aspas duplas aceitam string especial;
echo "<br><br> Seu saldo é $saldo";

//aspas simples apenas string pura
echo '<br><br> seu saldo é $saldo';

$saldo = $saldo - 10; //operador de subtracao

echo "<br><br><br> agora seu saldo é $saldo";

//operador de adição 

$saldo += 1000;

echo "<br><br><br> seu novo saldo é $saldo";
