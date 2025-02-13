<?php
$typeGerecht = "Hoofdgerecht";
$naamGerecht = "Spaghetti Carbonara";
$prijs = 12.50;
$beschrijving = "Een klassieke Italiaanse pasta met romige saus, spekjes en Parmezaanse kaas.";
$ingredientenLijst = "Pasta, spekjes, eieren, Parmezaanse kaas, room, peper, zout";
$allergenenLijst = "Gluten, lactose, eieren";

$menu = "
Gerecht type: $typeGerecht<br>
<br>
$naamGerecht €$prijs<br>
<br>
$beschrijving<br>
Ingegredientenlijst:<br>
$ingredientenLijst<br>
<br>
Bent u allergisch? bekijk dan hieronder de allergenen:<br>
$allergenenLijst<br>
";

echo $menu;
?>