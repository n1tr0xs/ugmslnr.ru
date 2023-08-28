<? include $_SERVER['DOCUMENT_ROOT'] . '/includes/funcs.php'; ?>
<?
$_file = basename(__FILE__, '_exec.php');
$meteo = $_POST['meteo'];
$agro = $_POST['agro'];
$hydro = $_POST['hydro'];
$pollution = $_POST['pollution'];

$conn = connect("sinop", "sinop");

// $text = "<div id='warnings' class='text-left'>";
// $text .= "<div class='warning". ($meteo ? " warned" : ""). "'><div><div class='circle'></div>Метеорология</div><span class='warning-text'></span></div>";
// $text .= "<div class='warning". ($agro ? " warned" : ""). "'><div><div class='circle'></div>Гидрология</div><span class='warning-text'></span></div>";
// $text .= "<div class='warning". ($hydro ? " warned" : ""). "'><div><div class='circle'></div>Агрометеорология</div><span class='warning-text'></span></div>";
// $text .= "<div class='warning". ($pollution ? " warned" : ""). "'><div><div class='circle'></div>Загрязнение окружающей среды</div><span class='warning-text'></span></div>";
// $text .= "</div>";

$sql = "
update `ugmslnr`.`warnings`
set `is_active`='{$meteo}'
where `name`='Метеорология'
";

if($conn->query($sql) === TRUE){
	echo "Данные отправлены.<br>";
} else {
  echo "Error: {$sql}<br>{$conn->error}";
}

echo "<a href='/admin/{$_file}.html'>Страница администрирования</a><br>";
echo "<a href='/index.html'>Главная страница сайта</a><br>";
?>