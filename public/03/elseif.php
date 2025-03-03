<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $stoplichtKleur = "R";
    $hex;

    if ($stoplichtKleur == "G") {
        $hex = "#00FF00";
    } elseif ($stoplichtKleur == "O") {
        $hex = "#FFA500";
    } elseif ($stoplichtKleur == "R") {
        $hex = "#FF0000";
    } else {
        $hex = "#000000";
    }

    echo "<button style='background-color:$hex;height:25px;width:25px;'/>";
    ?>
</body>

</html>