<?php

declare(strict_types=1);

// vytvoření mého hrdiny

$jmeno = 'Superman';
$sila = '1300 power';
$zdravi ='600 hp';

echo "Jméno: {$jmeno}\n";
echo "Síla: {$sila}\n";
echo "Zdraví: {$zdravi}\n\n";



// TODO: Napiš podmínku (použij match), která podle skóre (0-100) vypíše známku
//       90-100 = 1, 75-89 = 2, 50-74 = 3, 25-49 = 4, 0-24 = 5

$body = 33;

if ($body >=90 && $body<=100) {
    echo "Vase známka je: 1\n";
} else if ($body >=75) {
    echo "Vase znamka je: 2\n";
} else if ($body >=50){
    echo "Vase znamka je: 3\n";
}else if ($body >=25){
    echo "Vase znamka je: 4\n";
}else if ($body <=24){
    echo "Vase znamka je: 5\n";
}