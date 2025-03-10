<?php
header('Content-Type: application/json');

$films = array(
    "films" => array(
        array(
            "title" => "The Matrix",
            "details" => array(
                "regisseur" => "Wachowski Brothers",
                "jaar"      => 1999,
                "genre"     => "Science Fiction"
            )
        ),
        array(
            "title" => "Inception",
            "details" => array(
                "regisseur" => "Christopher Nolan",
                "jaar"      => 2010,
                "genre"     => "Science Fiction/Thriller"
            )
        ),
        array(
            "title" => "The Godfather",
            "details" => array(
                "regisseur" => "Francis Ford Coppola",
                "jaar"      => 1972,
                "genre"     => "Crime/Drama"
            )
        )
    )
);

$jsonFilms = json_encode($films, JSON_PRETTY_PRINT);

echo $jsonFilms;
?>
