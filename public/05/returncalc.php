<?php
function add($number1, $number2)
{
    return $number1 + $number2;
}

function subtract($number1, $number2)
{
    return $number1 - $number2;
}

function divide($number1, $number2)
{
    return $number1 / $number2;
}

function multiply($number1, $number2)
{
    return $number1 * $number2;
}



echo add(100,100);
echo "<br>";
echo add(4, 9);
echo "<br>";
echo add(33, 33);

echo "<br>";
echo "<br>";

echo subtract(100,100);
echo "<br>";
echo divide(4, 9);
echo "<br>";
echo multiply(33, 33);