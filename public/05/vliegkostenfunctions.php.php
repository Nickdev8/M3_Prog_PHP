<?php
function calculateFlightCost($distance, $fuelPrice, $baggageWeight, $travelClass) {
    // Calculate the travel cost
    $travelCost = ($fuelPrice * $distance) / 30;

    // Add baggage cost
    $baggageCost = $baggageWeight * 5;
    $totalCost = $travelCost + $baggageCost;

    // If traveling business class, increase the total cost by 50%
    if ($travelClass === 'business') {
        $totalCost *= 1.5;
    }

    return $totalCost;
}