<?php

$totaalBesteld = 100.0;
$verzendLosten = 3.50;
$korting = 0;
$cadeautje = true;
$cadeautjeWaarde = 10;

if ($totaalBesteld > 1000){
    $korting += 7.5;
    $cadeautjeWaarde += 30;
}
$totaal = $totaalBesteld - $korting*$totaalBesteld + $verzendLosten;

echo "Totaal Besteld: $totaalBesteld </br>";
echo "verzendLosten: $verzendLosten </br>";

if ($cadeautje)
    echo "U krijgt ook een cadeautje ter waarde ban $cadeautjeWaarde euro: $cadeautje </br>";
?>
