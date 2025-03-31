
<form method="POST">
    <label>Voer een Pokémon-naam in:</label>
    <input type="text" name="pokemon">
    <button type="submit">Zoek</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pokemon = strtolower(trim($_POST['pokemon']));
    $apiUrl = "https://pokeapi.co/api/v2/pokemon/" . urlencode($pokemon);
    $response = file_get_contents($apiUrl);

    if ($response) {
        $data = json_decode($response, true);
        echo "<h2>" . ucfirst($data['name']) . "</h2>";
        echo "<img src='" . $data['sprites']['front_default'] . "' />";
    } else {
        echo "Pokémon niet gevonden.";
    }
}
?>
