<?
require $_SERVER['DOCUMENT_ROOT'] . '/requires/funcs.php';
$conn = connect("visiter", "visiter_ugms");

$date = $conn->real_escape_string($_POST['date']);
$comment = $conn->real_escape_string($_POST['comment']);

$sql = "
replace into `ugmslnr`.`sinop_comments` values 
('{$date}', '{$comment}')
";

exec_result($sql, __DIR__);