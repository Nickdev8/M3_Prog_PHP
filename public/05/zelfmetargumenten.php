<?php
function convertCurrency($amount, $fromCurrency, $toCurrency){
    print("Converting $amount $fromCurrency to $toCurrency");
    print("<br>");
}

function sendEmail($to, $from, $subject, $message){
    print("To $to, from $from, subject $subject, message $message");
    print("<br>");
}

function generateRandomString($length){
    print($length);
    print("<br>");
}

function calculateArea($length, $width){
    print("$length, $width");
    print("<br>");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?convertCurrency(100, "USD", "EUR")?>
    <?sendEmail("Bob.stupid@hotmail.ru", "Nick", "I'm sorry", "haha jkjk i hate you BOB. stupid");?>
    <?generateRandomString(10)?>
    <?calculateArea(10, 200)?>
</body>
</html>