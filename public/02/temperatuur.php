<?php
    // Fahrenheit to Celsius
    $fahrenheit = 98.6;
    $celsius = ($fahrenheit - 32) * 5 / 9;
    echo "$fahrenheit °F is gelijk aan $celsius °C<br>";

    // Celsius to Fahrenheit
    $celsius = 37;
    $fahrenheit = ($celsius * 9 / 5) + 32;
    echo "$celsius °C is gelijk aan $fahrenheit °F<br>";

    // Celsius to Kelvin
    $kelvin = $celsius + 273.15;
    echo "$celsius °C is gelijk aan $kelvin K<br>";

    // Kelvin to Celsius
    $kelvin = 310.15;
    $celsius = $kelvin - 273.15;
    echo "$kelvin K is gelijk aan $celsius °C<br>";
?>