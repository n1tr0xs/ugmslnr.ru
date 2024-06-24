<?
require $_SERVER['DOCUMENT_ROOT'] . '/requires/funcs.php';

$username = $_POST['username'];
$pwd = $_POST['pwd'];
$sql = $_POST['sql'];

$conn = connect($username, $pwd);
if($conn->connect_error) die("<p>DB Connection error</p>");

$resp = $conn->query($sql);
if($resp == TRUE){
    echo "<p>Данные отправлены.</p>";
    echo "<p>DUMP: "; var_dump($resp); echo "</p>";
} else {
    echo "<p>Ошибка отправки данных.</p>";
    echo "<p>SQL: {$sql}</p>";
    echo "<p>Ошибка: {$conn->error}</p>";
}
echo "<p><a href='.'>Вернуться на страницу ввода </a></p>";