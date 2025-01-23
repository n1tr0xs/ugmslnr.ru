<?
require $_SERVER['DOCUMENT_ROOT'] . '/requires/funcs.php';

$img_path = $_SERVER['DOCUMENT_ROOT'] . "/updatable/hydro_map.png";
$result = move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $img_path);
          
echo "<p>Данные". ($result ? " " : " не "). "отправлены.</p>";
echo "<p><a href='.'>Вернуться на страницу ввода </a></p>";
