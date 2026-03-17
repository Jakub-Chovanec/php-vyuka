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


// TODO: Vypiš čísla od 10 do 1 (odpočítávání)
// TODO: Vypiš malou násobilku čísla 7 (7x1=7, 7x2=14, ...)
echo "\n\n";
for ($i = 10; $i >= 1; $i--) {
    echo "{$i} ";
}

echo "\n";

$cislo='7';
$pocet='10';


for ($i=0; $i<=$pocet; $i++) {
    $soucin=$cislo*$i;
    echo "$cislo*$i=$soucin ";
}

echo "\n\n";
/*Instrukce:
· Nastavte si 3 strany do proměnných $a, $b, $c
· Zobrazte nastavené hodnoty na stránce (a = 10 cm, …)
· Určete, zda tento trojúhelník lze sestrojit, v případě, že nelze, vypíše se: trojúhelník nelze sestrojit a ukončí se vše
· Určete, zda tento trojúhelník je rovnostranný, rovnoramenný, nebo obecný a vypište.
· Vynechte dva řádky, provede se výpočet obvodu a obsahu (použijte Heronův vzorec 𝑆=√𝑠(𝑠−𝑎)(𝑠−𝑏)(𝑠−𝑐), kde 𝑠=𝑎+𝑏+𝑐2) podle zadání (odmocnina je sqrt($cislo)) a vypíše se: obvod (obsah) je hodnota
*/

$a='5';
$b='5';
$c='5';
$s = ($a + $b +$c)/2;
$S = sqrt($s * ($s - $a)*($s - $b)*($s - $c));
$o = $a + $b + $c; 

echo "a = {$a} cm, b = {$b} cm, c = {$c} cm\n";

if ($a + $b < $c || $a + $c < $b || $b + $c < $a){
    echo "Trojúhleník nelze sestrojit!!\n";
}

if ($a == $b && $b == $c){
    echo "Trojúhleník je rovnostranny!\n";
} elseif ($a == $b || $a == $c || $c == $b){
    echo "Trojúhelník je rovnoramenný!\n";
} else {
    echo "Trojúhleník je obecný!\n";
}
echo "\n\n";

echo "Obvod trojúhleníku je: $o cm\n";
echo "Obsah trojúhelníku je: $S cm2\n";

echo "\n\n\n";

// TODO: Vytvoř pole svých 5 oblíbených filmů a vypiš je s pořadím
// TODO: Použij array_filter k vyfiltrování filmů začínajících na určité písmeno

$filmy = ['Harry Potter', 'Red Notice', 'Formula 1', 'Uncharted', 'Money Heist'];
 
for ($i=0; $i<5; $i++){
    echo ($i + 1), ". {$filmy[$i]}\n";
}



