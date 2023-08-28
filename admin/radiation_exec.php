<?
$_file = basename(__FILE__, '_exec.php');

$date = $_POST['date'];
$desc = $_POST['desc'];
$text = "";
$text .= "<p>Уровень радиации на ". $date. " по территории Луганской Народной Республики составил ". $desc. "</p>;

$filepath = $_SERVER['DOCUMENT_ROOT'] . "/updatable/{$_file}.html";
$file = fopen($filepath, 'w');
fwrite($file, $text);
fclose($file);

echo "Данные отправлены.<br>";
echo "<a href='/admin/{$_file}.html'>Страница администрирования</a><br>";
echo "<a href='/index.html'>Главная страница сайта</a><br>";
?>