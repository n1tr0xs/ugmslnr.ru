<?
require $_SERVER['DOCUMENT_ROOT'] . '/requires/funcs.php';
$conn = connect("visiter", "visiter_ugms");

$date = $conn->real_escape_string($_POST['date']);
$day_part = $conn->real_escape_string($_POST['day_part']);
$icon = $conn->real_escape_string($_POST['icon']);
$wind_direction = $conn->real_escape_string($_POST['wind_direction']);
$wind_speed = $conn->real_escape_string($_POST['wind_speed']);
$temperature = $conn->real_escape_string($_POST['temperature']);

// echo "<p>DUMP: ";
// var_dump($_POST);
// echo "</p>";

// echo "<p>Вы ввели: </p>";
// echo "<p>Дата: {$date}</p>";
// echo "<p>Часть дня: {$day_part}</p>";
// echo "<p>Иконка: {$icon}</p>";
// echo "<p>Направление ветра: {$wind_direction}</p>";
// echo "<p>Скорость ветра: {$wind_speed}</p>";
// echo "<p>Температура: {$temperature}</p>";



$sql = "
replace into `ugmslnr`.`weather_forecast_table` values 
('{$date}', '{$day_part}', '{$icon}', {$wind_direction}, '{$wind_speed}', '{$temperature}')
";

exec_result($sql);