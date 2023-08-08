<?
$_file = basename(__FILE__, '_exec.php');

$input_password = hash('sha256', $_POST['password']);
$check_string = file_get_contents($_SERVER['DOCUMENT_ROOT']. "/pwd/{$_file}");
// if($input_password != $check_string){
// 	echo "Неверный пароль!";
// 	exit();
// }

$days = $_POST['day'];


$text = "<table>";
$text .= "<tr>";
for($i=0; $i<3; ++$i)
	$text .= "<td colspan='2'>". $days[$i]. "</td>";
$text .= "</tr>";

$text .= "<tr><td>ночь</td><td>день</td><td>ночь</td><td>день</td><td>ночь</td><td>день</td></tr>";

$icons = $_POST['icon'];
$text .= "<tr>";
for($i=0; $i<6; ++$i)
	$text .= "<td class='text-center'><img class='no-border' src='/files/imgs/". $icons[$i]. ".png'></td>";
$text .= "</tr>";

$wind_directions = $_POST['wind_direction'];
$wind_speed = $_POST['wind_speed'];
$text .= "<tr>";
for($i=0; $i<6; ++$i)
	$text .= "<td>". $wind_directions[$i]. "<br>". $wind_speed[$i]. "м/с</td>";
$text .= "</tr>";

$temperatures = $_POST['temp'];
$text .= "<tr>";
for($i=0; $i<6; ++$i)
	$text .= "<td>". $temperatures[$i]. "&#x2103;</td>";
$text .= "</tr>";
$text .= "</table>";

$dates = $_POST['date'];
$desc = $_POST['description'];
for($i=0; $i<3; ++$i){
	$text .= "<p class='day'>". $dates[$i]. "</p>";
	$text .= "<p class='region'> По городу Луганск </p>";
	$text .= "<p class='description'>". $desc[$i*2]. "</p>";
	$text .= "<p class='region'> По территории Луганской Народной Республики </p>";
	$text .= "<p class='description'>". $desc[$i*2+1]. "</p>";
}

$filepath = $_SERVER['DOCUMENT_ROOT'] . "/updatable/{$_file}.html";
$file = fopen($filepath, 'w');
fwrite($file, $text);
// echo $text. "<br>";
fclose($file);

echo "Данные отправлены.<br>";
echo "<a href='/admin/{$_file}.html'>Страница администрирования</a><br>";
echo "<a href='/index.html'>Главная страница сайта</a><br>";
?>