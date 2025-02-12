<?
require $_SERVER['DOCUMENT_ROOT'] . '/requires/funcs.php';
$conn = connect("visiter", "visiter_ugms");

$start = $conn->real_escape_string($_POST['start']);
$description = $conn->real_escape_string($_POST['description']);
$description = str_replace('ГП-I ', 'ГП-I&nbsp;', $description);

$sql = "
insert into `ugmslnr`.`high_water_current` values 
(NULL, '{$start}', '{$description}')
";

exec_result($sql);