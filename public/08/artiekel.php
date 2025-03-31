<?php
class Artikel {
    public $naam;
    public $prijs;
    public $voorraad;
}

$game = new Artikel();
$game -> naam="Mario Wonder";
$game -> prijs="59,99";
$game -> voorraad="50";

$jsongame = json_encode($game,JSON_PRETTY_PRINT);

print_r($jsongame);
?>