<?php
$stad = "Amsterdam";
$weer = "zonnig";	
$aantalMensen = 1000000;
$huidigeTemperatuur = 25;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Er zijn <? echo $aantalMensen ?> in de stad <? echo $stad ?> met de temperatuur van <? echo $huidigeTemperatuur ?> graden en het is <? echo $weer ?></p>
</body>
</html>