<?
include $_SERVER['DOCUMENT_ROOT'] . '/includes/funcs.php';
$password = $_POST['password'];
$conn = connect("editor", $password);

$_file = basename(__FILE__, '_exec.php');

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

if($conn->query($sql) === TRUE){
	echo "<span style='color: green'>Данные отправлены.</span>";
} else {
	echo "<span style='color: red'>Ошибка</span>";
}

echo "<br>";
echo "<a href='/admin/{$_file}.php'>Страница администрирования</a><br>";
echo "<a href='/index.php'>Главная страница сайта</a><br>";
?>