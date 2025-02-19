<?
require $_SERVER['DOCUMENT_ROOT'] . '/requires/funcs.php';
$conn = connect("visiter", "visiter_ugms");

$high_water_post = $conn->real_escape_string($_POST['high_water_post']);
$current_status = $conn->real_escape_string($_POST['current_status']);
$forecast_status = $conn->real_escape_string($_POST['forecast_status']);
$date = $conn->real_escape_string($_POST['date']);
$forecast_description = $conn->real_escape_string($_POST['forecast_description']);

$sql = "
UPDATE `ugmslnr`.`high_water_posts`
SET `current_status`='{$current_status}', `last_update`='{$date}', `forecast_description`='{$forecast_description}', `forecast_status`='{$forecast_status}'
WHERE `id`='{$high_water_post}'
";

exec_result($sql);