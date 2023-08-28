<?
include $_SERVER['DOCUMENT_ROOT'] . '/includes/funcs.php';
$conn = connect("sinop", "sinop");

$_file = basename(__FILE__, '_exec.php');

$date = $_POST['date'];
$desc_city = $_POST['desc_city'];
$desc_region = $_POST['desc_region'];

// $sql = "select count(*) c from `ugmslnr`.`weather_forecast_text` where `date`='{$date}'";
// $row = get_row($conn, $sql);
// if($row['c']){
//   $sql = "
//   update `ugmslnr`.`weather_forecast_text` 
//   set `desc_city`='{$desc_city}', `desc_region`='{$desc_region}'
//   where `date`='{$date}'
//   ";
// } else {
//   $sql = "
//   insert into `ugmslnr`.`weather_forecast_text` 
//   values (NULL, '{$date}', '{$desc_city}', '{$desc_region}');
//   ";
// }

$sql = "
replace into `ugmslnr`.`weather_forecast_text` values 
('{$date}', '{$desc_city}', '{$desc_region}')
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