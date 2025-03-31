<?php
class LunchItem{
    public $naam;
    public $prijs;
    public $beschijving;
}

$broodjebal = new LunchItem();
$broodjebal ->naam= "broodje bal";
$broodjebal ->prijs= 4.50;
$broodjebal ->beschijving= "lekker broodje met een gehakt bal";

$broodfrikandel = new LunchItem();
$broodfrikandel ->naam= "broodje frikandel";
$broodfrikandel ->prijs= 4429.54570;
$broodfrikandel ->beschijving= "lekker broodje met een frikandel";

$artiekelen = [$broodjebal, $broodfrikandel];

foreach($artiekelen as $item){
    echo $item->naam;
    echo '<br>';
    echo $item->prijs;
    echo '<br>';
    echo $item->beschijving;
    echo '<br>';
    echo '<br>';
}