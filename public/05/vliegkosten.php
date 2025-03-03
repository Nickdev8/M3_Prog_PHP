<?php
include 'vliegkostenfunctions.php';

$flights = [
    ['distance' => 3722, 'fuelPrice' => 2.05, 'baggage' => 20, 'class' => 'economy'],
    ['distance' => 9276, 'fuelPrice' => 3.11, 'baggage' => 10, 'class' => 'economy'],
    ['distance' => 803, 'fuelPrice' => 2.83, 'baggage' => 0, 'class' => 'business'],
];

foreach ($flights as $flight) {
    $cost = calculateFlightCost($flight['distance'], $flight['fuelPrice'], $flight['baggage'], $flight['class']);
    echo "Flight cost for {$flight['distance']} km, fuel price €{$flight['fuelPrice']}, baggage {$flight['baggage']} kg, class {$flight['class']}: " . number_format($cost, 2, ',', '.') . " €\n";
}
?>