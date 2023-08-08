<?

$input_password = hash('sha256', $_POST['password']);
$check_string = file_get_contents($_SERVER['DOCUMENT_ROOT']. '/pwd/TEMPLATE');
if($input_password != $check_string){
	echo "Неверный пароль!";
	exit();
}



$filepath = $_SERVER['DOCUMENT_ROOT'] . '/updatable/TEMPLATE.html';
$file = fopen($filepath, 'w');
fwrite($file, $text);
fclose($file);

echo "Данные отправлены.<br>";
echo "<a href='/admin/TEMPLATE.html'>Страница администрирования</a><br>";
echo "<a href='/index.html'>Главная страница сайта</a><br>";
?>