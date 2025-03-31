<?php
$json = '{"naam":"God of war", "prijs":29.99, "jaar":20,"voorraad":150, "beschijfing":"Very poggers"}';

$data = json_decode($json);

echo $data->naam;
echo '<br>';
echo $data->prijs;
echo '<br>';
echo $data->jaar;
echo '<br>';
echo $data->voorraad;
echo '<br>';
echo $data->beschijfing;
echo '<br>';

echo '<br>';
print_r($json);