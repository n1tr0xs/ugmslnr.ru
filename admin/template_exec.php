<?


$filepath = $_SERVER['DOCUMENT_ROOT'] . '/updatable/.html';
$file = fopen($filepath, 'w');
fwrite($file, $text);
fclose($file);

echo "Данные отправлены.<br>";
echo "<a href='/admin/.html'>Страница администрирования</a><br>";
echo "<a href='/index.html'>Главная страница сайта</a><br>";
?>