<?
$_file = basename(__FILE__, '_exec.php');


$comment = $_POST['comment'];
$text = $comment;

$filepath = $_SERVER['DOCUMENT_ROOT'] . "/updatable/{$_file}.html";
$file = fopen($filepath, 'w');
fwrite($file, $text);
fclose($file);

echo "Данные отправлены.<br>";
echo "<a href='/admin/{$_file}.html'>Страница администрирования</a><br>";
echo "<a href='/index.html'>Главная страница сайта</a><br>";
?>