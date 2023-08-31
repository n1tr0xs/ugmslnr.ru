<?
include $_SERVER['DOCUMENT_ROOT'] . '/includes/funcs.php';
$password = $_POST['password'];
$conn = connect("editor", $password);

$_file = basename(__FILE__, '_exec.php');

$filepath = $_SERVER['DOCUMENT_ROOT'] . "/updatable/hydro_map.png";
if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $filepath)){
	echo "<span style='color: green'>Данные отправлены.</span>";
} else {
	echo "<span style='color: red'>Ошибка</span>";
}

echo "<br>";
echo "<a href='/admin/{$_file}.php'>Страница администрирования</a><br>";
echo "<a href='/index.php'>Главная страница сайта</a><br>";
