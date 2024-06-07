<?
require $_SERVER['DOCUMENT_ROOT'] . '/requires/funcs.php';

$news_name = $_POST['news-name'];
$path = $_SERVER['DOCUMENT_ROOT'] . "/press/assets/". $news_name;

$files = $_FILES['files'];
$tmp_dest = array();
$max_i = count($files['name']);
$result = TRUE;

for($i=0; $i<$max_i; ++$i){
    $tmp = $files['tmp_name'][$i];
    mkdir($path);
    $dest = $path . "/" . $files['name'][$i];
    $result = move_uploaded_file($tmp, $dest) && $result;
}

// $dest = $_SERVER['DOCUMENT_ROOT'] . "/press/" . $_FILES['files']['name'];
// $result = move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $dest);

if($result == TRUE)
  echo "Данные отправлены.";
echo "<br><a href='/admin/". basename(__FILE__, '_exec.php'). ".php'>Вернуться на страницу ввода </a>";
