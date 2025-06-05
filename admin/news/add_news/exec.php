<?
require $_SERVER['DOCUMENT_ROOT'] . '/requires/funcs.php';

$news_name = $_POST['news-name'];
$code = $_POST['code'];
$news_title = $_POST['news-title'];

$template_name = $_SERVER['DOCUMENT_ROOT'] . "/press/template.php";
$template = fopen($template_name, "r") or die("Не удалось открыть файл шаблона");
$text_template = fread($template, filesize($template_name));
[$start, $end] = explode('<--CONTENT-->', $text_template);
fclose($template);

$path = $_SERVER['DOCUMENT_ROOT'] . "/press/" . $news_name . '/';
mkdir($path);
$file = fopen($path . "index.php", 'w') or die("Не удалось открыть файл новости");
fwrite($file, "<? $" . "news_title=\"{$news_title}\"; ?>\n");
fwrite($file, $start);
fwrite($file, $code);
fwrite($file, $end);
fclose($file);

$fname = $_SERVER['DOCUMENT_ROOT'] . '/news_order';
$file = fopen($fname, 'r') or die("Не удалось открыть файл очереди новостей");
$old_news = fread($file, filesize($fname));
fclose($file);

$file = fopen($fname, 'w') or die("Не удалось открыть файл очереди новостей");
fwrite($file, "'{$news_name}',\n" . $old_news);
fclose($file);

echo "<p>Данные отправлены.</p>";
echo "<p><a href='.'>Вернуться на страницу ввода </a></p>";