<?php

$winkel = 
    '{
        "winkel": {
            "producten": [
            {
                "productNaam": "Laptop",
                "details": {
                "prijs": 999.99,
                "voorraad": 50
                }
            },
            {
                "productNaam": "Smartphone",
                "details": {
                "prijs": 699.99,
                "voorraad": 100
                }
            }
            ]
        }
}';

$winkelObj = json_decode($winkel);

$laptopVoorraad = $winkelObj->winkel->producten[0]->details->voorraad;

$smartphonePrijs = $winkelObj->winkel->producten[1]->details->prijs;
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Winkel Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            color: #333;
        }

        p {
            font-size: 1.2em;
        }
    </style>
</head>

<body>
    <h1>Winkeldata</h1>
    <p>Prijs van de Smartphone: &euro;<?php echo $smartphonePrijs; ?></p>
    <p>Voorraad van de Laptop: <?php echo $laptopVoorraad; ?> stuks</p>
</body>

</html>