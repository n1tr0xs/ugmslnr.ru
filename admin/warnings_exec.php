<? include $_SERVER['DOCUMENT_ROOT'] . '/includes/funcs.php'; ?>
<?
$_file = basename(__FILE__, '_exec.php');
$meteo = $_POST['meteo'];
$agro = $_POST['agro'];
$hydro = $_POST['hydro'];
$pollution = $_POST['pollution'];

$conn = connect("sinop", "sinop");

$names = array();
if($meteo)
	array_push($names, "Метеорология");
if($agro)
	array_push($names, "Агрометеорология");
if($hydro)
	array_push($names, "Гидрология");
if($pollution)
	array_push($names, "Загрязнение окружающей среды");

$sql = "
update `ugmslnr`.`warnings`
set `is_active`='1'
where `name` IN (\"".implode('", "', $names)."\")
";

if($conn->query($sql) === TRUE){
	echo "Данные отправлены.<br>";
} else {
  echo "Error: {$sql}<br>{$conn->error}";
}

echo "<a href='/admin/{$_file}.html'>Страница администрирования</a><br>";
echo "<a href='/index.html'>Главная страница сайта</a><br>";
?>