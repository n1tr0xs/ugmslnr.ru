<?
require $_SERVER['DOCUMENT_ROOT'] . '/requires/funcs.php';
$password = $_POST['password'];
$conn = connect("editor", $password);

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

$ch = curl_init(($_SERVER['HTTPS'] ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . '/admin/result.php');
$ch_opts = [];
$ch_opts[CURLOPT_RETURNTRANSFER] = true;
$ch_opts[CURLOPT_POSTFIELDS] = [];
$ch_opts[CURLOPT_POSTFIELDS]['file'] = basename(__FILE__, '_exec.php');
$ch_opts[CURLOPT_POSTFIELDS]['resp'] = ($conn->query($sql) === TRUE);
curl_setopt_array($ch, $ch_opts);
echo curl_exec($ch);
?>