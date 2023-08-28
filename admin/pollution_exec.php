<?
include $_SERVER['DOCUMENT_ROOT'] . '/includes/funcs.php';
$password = $_POST['password'];
$conn = connect("editor", $password);
$_file = basename(__FILE__, '_exec.php');

$date = $_POST['date'];
$desc = $_POST['desc'];

$sql = "
replace into `ugmslnr`.`pollution` values
('{$date}', '{$desc}')
";

if($conn->query($sql) === TRUE){
  echo "Данные отправлены.";
} else {
  echo "Error: {$sql}<br>{$conn->error}";
}

echo "<br>";
echo "<a href='/admin/{$_file}.php'>Страница администрирования</a><br>";
echo "<a href='/index.php'>Главная страница сайта</a><br>";
?>