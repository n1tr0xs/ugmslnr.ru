<?
include $_SERVER['DOCUMENT_ROOT'] . '/includes/funcs.php';
$conn = connect("sinop", "sinop");

$_file = basename(__FILE__, '_exec.php');

$date = $_POST['date'];
$icon = $_POST['icon'];
$temperature = $_POST['temperature'];
$wind_speed = $_POST['wind_speed'];
$humidity = $_POST['humidity'];
$pressure = $_POST['pressure'];

$sql = "
replace into `ugmslnr`.`weather_current` values 
('{$date}', {$icon}, {$temperature}, {$wind_speed}, {$humidity}, {$pressure})
";
if($conn->query($sql) === TRUE){
	echo "Данные отправлены.<br>";
} else {
  echo "Error: {$sql}<br>{$conn->error}";
}

echo "<br>";
echo "<a href='/admin/{$_file}.php'>Страница администрирования</a><br>";
echo "<a href='/index.html'>Главная страница сайта</a><br>";
?>