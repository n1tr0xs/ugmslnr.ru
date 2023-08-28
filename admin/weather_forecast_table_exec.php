<? include $_SERVER['DOCUMENT_ROOT'] . '/includes/funcs.php'; ?>

<?
$_file = basename(__FILE__, '_exec.php');

$conn = connect("sinop", "sinop");

$date = $_POST['date'];
$day_part = $_POST['day_part'];
$icon = $_POST['icon'];
$wind_direction = $_POST['wind_direction'];
$wind_speed = $_POST['wind_speed'];
$temperature = $_POST['temperature'];


$sql = "select count(*) c from `ugmslnr`.`weather_forecast_table` where `date`='{$date}' and `day_part`={$day_part}";
$row = get_row($conn, $sql);
if($row['c']){
  $sql = "
  update `ugmslnr`.`weather_forecast_table` 
  set `icon`={$icon}, `wind_direction`={$wind_direction}, `wind_speed`='{$wind_speed}', `temperature`='{$tempature}'
  where `date`='{$date}' and `day_part`={$day_part}
  ";
} else {
  $sql = "
  insert into `ugmslnr`.`weather_forecast_table` 
  values (NULL, '{$date}', {$day_part}, {$icon}, {$wind_direction}, {$wind_speed}, {$tempature});
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