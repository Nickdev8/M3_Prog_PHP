<?php
$afstand = 1081.6; // km
$verbruikPerKm = 1/15.0; // liter per km
$prijsPerLiter = 1.89; // euro
$prijsTreinreis = 350; // euro
$tankinhoud = 60; // Liter

$verbruik = $afstand * $verbruikPerKm;
$aantalKerenTanken = $verbruik / $tankinhoud;
$kosten = $aantalKerenTanken * $tankinhoud * $prijsPerLiter;

if ($kosten > $prijsTreinreis) {
    echo "Ik ga met de trein.<br>";
} else {
    echo "Ik ga met de auto.<br>";
}

echo "De totale afstand: " . $afstand . " km<br>";
echo "Totale prijs: €" . number_format($kosten, 2) . "<br>";
echo "Het aantal liter benzine dat je verbruikt: " . number_format($verbruik, 2) . " liter<br>";
echo "Het aantal keren dat je moet tanken: " . ceil($aantalKerenTanken) . "<br>";
?>