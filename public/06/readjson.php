
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>JSON in PHP lezen en schrijven</title>
</head>

<body>
    <?php
    
    $steden = array("amsterdam", "rotterdam", "utrecht");

    $jsonSteden = json_encode($steden);

    $decodedSteden = json_decode($jsonSteden);

    echo "<h2>Decoded steden array:</h2>";
    echo "<pre>";
    print_r($decodedSteden);
    echo "</pre>";

    $json = 
    '{
        "studenten": [
            {
            "name": "mario",
            "gemiddeldCijfer": 7.5
            },
            {
            "name": "wario",
            "gemiddeldCijfer": 4.5
            }
        ]
    }';

    $dataObject = json_decode($json);

    echo "<h2>Deserialized dataObject:</h2>";
    echo "<pre>";
    print_r($dataObject);
    echo "</pre>";

    echo "<h2>Naam van de eerste student:</h2>";
    echo $dataObject->studenten[0]->name;

    echo "<h2>Gemiddeld cijfer van Wario:</h2>";
    echo $dataObject->studenten[1]->gemiddeldCijfer;
    ?>
</body>
</html>