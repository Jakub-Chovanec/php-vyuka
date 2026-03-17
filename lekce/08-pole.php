<?php

declare(strict_types=1);

/**
 * Nadefinujte si pole deseti celých čísel.
 *
 * 2. Doplňte nakonec tohoto pole další číslo, které se zadá z klávesnice.
 *
 * 3. Vypište údaj o počtu prvků v tomto poli.
 *
 * 4. Pomocí cyklu vypište všechny prvky tohoto pole od posledního k prvnímu.
 *
 * 5. Zjistěte, zda v tomto poli se vyskytuje hodnota 1, v případě, že ano, zjistěte, kolikrát se vyskytuje.
 *
 * 6. Určete maximum a vypište ho.
 *
 * 7. Každý sudý prvek tohoto pole zvětšete o 10.
 *
 * 8. Vypište toto pole pomocí cyklu foreach.
 *
 * 9. Vynechejte 2 řádky.
 *
 * 10. Vytvořte další pole, do kterého budete z klávesnice zadávat celá čísla, zadávání se ukončí v případě, že se zadá -1, tento prvek už nebude součástí pole.
 *
 * 11. Vypište, o kolik prvků má více, méně, nebo zda má stejný počet prvků toto pole oproti prvnímu poli.
 *
 * 12. Vypište střídavě prvky těchto polí: prvek_z_prvního prvek_z_druhého prvek_z_prvního prvek_z_druhého atd.
 *
 * 13. Vypište z prvního pole všechna sudá a z druhého pole všechna lichá čísla.
 */


$pole = [3, 5, 6, 7, 8, 9, 11, 22, 4,];
$pocet = 0;

$cislo = (int) readline("Zadej poslední cislo pole: ");
$pole [] = $cislo;

echo "Počet prvku v poli je: ". count($pole);

for (count($pole) - 1; $i >= 0; $i--) {
    echo "$pole [$i] ." ;
}

if ($pole[i] == 1){
    $pocet++;
}
echo "pocet 1 v poli je: $pocet\n";

echo "Maximum v poli je: " . max($pole) . "\n";

for ($i = 0; $i < count($pole); $i++) {
    if ($pole[$i] % 2 == 0) {
        $pole[$i]= $pole[i] + 10;
    }
}

foreach ($pole as $prvek) {
    echo $prvek . " ";
}
echo "\n";