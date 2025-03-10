<?php
$leeftijd = isset($_GET['leeftijd']) ? $_GET['leeftijd'] : 'Niet opgegeven';
$opleiding = isset($_GET['opleiding']) ? $_GET['opleiding'] : 'Niet opgegeven';
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Ontvangen Gegevens</title>
</head>

<body>
    <h1>Ontvangen Gegevens</h1>
    <p><strong>Leeftijd:</strong> <?php echo htmlspecialchars($leeftijd); ?></p>
    <p><strong>Opleiding:</strong> <?php echo htmlspecialchars($opleiding); ?></p>
    <pre>
        <?php
        print_r($_GET);
        ?>
    </pre>
</body>

</html>