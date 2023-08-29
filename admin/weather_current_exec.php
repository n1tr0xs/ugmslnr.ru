<?
include $_SERVER['DOCUMENT_ROOT'] . '/includes/funcs.php';
$conn = connect("editor", $password);

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
	echo "<span style='color: green'>Данные отправлены.</span>";
} else {
	echo "<span style='color: red'>Ошибка</span>";
}

echo "<br>";
echo "<a href='/admin/{$_file}.php'>Страница администрирования</a><br>";
echo "<a href='/index.php'>Главная страница сайта</a><br>";
?>