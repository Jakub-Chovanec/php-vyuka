<?php

declare(strict_types=1);

//zadej 2 strany obdelníku a spočítej jeho obvod a obsah

$a = 12;
$b = 6;
$obvod = 2 * ($a + $b);
$obsah = $a * $b;

echo "strana a je: $a cm\n";
echo "strana b je: $b cm\n";
echo "obvod obdelníku je: $obvod cm\n";
echo "obsah obdelníku je: $obsah cm2\n";

echo "\n\n\n\n";

/*
Instrukce:
· Nastavte si 3 strany do proměnných $a, $b, $c
· Zobrazte nastavené hodnoty na stránce (a = 10 cm, …)
· Určete, zda tento trojúhelník lze sestrojit, v případě, že nelze, vypíše se: trojúhelník nelze sestrojit a ukončí se vše
· Určete, zda tento trojúhelník je rovnostranný, rovnoramenný, nebo obecný a vypište.
· Vynechte dva řádky, provede se výpočet obvodu a obsahu (použijte Heronův vzorec 𝑆=√𝑠(𝑠−𝑎)(𝑠−𝑏)(𝑠−𝑐), kde 𝑠=𝑎+𝑏+𝑐2) podle zadání (odmocnina je sqrt($cislo)) a vypíše se: obvod (obsah) je hodnota
*/

$a= 5;
$b= 4;
$c= 3;

echo "a = $a cm, b = $b cm, c = $c cm\n";

if ($a + $b < $c || $a + $c < $b || $b + $c < $a){
    echo "trojúhelník nelze sestrojit!\n";
    exit ();
} else {
    echo "trojúhelnik lze vytvorit!\n";
}

echo "\n\n";
if ($a == $b && $b == $c) {
    echo "trojúhelník je rovnostranný\n";
} elseif ($a == $b || $a == $c || $b == $c) {
    echo "trojúhleník je rovnoramenný!\n";
} else {
    echo "trojúhleník je obecný!\n";
}