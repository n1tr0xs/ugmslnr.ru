<?
$meteo = $_POST['meteo'];
$agro = $_POST['agro'];
$hydro = $_POST['hydro'];
$pollution = $_POST['pollution'];

$text = "<div id='warnings' class='text-left'>";

$text .= "<div class='waning". ($meteo ? " warned" : ""). "'><div><div class='circle'></div>Метеорологическое</div><span class='warning-text'></span></div>";
$text .= "<div class='waning". ($agro ? " warned" : ""). "'><div><div class='circle'></div>Гидрометеорологическое</div><span class='warning-text'></span></div>";
$text .= "<div class='waning". ($hydro ? " warned" : ""). "'><div><div class='circle'></div>Агрометеорологическое</div><span class='warning-text'></span></div>";
$text .= "<div class='waning". ($pollution ? " warned" : ""). "'><div><div class='circle'></div>Загрязнение окружающей среды</div><span class='warning-text'></span></div>";
$text .= "</div>";

$filepath = $_SERVER['DOCUMENT_ROOT'] . '/updatable/warnings.html';
$file = fopen($filepath, 'w');
fwrite($file, $text);
fclose($file);

echo "Данные отправлены.<br>";
echo "<a href='/admin/warning.php'>Страница администрирования</a><br>";
echo "<a href='/index.php'>Главная страница сайта</a><br>";
?>