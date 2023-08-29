<?
include $_SERVER['DOCUMENT_ROOT'] . '/includes/funcs.php';
$conn = connect("editor", $password);

$_file = basename(__FILE__, '_exec.php');

$date = $_POST['date'];
$desc_city = $_POST['desc_city'];
$desc_region = $_POST['desc_region']; 

$sql = "
replace into `ugmslnr`.`weather_forecast_text` values 
('{$date}', '{$desc_city}', '{$desc_region}')
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