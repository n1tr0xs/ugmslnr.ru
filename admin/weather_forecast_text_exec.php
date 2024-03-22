<?
require $_SERVER['DOCUMENT_ROOT'] . '/requires/funcs.php';
$conn = connect("visiter", "visiter_ugms");

$date = $conn->real_escape_string($_POST['date']);
$desc_city = $conn->real_escape_string($_POST['desc_city']);
$desc_region = $conn->real_escape_string($_POST['desc_region']);

$sql = "
replace into `ugmslnr`.`weather_forecast_text` values 
('{$date}', '{$desc_city}', '{$desc_region}')
";

exec_result($sql, __FILE__);
?>