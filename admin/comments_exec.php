<?
include $_SERVER['DOCUMENT_ROOT'] . '/includes/funcs.php';
$conn = connect("sinop", "sinop");

$_file = basename(__FILE__, '_exec.php');

$date = $_POST['date'];
$comment = $_POST['comment'];

$sql = "
replace into `ugmslnr`.`sinop_comments` values 
('{$date}', '{$comment}')
";

if($conn->query($sql) === TRUE){
	echo "Данные отправлены.<br>";
} else {
  echo "Error: {$sql}<br>{$conn->error}";
}

echo "<br>";
echo "<a href='/admin/{$_file}.php'>Страница администрирования</a><br>";
echo "<a href='/index.html'>Главная страница сайта</a><br>";
?>