<? include $_SERVER['DOCUMENT_ROOT'] . '/includes/funcs.php'; ?>

<?
$_file = basename(__FILE__, '_exec.php');

$input_password = hash('sha256', $_POST['password']);
// $check_string = file_get_contents($_SERVER['DOCUMENT_ROOT']. "/pwd/{$_file}");
// if($input_password != $check_string){
// 	echo "Неверный пароль!";
// 	exit();
// }

$conn = connect("sinop", "sinop");

$date = $_POST['date'];
$desc_city = $_POST['desc_city'];
$desc_region = $_POST['desc_region'];


$sql = "select count(*) c from `ugmslnr`.`weather_forecast_text` where `date`='{$date}'";
$row = get_row($conn, $sql);
if($row['c']){
  $sql = "
  update `ugmslnr`.`weather_forecast_text` 
  set `desc_city`='{$desc_city}', `desc_region`='{$desc_region}'
  where `date`='{$date}'
  ";
} else {
  $sql = "
  insert into `ugmslnr`.`weather_forecast_text` 
  values (NULL, '{$date}', '{$desc_city}', '{$desc_region}');
  ";
}
if($conn->query($sql) === TRUE){
	echo "Данные отправлены.<br>";
} else {
  echo "Error: {$sql}<br>{$conn->error}";
}

echo "<br>";
echo "<a href='/admin/{$_file}.php'>Страница администрирования</a><br>";
echo "<a href='/index.html'>Главная страница сайта</a><br>";
?>