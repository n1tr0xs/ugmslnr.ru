<!DOCTYPE html>
<html lang="ru" dir="ltr">

<head>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html'; ?>
    <meta name="description" content="Образцы писем-запросов ФГБУ «УГМС по ЛНР»">
    <title>Образцы писем-запросов</title>
</head>

<body>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
    <div id='containter'>
        <div id='content'>
            <h3>Образцы писем-запросов</h3>
            <div>
                <ul>
                    <?
                    $path = "/files/request_samples/";
                    $ext = ".doc";
                    $files = get_files($path, $ext);
                    foreach ($files as $name) { ?>
                        <li> <a download href="<?= $path . $name ?>"><?= $name ?></a></li>
                    <? } ?>
                </ul>
            </div>
        </div>
        <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>

</html>