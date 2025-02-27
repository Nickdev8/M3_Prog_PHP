<?php
$games = ["The Legend of Zelda", "Super Mario", "Metroid", "Donkey Kong", "Kirby", "Star Fox", "F-Zero", "Pikmin", "Animal Crossing", "Splatoon"];

$games[] = "Never gonna give you up";

//echo $games;
echo "<br>";
print_r($games);
echo "<br>";
var_dump($games);


echo "<br>";

echo count($games). "<br>";

echo "<br>";

echo implode(' >> ', $games);
echo "<br>";
sort($games);
echo implode(' >> ', $games);
echo "<br>";