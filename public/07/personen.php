<?php
$personen = ["voornaam" => "Luigi", "Achternaam" => "Mangione", "leeftijd" => 23, "woonplaats" => "jail", "fav eten" => "bullet", "minst fav eten" => "medication",];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        <?php
        foreach ($personen as $key => $value) {
            echo "<tr><td>" . $key . "  </td><td>" . $value . "</td></tr>";
        }
        ?>
    </table>
</body>

</html>