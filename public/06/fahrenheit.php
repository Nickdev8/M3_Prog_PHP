<?php
    if (isset($_GET['celsius'])) {
        $input = $_GET['celsius'];
        $celsius = floatval($input);

        $fahrenheit = ($celsius * 9 / 5) + 32;
    } else {
        $celsius = null;
        $fahrenheit = null;
    }
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Temperatuur Omrekening</title>
</head>

<body>
    <h1>Temperatuur Omrekening</h1>
    <?php if ($celsius !== null): ?>
        <p><?php echo htmlspecialchars($celsius); ?> graden Celsius is gelijk aan
            <?php echo htmlspecialchars($fahrenheit); ?> graden Fahrenheit.</p>
    <?php else: ?>
        <p>Geen celsius waarde opgegeven.</p>
    <?php endif; ?>
    <p><a href="fahrenheit.html">Terug naar Celsius-links</a></p>
</body>

</html>