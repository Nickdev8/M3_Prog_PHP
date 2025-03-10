<?php
header('Content-Type: application/json');

class Student {
    public $name;
    public $klas;
    
    public function __construct($name, $klas) {
        $this->name = $name;
        $this->klas = $klas;
    }
}

// Maak de student-objecten aan
$mario  = new Student("mario mangione", "A1");
$wario  = new Student("wario mangione", "A1");
$bowser = new Student("bowser", "B2");
$peach  = new Student("peach", "B2");

$dataObject = array(
    "studenten" => array($mario, $wario, $bowser, $peach)
);

echo json_encode($dataObject);
?>
