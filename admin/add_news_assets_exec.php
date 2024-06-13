<?
require $_SERVER['DOCUMENT_ROOT'] . '/requires/funcs.php';

$news_name = $_POST['news-name'];
$files = $_FILES['files'];

$path = $_SERVER['DOCUMENT_ROOT'] . "/press/". $news_name. '/';
echo "Путь загрузки файлов: ". $path. "<br>";

for($i=0; $i<count($files['name']); ++$i){
    $tmp = $files['tmp_name'][$i];
    mkdir($path);
    $dest = $path. $files['name'][$i];
    echo "Загрузка файла ". $files['name'][$i]. "...<br>";
    if(move_uploaded_file($tmp, $dest) === TRUE)
        echo "Файл ". $files['name'][$i]. " загружен.";
    else
        echo "Файл ". $files['name'][$i]. " не загружен.";
    echo "<br>";
}

echo "<br><a href='/admin/". basename(__FILE__, '_exec.php'). ".php'>Вернуться на страницу ввода </a>";
