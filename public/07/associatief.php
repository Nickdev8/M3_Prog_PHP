<?php
$verbruik = [
    'Koelkast' => 150,
    'Wasmachine' => 250,
    'Afwasmachine' => 180,
    'Stofzuiger' => 100,
    'Verwarming' => 1200
];

$totaal = 0;

foreach ($verbruik as $apparaat => $kwH) {
    $totaal += $kwH;
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Verbruik van Huishoudelijke Apparaten</h1>
    <?php
    foreach ($verbruik as $apparaat => $kwH) {
        echo "<p><strong>$apparaat:</strong> $kwH kWh</p>";
    }
    ?>

    <h2>Totaal Verbruik</h2>
    <p><strong>Totaal verbruik:</strong> <?php echo $totaal; ?> kWh</p>
</body>
</html>