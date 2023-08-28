<?
include $_SERVER['DOCUMENT_ROOT'] . '/includes/funcs.php'; 
$_file = basename(__FILE__, '_exec.php');

$date = $_POST['date'];
$comment = $_POST['comment'];

$conn = connect("sinop", "sinop");
$sql = "
replace into `ugmslnr`.`sinop_comments` values 
('{$date}', '{$comment}')
";

if($conn->query($sql) === TRUE){
	echo "Данные отправлены.<br>";
} else {
  echo "Error: {$sql}<br>{$conn->error}";
}

echo "<a href='/admin/{$_file}.html'>Страница администрирования</a><br>";
echo "<a href='/index.html'>Главная страница сайта</a><br>";
?>