<?
require $_SERVER['DOCUMENT_ROOT'] . '/requires/funcs.php';


$dest = $_SERVER['DOCUMENT_ROOT'] . "/updatable/high_water/weekly.pdf";
$result = move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $dest);

echo "<p>Данные". ($result ? " " : " не "). "отправлены.</p>";
echo "<p><a href='.'>Вернуться на страницу ввода </a></p>";