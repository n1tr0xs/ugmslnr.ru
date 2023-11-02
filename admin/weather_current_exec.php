<?
require $_SERVER['DOCUMENT_ROOT'] . '/requires/funcs.php';
$password = $_POST['password'];
$conn = connect("editor", $password);

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
$ch = curl_init(($_SERVER['HTTPS'] ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . '/admin/result.php');
$ch_opts = [];
$ch_opts[CURLOPT_RETURNTRANSFER] = true;
$ch_opts[CURLOPT_POSTFIELDS] = [];
$ch_opts[CURLOPT_POSTFIELDS]['file'] = basename(__FILE__, '_exec.php');
$ch_opts[CURLOPT_POSTFIELDS]['resp'] = ($conn->query($sql) === TRUE);
curl_setopt_array($ch, $ch_opts);
echo curl_exec($ch);
?>