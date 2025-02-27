<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $pokemons = ["Bulbasaur ", "Butterfree", "Jynx", "Mewtwo"];
        $images = [
            "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/001.png",   //Bulbasaur
            "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/012.png",    //Butterfree 
            "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/124.png",    //Jynx
            "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/150.png",    //Mewtwo
            ];

        for ($i = 0; $i < count($pokemons); $i++) {
            echo " <h2>$pokemons[$i]</h2> <br> <img src='$images[$i]' alt='pokemon'> <br>";
        }
    ?>
</body>
</html>