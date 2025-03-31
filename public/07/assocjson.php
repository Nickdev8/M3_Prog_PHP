<?php
$verbruik = [
    'Koelkast' => 150,
    'Wasmachine' => 250,
    'Afwasmachine' => 180,
    'Stofzuiger' => 100,
    'Verwarming' => 1200
];

$weer = [
    'stad' => 'Amsterdam',
    'temperatuur' => 15,
    'neerslag' => 'licht',
    'wind' => 'kracht 3'
];

$persoon = [
    'naam' => 'Jan',
    'leeftijd' => 30,
    'geslacht' => 'Man',
    'woonplaats' => 'Utrecht'
];

$trophiesPerGame = [
    'FIFA' => 10,
    'Call of Duty' => 15,
    'Minecraft' => 25
];

echo "<h2>Verbruik JSON:</h2>";
echo "<pre>" . json_encode($verbruik, JSON_PRETTY_PRINT) . "</pre>";

echo "<h2>Weer JSON:</h2>";
echo "<pre>" . json_encode($weer, JSON_PRETTY_PRINT) . "</pre>";

echo "<h2>Persoon JSON:</h2>";
echo "<pre>" . json_encode($persoon, JSON_PRETTY_PRINT) . "</pre>";

echo "<h2>Trophies per Game JSON:</h2>";
echo "<pre>" . json_encode($trophiesPerGame, JSON_PRETTY_PRINT) . "</pre>";

echo "<br>";
$combinedArray = [$verbruik,$weer, $persoon, $trophiesPerGame];
echo "<h2>Combined Json:</h2>";
echo "<pre>" . json_encode($combinedArray, JSON_PRETTY_PRINT) . "</pre>";
?>
