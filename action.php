<?php

$content = file_get_contents ('http://samples.openweathermap.org/data/2.5/weather?q=London,uk&appid=b1b15e88fa797225412429c1c50c122a1');
$json = json_decode($content, true);

echo '<pre>';
print_r($json);

foreach( $json['weather'] as $arr) {
    $weather = $arr['main'];
}
foreach ($json['main'] as $varray) {
    $temp = $varray['temp'];
}

echo "<h1>Город: $json[name]</br>Погода: $weather<br>Температура: $temp</h1>";

