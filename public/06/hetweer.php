<?php
$dag = isset($_GET['dag']) ? $_GET['dag'] : 'ma';

$temperaturen = array(
    "ma" => 21,
    "di" => 23,
    "wo" => 20,
    "do" => 18,
    "vr" => 19,
    "za" => 22,
    "zo" => 20
);

$weerIconen = array(
    "ma" => "../assets/images/sun.png",
    "di" => "../assets/images/cloud.png",
    "wo" => "../assets/images/rain.png",
    "do" => "../assets/images/storm.png",
    "vr" => "../assets/images/snow.png",
    "za" => "../assets/images/fog.png",
    "zo" => "../assets/images/cloud.png"
);

if (isset($temperaturen[$dag]) && isset($weerIconen[$dag])) {
    $celsius = $temperaturen[$dag];
    $fahrenheit = ($celsius * 9/5) + 32;
    $icoon = $weerIconen[$dag];
} else {
    $celsius = null;
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Het Weer - Voorspelling</title>

</head>
<body>
    <h1>Weersvoorspelling</h1>
    <?php if ($celsius !== null): ?>
        <div>
            <h2>Voorspelling voor <?php echo htmlspecialchars(strtoupper($dag)); ?></h2>
            <p>Temperatuur: <?php echo htmlspecialchars($celsius); ?> &deg;C</p>
            <p>In Fahrenheit: <?php echo htmlspecialchars($fahrenheit); ?> &deg;F</p>
            <img src="<?php echo htmlspecialchars($icoon); ?>" alt="Weericoon voor <?php echo htmlspecialchars($dag); ?>">
        </div>
    <?php else: ?>
        <p>Geen gegevens beschikbaar voor de dag: <?php echo htmlspecialchars($dag); ?></p>
    <?php endif; ?>
</body>
</html>
