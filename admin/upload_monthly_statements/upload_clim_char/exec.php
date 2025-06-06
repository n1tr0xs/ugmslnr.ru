<?
require $_SERVER['DOCUMENT_ROOT'] . '/requires/funcs.php';

$year = $_POST['year'];
$month = $_POST['month'];
$doReplace = $_POST['replace_statement'];

$fileName = "Климатическая характеристика $month $year.pdf";
$dest = $_SERVER['DOCUMENT_ROOT'] . "/updatable/clim_char/" . $fileName;

if (!$doReplace && file_exists($dest)) {
    echo "<p>Отчет за этот месяц уже существует!</p>";
} else {
    $result = move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $dest);
    echo "<p>Данные" . ($result ? " " : " не ") . "отправлены.</p>";
}
echo "<p><a href='.'>Вернуться на страницу ввода </a></p>";