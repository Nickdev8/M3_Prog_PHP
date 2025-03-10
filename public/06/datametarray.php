<?php
header('Content-Type: application/json');

$student1 = array(
    "name" => "mario mangione",
    "klas" => "A1"
);
$student2 = array(
    "name" => "luigi mangione",
    "klas" => "A1"
);

$dataObject = array(
    "studenten" => array($student1, $student2)
);

$student3 = array(
    "name" => "bowser",
    "klas" => "B2"
);
$student4 = array(
    "name" => "toad",
    "klas" => "B2"
);

$dataObject["studenten"][] = $student3;
$dataObject["studenten"][] = $student4;

$jsonString = json_encode($dataObject);

echo $jsonString;
?>
