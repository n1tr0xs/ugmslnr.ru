<? include $_SERVER['DOCUMENT_ROOT'] . '/includes/funcs.php'; ?>

<?
$_file = basename(__FILE__, '_exec.php');


$date = $_POST['date'];
$desc = $_POST['desc'];

$conn = connect("sinop", "sinop");

$sql = "
replace into `ugmslnr`.`awc` values 
('{$date}', '{$desc}')
";

if($conn->query($sql) === TRUE){
	echo "Данные отправлены.<br>";
} else {
  echo "Error: {$sql}<br>{$conn->error}";
}

echo "<a href='/admin/{$_file}.php'>Страница администрирования</a><br>";
echo "<a href='/index.html'>Главная страница сайта</a><br>";
?>