<?
require $_SERVER['DOCUMENT_ROOT'] . '/requires/funcs.php';
$conn = connect("visiter", "visiter_ugms");

$aside_name = $conn->real_escape_string($_POST['type']);
$description = $conn->real_escape_string($_POST['description']);
$start = $conn->real_escape_string($_POST['start']);
$end = $conn->real_escape_string($_POST['end']);

switch ($aside_name) {
	case "Метеорологическое":
		$type = "метеорология";		
		break;
	case "Гидрологическое":		
		$type = "гидрология";
		break;
	case "Загрязнение окружающей среды":
		$type = "загрязнение окружающей среды";		
		break;
	case "Агрометеорологическое":		
		$type = "Агрометеорология";
		break;
}

$sql = "
insert into `ugmslnr`.`warnings` values 
(NULL, '{$type}', '{$start}', '{$end}', '{$description}', '{$aside_name}')
";

exec_result($sql);