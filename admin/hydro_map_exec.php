<?
require $_SERVER['DOCUMENT_ROOT'] . '/requires/funcs.php';

$img_path = $_SERVER['DOCUMENT_ROOT'] . "/updatable/hydro/map.png";
$result = move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $img_path);
if($result == TRUE)
  echo "Данные отправлены.";
echo "<br><a href='/admin/". basename(__FILE__, '_exec.php'). ".php'>Вернуться на страницу ввода </a>";
