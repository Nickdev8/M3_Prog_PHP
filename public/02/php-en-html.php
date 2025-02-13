<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP en HTML combineren</title>
</head>
<body>
    <?php
    $titel = "Een php html voorbeeld pagina";
    $image = "https://www.amsterdamsdagblad.nl/image/1659_1747_1200_1200.jpg";
    $altText = "Mediacollege Amsterdam";
    $auteur = "jouwGithubNaam";
    ?>

    <h1><?php echo $titel; ?></h1>
    <img src="<?php echo $image; ?>" alt="<?php echo $altText; ?>">

    <section>
        <h2>Auteur: <?= $auteur; ?></h2>
    </section>
</body>
</html>