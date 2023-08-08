<?
$date1 = $_POST['date1'];
$desc1 = $_POST['desc1'];
$date2 = $_POST['date2'];
$desc2 = $_POST['desc2'];
$_file = basename(__FILE__, '_exec.php');

$input_password = hash('sha256', $_POST['password']);
$check_string = file_get_contents($_SERVER['DOCUMENT_ROOT']. "/pwd/{$_file}");
if($input_password != $check_string){
	echo "Неверный пароль!";
	exit();
}

$text = "";
$text .= "<p class='day'>Прогноз на ". $date1. "</p>";
$text .= "<p class='description'>Прогноз на ". $desc1. "</p>";
$text .= "<p class='day'>Прогноз на ". $date2. "</p>";
$text .= "<p class='description'>Прогноз на ". $desc2. "</p>";

$filepath = $_SERVER['DOCUMENT_ROOT'] . "/updatable/{$_file}.html";
$file = fopen($filepath, 'w');
fwrite($file, $text);
fclose($file);

echo "Данные отправлены.<br>";
echo "<a href='/admin/{$_file}.html'>Страница администрирования</a><br>";
echo "<a href='/index.html'>Главная страница сайта</a><br>";
?>