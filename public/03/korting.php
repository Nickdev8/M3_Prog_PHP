<?php

$totaalBesteld = 100.0;
$verzendLosten = 3.50;
$korting = 0;
$cadeautje = true;

$totaal = $totaalBesteld - $korting*$totaalBesteld + $verzendLosten;

echo "Totaal Besteld: $totaalBesteld </br>";
echo "verzendLosten: $verzendLosten </br>";

if ($cadeautje)
    echo "U krijgt ook een cadeautje ter waarde ban 10 euro: $cadeautje </br>";
?>
