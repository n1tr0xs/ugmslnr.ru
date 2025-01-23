<?
require $_SERVER['DOCUMENT_ROOT'] . '/requires/funcs.php';

$news_name = trim($_POST['title']);

$news_order_path = $_SERVER['DOCUMENT_ROOT']. "/news_order";

$new_order = [];
$fin = file($news_order_path);
foreach($fin as $line){
    if(trim($line) != $news_name)
        $new_order[] = $line;
}

file_put_contents($news_order_path. ".backup", file($news_order_path));
file_put_contents($news_order_path, $new_order);

function delTree($dir, $out_prefix=""){
    $list = array_diff(scandir($dir), array('.','..'));
    foreach($list as $el)
        is_dir("{$dir}/{$el}") ? delTree("{$dir}/{$el}") : unlink("{$dir}/{$el}");
    rmdir($dir);
}

// delTree($_SERVER['DOCUMENT_ROOT']. "/press/". substr($news_name, 1, strlen($news_name)-3));

echo "<p>Новость удалена.</p>";
echo "<p><a href='.'>Вернуться на страницу ввода </a></p>";