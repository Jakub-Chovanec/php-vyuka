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

$pole = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
$pocet = 0;

//echo "Prvek pole:\n";
//$pole[] = readline();

echo "pocet prvku v poli je: " . count($pole);
echo "\n";

for ($i=9; $i>=0; $i--){
    echo $pole[$i]. " ";
}

for ($i=0; $i<=9; $i++){
    if ($pole[$i] == 1){
        $pocet++;
    }
}
echo "\n";
echo "pocet 1 v poli je: $pocet";
echo "\n";

echo "Maximum je: ". max($pole);
echo "\n";

for ($i=0; $i<=9; $i++){
    if ($pole[$i] % 2 === 0){
        $pole[$i]= $pole[$i] + 10;
    }
}
echo "Sudé císla zvětšené o 10: ";
foreach ($pole as $pole2){
    echo $pole2. " ";
}
echo"\n\n\n";

$cisla=[];
for ($i=0; $i<=4; $i++){
    $cisla[] = readline("Zadejte 5 prvků pole (-1 se zadávání ukončí): ");

    if ($cisla[$i] === -1){
        break;
    }

}
echo "\n";

$pocet = count($pole[$i]);
$pocet1 = count($cisla[$i]);
$kolik = $pocet - $pocet1;

echo "První pole je větší o ". $kolik. "poctu prvku";
