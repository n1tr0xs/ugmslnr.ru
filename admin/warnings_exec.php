<?
$meteo = $_POST['meteo'];
$agro = $_POST['agro'];
$hydro = $_POST['hydro'];
$pollution = $_POST['pollution'];
$_file = basename(__FILE__, '_exec.php');

$input_password = hash('sha256', $_POST['password']);
$check_string = file_get_contents($_SERVER['DOCUMENT_ROOT']. "/pwd/{$_file}");
if($input_password != $check_string){
	echo "Неверный пароль!";
	exit();
}

$text = "<div id='warnings' class='text-left'>";

$text .= "<div class='warning". ($meteo ? " warned" : ""). "'><div><div class='circle'></div>Метеорология</div><span class='warning-text'></span></div>";
$text .= "<div class='warning". ($agro ? " warned" : ""). "'><div><div class='circle'></div>Гидрология</div><span class='warning-text'></span></div>";
$text .= "<div class='warning". ($hydro ? " warned" : ""). "'><div><div class='circle'></div>Агрометеорология</div><span class='warning-text'></span></div>";
$text .= "<div class='warning". ($pollution ? " warned" : ""). "'><div><div class='circle'></div>Загрязнение окружающей среды</div><span class='warning-text'></span></div>";
$text .= "</div>";

$filepath = $_SERVER['DOCUMENT_ROOT'] . "/updatable/{$_file}.html";
$file = fopen($filepath, 'w');
fwrite($file, $text);
fclose($file);

echo "Данные отправлены.<br>";
echo "<a href='/admin/{$_file}.html'>Страница администрирования</a><br>";
echo "<a href='/index.html'>Главная страница сайта</a><br>";
?>