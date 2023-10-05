<?
include $_SERVER['DOCUMENT_ROOT'] . '/includes/funcs.php';
$password = $_POST['password'];
$conn = connect("editor", $password);

$_file = basename(__FILE__, '_exec.php');

$date = $conn->real_escape_string($_POST['date']);
$icon = $conn->real_escape_string($_POST['icon']);
$temperature = $conn->real_escape_string($_POST['temperature']);
$wind_speed = $conn->real_escape_string($_POST['wind_speed']);
$humidity = $conn->real_escape_string($_POST['humidity']);
$pressure = $conn->real_escape_string($_POST['pressure']);

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