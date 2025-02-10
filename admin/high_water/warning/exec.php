<?
require $_SERVER['DOCUMENT_ROOT'] . '/requires/funcs.php';
$conn = connect("visiter", "visiter_ugms");

$description = $conn->real_escape_string($_POST['description']);
$start = $conn->real_escape_string($_POST['start']);
$end = $conn->real_escape_string($_POST['end']);

$sql = "
insert into `ugmslnr`.`high_water_warning` values 
(NULL, '{$start}', '{$end}', '{$description}')
";

exec_result($sql);