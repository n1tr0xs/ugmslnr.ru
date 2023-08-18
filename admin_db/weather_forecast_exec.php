<?
$_file = basename(__FILE__, '_exec.php');

$input_password = hash('sha256', $_POST['password']);
// $check_string = file_get_contents($_SERVER['DOCUMENT_ROOT']. "/pwd/{$_file}");
// if($input_password != $check_string){
// 	echo "Неверный пароль!";
// 	exit();
// }

$conn = new mysqli("ugmslnr", "sinop", "sinop");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$date = $_POST['date'];

$sql = "
insert into weather_table_forecast values 
(NULL, '{$date}', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
";
echo $sql;
// if($conn->query($sql) === TRUE){
// 	echo "Данные отправлены.<br>";
// } else {
//   echo "Error: {$sql}<br>{$conn->error}";
// }

echo "<a href='/admin_db/{$_file}.html'>Страница администрирования</a><br>";
echo "<a href='/index.html'>Главная страница сайта</a><br>";
?>