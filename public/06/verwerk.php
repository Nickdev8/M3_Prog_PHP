<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stad = isset($_POST['stad']) ? $_POST['stad'] : 'Niet opgegeven';
    $datum = isset($_POST['datum']) ? $_POST['datum'] : 'Niet opgegeven';
    $weer = isset($_POST['weer']) ? $_POST['weer'] : 'Niet opgegeven';
} else {
    $stad = $datum = $weer = null;
}
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Verwerkte Weergegevens</title>
</head>

<body>
    <div class="resultaat">
        <h1>Verwerkte Weergegevens</h1>
        <?php if ($stad !== null && $datum !== null && $weer !== null): ?>
            <p><strong>Stad:</strong> <?php echo htmlspecialchars($stad); ?></p>
            <p><strong>Datum:</strong> <?php echo htmlspecialchars($datum); ?></p>
            <p><strong>Weertype:</strong> <?php echo htmlspecialchars($weer); ?></p>
        <?php else: ?>
            <p>Geen gegevens ontvangen.</p>
        <?php endif; ?>

        <h2>Volledige POST array</h2>
        <pre><?php print_r($_POST); ?></pre>
    </div>
</body>

</html>