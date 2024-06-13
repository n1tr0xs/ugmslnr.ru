<?
require $_SERVER['DOCUMENT_ROOT'] . '/requires/funcs.php';

$news_name = $_POST['news-name'];
$files = $_FILES['files'];

$path = $_SERVER['DOCUMENT_ROOT'] . "/press/assets/". $news_name;

$tmp_dest = array();
$max_i = count($files['name']);
$result = FALSE;

for($i=0; $i<$max_i; ++$i){
    $tmp = $files['tmp_name'][$i];
    mkdir($path);
    $dest = $path . "/" . $files['name'][$i];
    echo "Загрузка файла ". $files['name'][$i]. "...<br>";
    if(move_uploaded_file($tmp, $dest) === TRUE)
        echo "Файл ". $files['name'][$i]. " загружен.";
    else
        echo "Файл ". $files['name'][$i]. " не загружен.";
    echo "<br>";
}

// $dest = $_SERVER['DOCUMENT_ROOT'] . "/press/" . $_FILES['files']['name'];
// $result = move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $dest);

echo "<br><a href='/admin/". basename(__FILE__, '_exec.php'). ".php'>Вернуться на страницу ввода </a>";
