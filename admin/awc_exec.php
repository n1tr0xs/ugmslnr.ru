<?
$date = $_POST['date'];
$desc = $_POST['desc'];

$input_password = hash('sha256', $_POST['password']);
$check_string = file_get_contents($_SERVER['DOCUMENT_ROOT']. '/pwd/awc');
if($input_password != $check_string){
	echo "Неверный пароль!";
	exit();
}



$text = "";
$text .= "<p>Прогноз уровня загрязнения атмосферного воздуха в г. Луганске и городах Луганской Народной Республики на ". $date. " года";
$text .= "<p class='description'>". $desc. "</p>";

$filepath = $_SERVER['DOCUMENT_ROOT'] . '/updatable/awc.html';
$file = fopen($filepath, 'w');
fwrite($file, $text);
fclose($file);

echo "Данные отправлены.<br>";
echo "<a href='/admin/awc.html'>Страница администрирования</a><br>";
echo "<a href='/index.html'>Главная страница сайта</a><br>";
?>