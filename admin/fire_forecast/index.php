<!DOCTYPE html>
<html lang="ru" dir="ltr">

<head>
    <meta http-equiv="robots" content="noindex">
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html'; ?>
    <title>Администрирование - пожароопасность</title>
</head>

<body>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
    <div id='containter'>
        <div id='content'>
            <h3> Администрирование - пожароопасность</h3>
            <form action="exec.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <div class='file-drop-area span2'>
                        <span class="fake-btn">Выберите файл</span>
                        <span class="file-msg" id="file-msg">или перетащите файл сюда</span>
                        <input type="file" name="fileToUpload" class="file-input" id="file-input" accept="image/png"
                            required>
                    </div>
                    <label>Начало</label>
                    <input type="date" name="start" value="<?= date('Y-m-d', strtotime('+1days')) ?>" placeholder="Дата"
                        required>
                    <label>Конец</label>
                    <input type="date" name="end" value="<?= date('Y-m-d', strtotime('+3days')) ?>" placeholder="Дата"
                        required>
                    <label>Описание</label>
                    <textarea rows="5" cols="50" name="desc" placeholder="Описание" required></textarea>
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