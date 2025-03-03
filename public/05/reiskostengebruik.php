<?php
include 'reiskosten.php';

// Autorit naar Berlijn (663 km), auto verbruikt 1 liter elke 15 km, literprijs benzine is € 1.90
$kostenBerlijn = berekenRitKosten(663, 15, 1.90);
echo "Berlijn: €" . number_format($kostenBerlijn, 2) . "<br>";

// Autorit naar Stockholm (1438 km), auto verbruikt 1 liter elke 20 km, literprijs benzine is € 1.46
$kostenStockholm = berekenRitKosten(1438, 20, 1.46);
echo "Stockholm: €" . number_format($kostenStockholm, 2) . "<br>";

// Autorit naar Kiev (1991 km), auto verbruikt 1 liter elke 18.47 km, literprijs benzine is € 2.23
$kostenKiev = berekenRitKosten(1991, 18.47, 2.23);
echo "Kiev: €" . number_format($kostenKiev, 2) . "<br>";
?>