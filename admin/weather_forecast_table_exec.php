<?
include $_SERVER['DOCUMENT_ROOT'] . '/includes/funcs.php';
$conn = connect("editor", $password);

$_file = basename(__FILE__, '_exec.php');

$date = $_POST['date'];
$day_part = $_POST['day_part'];
$icon = $_POST['icon'];
$wind_direction = $_POST['wind_direction'];
$wind_speed = $_POST['wind_speed'];
$temperature = $_POST['temperature'];

$sql = "
replace into `ugmslnr`.`weather_forecast_table` values 
('{$date}', {$day_part}, '{$icon}', {$wind_direction}, '{$wind_speed}', '{$temperature}')
";

if($conn->query($sql) === TRUE){
	echo "<span style='color: green'>Данные отправлены.</span>";
} else {
	echo "<span style='color: red'>Ошибка</span>";
}

echo "<br>";
echo "<a href='/admin/{$_file}.php'>Страница администрирования</a><br>";
echo "<a href='/index.php'>Главная страница сайта</a><br>";
?>