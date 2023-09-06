<?
include $_SERVER['DOCUMENT_ROOT'] . '/includes/funcs.php';
$password = $_POST['password'];
$conn = connect("editor", $password);

$_file = basename(__FILE__, '_exec.php');

$type = $_POST['type'];
$description = $_POST['description'];
$start = $_POST['start'];
$end = $_POST['end'];

$sql = "
insert into `ugmslnr`.`warnings` values 
(NULL, '{$type}', '{$start}', '{$end}', '{$description}')
";

if($conn->query($sql) === TRUE){
	echo "<span style='color: green'>Данные отправлены.</span>";
} else {
	echo "<span style='color: red'>Ошибка</span>";
}

echo "<br>";
echo "<a href='/admin/{$_file}.html'>Страница администрирования</a><br>";
echo "<a href='/index.php'>Главная страница сайта</a><br>";
?>