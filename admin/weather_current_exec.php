<?
require $_SERVER['DOCUMENT_ROOT'] . '/requires/funcs.php';
$conn = connect("visiter", "visiter_ugms");

$date = $conn->real_escape_string($_POST['date']);
$icon = $conn->real_escape_string($_POST['icon']);
$temperature = $conn->real_escape_string($_POST['temperature']);
$wind_speed = $conn->real_escape_string($_POST['wind_speed']);
$humidity = $conn->real_escape_string($_POST['humidity']);
$pressure = $conn->real_escape_string($_POST['pressure']);

$sql = "
insert into `weather_current` values 
(NULL, '{$date}', {$icon}, {$temperature}, {$wind_speed}, {$humidity}, {$pressure})
";

exec_result($sql, __FILE__);
?>