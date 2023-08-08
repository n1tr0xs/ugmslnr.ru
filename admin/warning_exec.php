<?
$meteo = $_POST['meteo'];
$agro = $_POST['agro'];
$hydro = $_POST['hydro'];
$pollution = $_POST['pollution'];

$text = "<div id='warnings' class='text-left'>";

$text .= "<div class='warning". ($meteo ? " warned" : ""). "'><div><div class='circle'></div>Метеорология</div><span class='warning-text'></span></div>";
$text .= "<div class='warning". ($agro ? " warned" : ""). "'><div><div class='circle'></div>Гидрология</div><span class='warning-text'></span></div>";
$text .= "<div class='warning". ($hydro ? " warned" : ""). "'><div><div class='circle'></div>Агрометеорология</div><span class='warning-text'></span></div>";
$text .= "<div class='warning". ($pollution ? " warned" : ""). "'><div><div class='circle'></div>Загрязнение окружающей среды</div><span class='warning-text'></span></div>";
$text .= "</div>";

$filepath = $_SERVER['DOCUMENT_ROOT'] . '/updatable/warnings.html';
$file = fopen($filepath, 'w');
fwrite($file, $text);
fclose($file);

echo "Данные отправлены.<br>";
echo "<a href='/admin/warning.php'>Страница администрирования</a><br>";
echo "<a href='/index.php'>Главная страница сайта</a><br>";
?>