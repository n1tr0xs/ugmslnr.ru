<?
include $_SERVER['DOCUMENT_ROOT'] . '/includes/funcs.php';
$password = $_POST['password'];
$conn = connect("editor", $password);

$_file = basename(__FILE__, '_exec.php');

$date1 = $conn->real_escape_string($_POST['date1']);
$desc1 = $conn->real_escape_string($_POST['desc1']);
$date2 = $conn->real_escape_string($_POST['date2']);
$desc2 = $conn->real_escape_string($_POST['desc2']);

$text = "";
$text .= "<p class='day'>Прогноз на ". $date1. "</p>";
$text .= "<p class='description'>Прогноз на ". $desc1. "</p>";
$text .= "<p class='day'>Прогноз на ". $date2. "</p>";
$text .= "<p class='description'>Прогноз на ". $desc2. "</p>";

$filepath = $_SERVER['DOCUMENT_ROOT'] . "/updatable/{$_file}.html";
$file = fopen($filepath, 'w');
fwrite($file, $text);
fclose($file);

echo "<span style='color: green'>Данные отправлены.</span>";
echo "<a href='/admin/{$_file}.php'>Страница администрирования</a><br>";
echo "<a href='/index.php'>Главная страница сайта</a><br>";
?>