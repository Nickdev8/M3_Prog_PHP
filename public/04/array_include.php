<?php
    $annoucement = [
        "a.html",
        "b.html",
        "c.html",
        "d.html",
        "e.html"
    ];

    $reviews = [
        ["demon's souls",10, "nice game"],
        ["mario wonder",9.5, "short but good"],
        ["GTA 6",0.1, "its never going to come out"],
        ["Zelda",8.5, "good game"],
        ["Pokemon",7.5, "good game"]
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        for ($i = 0; $i < count($annoucement); $i++) {
            include "announcement/" .$annoucement[$i];
        }

        for ($i = 0; $i < count($reviews); $i++) {
            $review = $reviews[$i];
            $title = $review[0];
            $cijfer = $review[1];
            $conclusia = $review[2];

            echo "<h2>$title</h2>";
            echo "<p>$cijfer</p>";
            echo "<p>$conclusia</p>";
        }
    ?>
</body>
</html>