<?
require $_SERVER['DOCUMENT_ROOT'] . '/requires/funcs.php';

$dest = $_SERVER['DOCUMENT_ROOT'] . "/updatable/hydromet_bulletin/" . $_FILES['fileToUpload']['name'];
$result = move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $dest);
if($result == TRUE)
  echo "Данные отправлены.";
echo "<br><a href='/admin/". basename(__FILE__, '_exec.php'). ".php'>Вернуться на страницу ввода </a>";
