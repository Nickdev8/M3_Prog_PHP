<?php
$itemName = "The Oculus";
$itemType = "Swirling Crystal";
$requiredLevel = 42;
$statBonus1 = "+3 to Sorceress Skill Levels";
$statBonus2 = "+5 to Mana after each Kill";
$statBonus3 = "+20 to All Resistances";
$statBonus4 = "+20% Faster Cast Rate";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diablo Item</title>
</head>
<body>
    <h1><?php echo $itemName; ?></h1>
    <p>Type: <?php echo $itemType; ?></p>
    <p>Required Level: <?php echo $requiredLevel; ?></p>
    <ul>
        <li><?php echo $statBonus1; ?></li>
        <li><?php echo $statBonus2; ?></li>
        <li><?php echo $statBonus3; ?></li>
        <li><?php echo $statBonus4; ?></li>
    </ul>
</body>
</html>