<?
require $_SERVER['DOCUMENT_ROOT'] . '/requires/funcs.php';
$conn = connect("visiter", "visiter_ugms");

$high_water_post = $conn->real_escape_string($_POST['high_water_post']);
$status = $conn->real_escape_string($_POST['status']);
$date = $conn->real_escape_string($_POST['date']);
$forecast_description = $conn->real_escape_string($_POST['forecast_description']);

$sql = "
UPDATE `ugmslnr`.`high_water_posts`
SET `status`='{$status}', `last_update`='{$date}', `forecast_description`='{$forecast_description}'
WHERE `id`='{$high_water_post}'
";

exec_result($sql);