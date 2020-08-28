<?php


$clima = 'gelado';

if ($clima == 'gelado'){
    echo "Meu pé congela";
}

// ternario

$bool = '1';

$var = $bool === true ? '$bool é igual a true' : '$bool é diferente';
echo $var;

//if com comparador 
$frase = 'Meu pai tinha um cachorro amarelo e rosa'
if(strpos($frase, 'Meu') !== false){
    echo "Encontrei o Meu";
}else{
    echo "Não há Meu algum!";
}


// switch

switch ($clima){

    case 'quente':
    case 'tropical':    
    
        echo 'Adoro clima quente!';
        if (true){
            echo 'if dentro do switch';
            if (true) {
                echo ' if aninhado dentro de um switch';
            }
        }
        break;
    
    case 'morno':
        echo 'Morno é melhor que frio!';
        break;

    case 'frio':
        echo ' Frio';
        break;
    case 'gelado':
        echo 'gelado';
    break;

    default;  
        echo 'Nenhum clima selecionado';
        break;  
}

//

$isso = 'vei';

$isso = $isso ?? 'coisa';

echo "Olha só $isso";

