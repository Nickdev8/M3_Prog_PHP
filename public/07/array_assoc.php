<?php
$weersvoorspelling = [
    'Maandag' => 12,
    'Dinsdag' => 15,
    'Woensdag' => 18,
    'Donderdag' => 20,
    'Vrijdag' => 22,
    'Zaterdag' => 19,
    'Zondag' => 17
];

$vandaag = 'Maandag'; 
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="array_assoc.css">
</head>
<body>
<pre><?php print_r($weersvoorspelling); ?></pre>

    <h2>Weersvoorspelling per dag</h2>
    <table>
        <thead>
            <tr>
                <th>Dag</th>
                <th>Temperatuur (°C)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($weersvoorspelling as $dag => $temp) : ?>
                <tr>
                    <td><?= $dag ?></td>
                    <td><?= $temp ?>°C</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <strong><p>De temperatuur op <?= $vandaag; ?> is <?= $weersvoorspelling[$vandaag]; ?>°C.</p></strong>

    <p>Op dinsdag is het <?= $weersvoorspelling['Dinsdag']; ?>°C.</p>
    <p>Op woensdag is het <?= $weersvoorspelling['Woensdag']; ?>°C.</p>
    <p>Op donderdag is het <?= $weersvoorspelling['Donderdag']; ?>°C.</p>
    <p>Op vrijdag is het <?= $weersvoorspelling['Vrijdag']; ?>°C.</p>


</body>
</html>
