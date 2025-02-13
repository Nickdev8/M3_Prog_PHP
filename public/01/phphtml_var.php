<?php
    $titel = "Titel van de pagina";
    $datum = date('d-m-Y');
    $tijd = date("H:i");
    $game = "Super metroid";
    $moostegetal = 69;

    echo $titel;
    echo $datum;
    echo $tijd;
    echo $game;
?>

<!doctype html>
<html lang="en">
    <head>
        <title><?php echo $titel ?></title>
    </head>
    <body>
        <h2>De datum vandaag is: <? echo $datum?>, en de tijd is <? echo $tijd?> uur.
        
        <p><h2>Mijn favoriete game</h2><? echo $game;?></p>
        <p><h2>Mooste getal:</h2><?= $moostegetal ?></p>
    </body>
</html>