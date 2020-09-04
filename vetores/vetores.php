<?php
//exemplo de for
for ($i = o; $j = 5; $i < 5; $i++; $j--)[
    echo "linha: $i $j";
]   

//exemplo de while 
$j = 4;
$i = 0;
while($i < 5){
    echo "Linha: $i<br>";
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

echo "\nHoje é" . $semana[$hoje] . "\n";

echo "\n\n";
unset($semana);

//solucao com poucas linhas (vetor com indice alfa numero) 
$semana['domingo'] = 0;
$semana['segunda']= 1;
$semana['terça']= 2;

$hoje = date('L');
var_dump($hoje);

echo "\nHoje é " . $semana[$hoje] . " Com indice alfanumerico\n";

echo "\n\n";


//Exercicio
$usuario = [	'nome' 	=> 	'Luiz Bono',
				'idade'	=>	25,
				'peso'	=>	67.8,
				'signo'	=>	'aquariano'];

echo " O professor " .$usuario['nome'] . " tem " . $usuario['idade'] . " anos, " . " pesa " . $usuario['peso'] . "kg e é " . $usuario['signo'];
//Constantes no PHP
define('MUNDO', 'Raimundo Nonato');

define('RES_P_PAG', 10);

for($i = 0; $i < RES_P_PAG; $I++){
    echo "Resultado $i\n";
}

echo'Ola' .MUNDO. "\n\n";
//vetor simples
$usuario = [	'nome' 	=> 	'Luiz Bono',
				'idade'	=>	25,
				'peso'	=>	67.8,
                'signo'	=>	'aquariano'];

//Como mostrar vetor dentro de string especial (entre aspas duplas)
echo    "O professor {$usuario['nome']} tem {$usuario['idade']} anos, pesa {$usuario['peso']} kg e é {$usuario['signo']}";




$professores = array(	0 => array(	'nome' 	=> 	'Luiz Bono',
                            'idade'	=>	25,
                            'peso'	=>	67808.44,
                            'signo'	=>	'aquariano'),
                        1 => array(	'nome' 	=> 	'Thiago Claro',
                            'idade'	=>	35,
                            'peso'	=>	54808.44,
                            'signo'	=>	'sagitário'),
                        2 => array(	'nome' 	=> 	'Thyago Quintas',
                            'idade'	=>	21,
                            'peso'	=>	7808.44,
                            'signo'	=>	'leonino'));


?>
<table border ="1">
<tr> <td>ID</td> <td>Nome</td> <td>Idade</td> <td>Peso</td> <td>Signo</td> </tr>
<?php
foreach($professores as $linha => $professor){
    echo "<tr> 
        <td>$linha</td> 
        <td>{$professor['nome']}</td> 
        <td>{$professor['idade']}</td>
        <td>{$professor['peso']}</td> 
        <td>{$professor['signo']}</td> </tr>";
}


?>
</table>