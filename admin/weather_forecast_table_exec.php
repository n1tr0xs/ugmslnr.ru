<?
require $_SERVER['DOCUMENT_ROOT'] . '/requires/funcs.php';
$password = $_POST['password'];
$conn = connect("editor", $password);

$date = $conn->real_escape_string($_POST['date']);
$day_part = $conn->real_escape_string($_POST['day_part']);
$icon = $conn->real_escape_string($_POST['icon']);
if($day_part == 1){
	if($icon == 1) $icon = 12;
	if($icon == 7) $icon = 13;
}
$wind_direction = $conn->real_escape_string($_POST['wind_direction']);
$wind_speed = $conn->real_escape_string($_POST['wind_speed']);
$temperature = $conn->real_escape_string($_POST['temperature']);

$sql = "
replace into `ugmslnr`.`weather_forecast_table` values 
('{$date}', {$day_part}, '{$icon}', {$wind_direction}, '{$temperature}', '{$wind_speed}')
";

$ch = curl_init(($_SERVER['HTTPS'] ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . '/admin/result.php');
$ch_opts = [];
$ch_opts[CURLOPT_RETURNTRANSFER] = true;
$ch_opts[CURLOPT_POSTFIELDS] = [];
$ch_opts[CURLOPT_POSTFIELDS]['file'] = basename(__FILE__, '_exec.php');
$ch_opts[CURLOPT_POSTFIELDS]['resp'] = ($conn->query($sql) === TRUE);
curl_setopt_array($ch, $ch_opts);
echo curl_exec($ch);
?>