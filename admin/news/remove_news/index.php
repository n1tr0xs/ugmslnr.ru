<? $page_name = 'Администрирование - удаление новости'; ?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">

<head>
    <meta http-equiv="robots" content="noindex">
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html'; ?>
    <title><?= $page_name; ?></title>
</head>

<body>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
    <div id='containter'>
        <div id='content'>
            <h3><?= $page_name; ?></h3>
            <form action="exec.php" method="post">
                <fieldset>

                    <label for='title'>Название новости:</label>
                    <select id='title' name='title'>
                        <option value="" selected>Выберите название</option>
                        <?
                        $file = fopen($_SERVER['DOCUMENT_ROOT'] . "/news_order", "r");
                        while ($line = fgets($file)) {
                            $val = $line;
                            $news_name = substr($line, 1, strlen($line) - 4);
                            echo "<option value=\"" . $val . "\">" . $news_name . "</option>";
                        }
                        ?>
                    </select>

                    <button>Отправить данные</button>
                </fieldset>
            </form>
            <span><a href='/admin/'> Список панелей администрирования </a></span>
        </div>
        <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>

</html>