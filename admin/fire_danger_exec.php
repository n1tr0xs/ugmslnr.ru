<?
$_file = basename(__FILE__, '_exec.php');

$input_password = hash('sha256', $_POST['password']);
$check_string = file_get_contents($_SERVER['DOCUMENT_ROOT']. "/pwd/{$_file}");
if($input_password != $check_string){
	echo "Неверный пароль!";
	exit();
}


$filepath = $_SERVER['DOCUMENT_ROOT'] . "/updatable/{$_file}.png";
if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $filepath)){
	echo "Данные отправлены.";
} else {
	echo "<p style='color:red'>Ошибка</p>";
}
echo "<br>";
echo "<a href='/admin/{$_file}.html'>Страница администрирования</a><br>";
echo "<a href='/index.html'>Главная страница сайта</a><br>";
