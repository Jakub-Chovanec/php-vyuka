<?php

declare(strict_types=1);


function getTriangleAngleType(float $a, float $b, float $c): string
{
    $sides = [$a, $b, $c];

    sort($sides);

    $a = $sides[0];
    $b = $sides[1];
    $c = $sides[2];

    $left = $c * $c;
    $right = $a * $a + $b * $b;

    if ($left == $right) {
        return "pravoúhlý";
    }

    if ($left < $right) {
        return "ostroúhlý";
    }

    return "tupoúhlý";
}


// nastavení stran
$a = 3;
$b = 4;
$c = 5;


// výpis stran
echo "Strana a: $a cm\n";
echo "Strana b: $b cm\n";
echo "Strana c: $c cm\n\n";


// zavolání funkce
$type = getTriangleAngleType($a, $b, $c);


// výpis typu
echo "Trojúhelník je: $type";
