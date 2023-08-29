<?
include $_SERVER['DOCUMENT_ROOT'] . '/includes/funcs.php';
$conn = connect("editor", $password);

$_file = basename(__FILE__, '_exec.php');

$date = $_POST['date'];
$desc = $_POST['desc'];

$sql = "
replace into `ugmslnr`.`pfatp` values 
('{$date}', '{$desc}')
";

if($conn->query($sql) === TRUE){
	echo "<span style='color: green'>Данные отправлены.</span>";
} else {
	echo "<span style='color: red'>Ошибка</span>";
}

echo "<a href='/admin/{$_file}.php'>Страница администрирования</a><br>";
echo "<a href='/index.php'>Главная страница сайта</a><br>";
?>