<?
$filepath = $_SERVER['DOCUMENT_ROOT'] . '/updatable/fire_danger.png';
if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $filepath)){
	echo "Данные отправлены.";
} else {
	echo "<p style='color:red'>Ошибка</p>";
}
echo "<br>";
echo "<a href='/admin/fire_forecast.html'>Страница администрирования</a><br>";
echo "<a href='/index.html'>Главная страница сайта</a><br>";
