<?
$date = $_POST['date'];
$desc = $_POST['desc'];
$_file = basename(__FILE__, '_exec.php');


$text = "";
$text .= "<p>Прогноз уровня загрязнения атмосферного воздуха в г. Луганске и городах Луганской Народной Республики на ". $date. " года";
$text .= "<p class='description'>". $desc. "</p>";

$filepath = $_SERVER['DOCUMENT_ROOT'] . "/updatable/{$_file}.html";
$file = fopen($filepath, 'w');
fwrite($file, $text);
fclose($file);

echo "Данные отправлены.<br>";
echo "<a href='/admin/{$_file}.html'>Страница администрирования</a><br>";
echo "<a href='/index.html'>Главная страница сайта</a><br>";
?>