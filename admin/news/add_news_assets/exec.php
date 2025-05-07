<?
require $_SERVER['DOCUMENT_ROOT'] . '/requires/funcs.php';

$news_name = $_POST['news-name'];
$files = $_FILES['files'];

$path = $_SERVER['DOCUMENT_ROOT'] . "/press/" . $news_name . '/';
echo "<p>Путь загрузки файлов: " . $path . "</p>";

for ($i = 0; $i < count($files['name']); ++$i) {
    $tmp = $files['tmp_name'][$i];
    $fname = $files['name'][$i];
    mkdir($path);
    $dest = $path . $fname;
    echo "<p>Загрузка файла " . $fname . "...</p>";
    $result = move_uploaded_file($tmp, $dest);
    echo "<p>Файл " . $fname . ($result ? " " : " не ") . "загружен.</p>";
}

echo "<p><a href='.'>Вернуться на страницу ввода </a></p>";