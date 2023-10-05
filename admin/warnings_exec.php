<?
include $_SERVER['DOCUMENT_ROOT'] . '/includes/funcs.php';
$password = $_POST['password'];
$conn = connect("editor", $password);

$_file = basename(__FILE__, '_exec.php');

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

if($conn->query($sql) === TRUE){
	echo "<span style='color: green'>Данные отправлены.</span>";
} else {
	echo "<span style='color: red'>Ошибка</span>";
}

echo "<br>";
echo "<a href='/admin/{$_file}.php'>Страница администрирования</a><br>";
echo "<a href='/index.php'>Главная страница сайта</a><br>";
?>