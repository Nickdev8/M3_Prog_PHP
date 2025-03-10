<?php
$stad = isset($_GET['stad']) ? $_GET['stad'] : 'Niet opgegeven';
$temperatuur = isset($_GET['temperatuur']) ? $_GET['temperatuur'] : 'Niet opgegeven';
$land = isset($_GET['land']) ? $_GET['land'] : 'Niet opgegeven';
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Querystrings uitlezen</title>
</head>

<body>
    <h1>GET Parameters</h1>
    <ul>
        <li><strong>Stad:</strong> <?php echo htmlspecialchars($stad); ?></li>
        <li><strong>Temperatuur:</strong> <?php echo htmlspecialchars($temperatuur); ?></li>
        <li><strong>Land:</strong> <?php echo htmlspecialchars($land); ?></li>
    </ul>
    <pre>
        <?php
        print_r($_GET);
        ?>
    </pre>
</body>

</html>