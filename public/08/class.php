<?php
$artiekel = [
    'naam' => 'hello world badge',
    'prijs' => 5.99,
    'voorraad' => 200
];

$jsonString = json_encode($artiekel, JSON_PRETTY_PRINT);

$object = json_decode($jsonString);
echo "<h2>Object Output:</h2>";
echo "<pre>";
print_r($object);
echo "</pre>";

echo "<h3>Toegang tot een specifieke eigenschap:</h3>";
echo "Naam: " . $object->naam . "<br>";
echo "Leeftijd: " . $object->prijs . "<br>";
echo "Geslacht: " . $object->voorraad . "<br>";
?>
