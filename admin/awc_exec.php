<?
require $_SERVER['DOCUMENT_ROOT'] . '/requires/funcs.php';
$conn = connect("visiter", "visiter_ugms");

$date = $conn->real_escape_string($_POST['date']);
$desc = $conn->real_escape_string($_POST['desc']);

$sql = "
replace into `ugmslnr`.`awc` values 
('{$date}', '{$desc}')
";

exec_result($sql, __FILE__);
?>