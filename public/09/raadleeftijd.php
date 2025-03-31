<?php

$json_text = '{"name": "Hidde","age": 28,"count": 192}';
$data = json_decode($json_text, true);
echo $data['age'];