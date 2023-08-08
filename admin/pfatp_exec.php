<?
$date = $_POST['date'];
$desc = $_POST['desc'];

$input_password = hash('sha256', $_POST['password']);
$check_string = file_get_contents($_SERVER['DOCUMENT_ROOT']. '/pwd/pfatp');
if($input_password != $check_string){
	echo "Неверный пароль!";
	exit();
}



$text = '';
$text .= "<p class='day'>Прогноз на ". $date. "</p>";
$text .= "<p class='description'>Прогноз на ". $desc. "</p>";

$filepath = $_SERVER['DOCUMENT_ROOT'] . '/updatable/pfatp.html';
$file = fopen($filepath, 'w');
fwrite($file, $text);
fclose($file);

echo "Данные отправлены.<br>";
echo "<a href='/admin/pfatp.html'>Страница администрирования</a><br>";
echo "<a href='/index.html'>Главная страница сайта</a><br>";
?>