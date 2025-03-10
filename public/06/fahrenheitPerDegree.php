<?php
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Omrekenen per Graad</title>
</head>

<body>
    <h1>Links voor Omrekening van Celsius naar Fahrenheit</h1>
    <ul>
        <?php
        for ($celsius = 0; $celsius <= 45; $celsius++) {
            echo '<li><a href="fahrenheit.php?celsius=' . $celsius . '">' . $celsius . ' graden Celsius omrekenen naar Fahrenheit</a></li>';
        }
        ?>
    </ul>
    <p><a href="fahrenheit.html">Terug naar Celsius-links</a></p>
</body>

</html>