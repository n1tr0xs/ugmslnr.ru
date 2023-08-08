<?
$date = $_POST['date'];
$temp = $_POST['temp'];
$wind = $_POST['wind'];
$humidity = $_POST['humidity'];
$pressure = $_POST['pressure'];
$icon = $_POST['icon'];

$input_password = hash('sha256', $_POST['password']);
$check_string = file_get_contents($_SERVER['DOCUMENT_ROOT']. '/pwd/weather');
if($input_password != $check_string){
	echo "Неверный пароль!";
	exit();
}

$text = '';
$text .= "<p style='text-align: center;'>{$date}</p>";
$text .= "<div class='text-center'><img src='/files/imgs/{$icon}.png' class='no-border'></div>";
$text .= "<p><span style='color: red;'>Температура</span>:{$temp}&#x2103;</p>";
$text .= "<p><span style='color: green;'>Ветер</span>: {$wind}м/с</p>";
$text .= "<p><span style='color: blue;'>Влажность</span>: {$humidity}%</p>";
$text .= "<p><span style='color: black;'>Давление</span>: {$pressure} мм.рт.ст.</p>";

$filepath = $_SERVER['DOCUMENT_ROOT'] . '/updatable/weather.html';
$file = fopen($filepath, 'w');
fwrite($file, $text);
fclose($file);

echo "Данные отправлены.<br>";
echo "<a href='/admin/weather.html'>Страница администрирования</a><br>";
echo "<a href='/index.html'>Главная страница сайта</a><br>";
?>