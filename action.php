<?php

$content = file_get_contents ('http://samples.openweathermap.org/data/2.5/weather?q=London,uk&appid=b1b15e88fa797225412429c1c50c122a1');
$json = json_decode($content, true);

echo '<pre>';
print_r($json);

foreach( $json['weather'] as $arr) {
    $weather = $arr['main'];
}

$temp = $json['main']['temp']; 

echo "<h1>Город: $json[name]</br>Погода: $weather<br>Температура: $temp F</h1>";

if ($weather == 'Drizzle') {
	echo "<img src='http://www.taminfo.ru/uploads/posts/2014-08/thumbs/1408209521_oblachno.jpg'>";
}  
?>
