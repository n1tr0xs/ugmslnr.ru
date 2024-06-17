<?
require $_SERVER['DOCUMENT_ROOT'] . '/requires/funcs.php';
$conn = connect("visiter", "visiter_ugms");

$date = $conn->real_escape_string($_POST['date']);
$day_part = $conn->real_escape_string($_POST['day_part']);
$icon = $conn->real_escape_string($_POST['icon']);
$wind_direction = $conn->real_escape_string($_POST['wind_direction']);
$wind_speed = $conn->real_escape_string($_POST['wind_speed']);
$temperature = $conn->real_escape_string($_POST['temperature']);

$sql = "
replace into `ugmslnr`.`weather_forecast_table` values 
('{$date}', {$day_part}, '{$icon}', {$wind_direction}, '{$temperature}', '{$wind_speed}')
";

exec_result($sql);