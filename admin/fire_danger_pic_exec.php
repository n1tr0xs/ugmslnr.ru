<?
include $_SERVER['DOCUMENT_ROOT'] . '/includes/funcs.php';
$password = $_POST['password'];
$conn = connect("editor", $password);

$_file = basename(__FILE__, '_exec.php');

$filepath = $_SERVER['DOCUMENT_ROOT'] . "/updatable/fire_danger.png";
if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $filepath)){
	echo "<span style='color: green'>Данные отправлены.</span>";
} else {
	echo "<p style='color:red'>Ошибка</p>";
}

echo "<br>";
echo "<a href='/admin/{$_file}.php'>Страница администрирования</a><br>";
echo "<a href='/index.php'>Главная страница сайта</a><br>";
