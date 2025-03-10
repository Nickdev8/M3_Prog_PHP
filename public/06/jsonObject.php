<?php
header('Content-Type: application/json');

$steden = array("amsterdam", "rotterdam", "utrecht");

$jsonString = json_encode($steden);

echo $jsonString;
?>
