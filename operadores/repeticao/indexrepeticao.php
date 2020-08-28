<?php
//exemplo de for
for ($i = o; $j = 5; $i < 5; $i++, $j--)[
    echo "linha: $i $j";
]

//exemplo de while 
$j = 4;
$i = 0;
while($i < 5){
    echo "Linha: $i<br>"
    $i++;
}

//exemplo de do while 
$i = 0;
$j = 4;

do {
    echo"Linha: $i $j<br>";
    $i++;
    $j++;


} while($i < 5 && $j >= 0);
//solucao com muitas linhas
$domingo = 0;
$segunda = 1;
$terca = 2;
$quarta = 3;
$quinta = 4;
$sexta = 5;
$sabado = 6;

var_dump(date('d/m/Y'));
    switch(date('w')){
        case $domingo:
            echo'Domingo';
            break;
        case $segunda:
            echo'segunda do switch';
            break;
    }
//solucao com poucas linhas (com vetor)
$semana[0] = 'domingo';
$semana[1]= 'segunda';
$semana[2]= 'terça';

$hoje = date('w');

echo "hoje é" . $semana[$hoje];
