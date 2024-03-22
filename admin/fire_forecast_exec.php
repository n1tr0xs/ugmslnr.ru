<?
require $_SERVER['DOCUMENT_ROOT'] . '/requires/funcs.php';
$conn = connect("visiter", "visiter_ugms");

$start = $conn->real_escape_string($_POST['start']);
$end = $conn->real_escape_string($_POST['end']);
$desc = $conn->real_escape_string($_POST['desc']);

$sql = "
replace into `ugmslnr`.`fire_forecast` values
('$start', '$end', '$desc')
";

exec_result($sql, __FILE__);
?>