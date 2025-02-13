<?php
$titel = "Een php html voorbeeld pagina";
$image = "../images/afbeelding.jpg";
$altText = "Foto van bram";
$auteur = "NickDev8";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP en HTML combineren</title>
</head>

<body>
    <h1><?php echo $titel; ?></h1>
    <img src="<?php echo $image; ?>" alt="<?php echo $altText; ?>" style='width: 400px; height: 200px;'>

    <section>
        <h2>Auteur: <?= $auteur; ?></h2>
    </section>
</body>

</html>