<!DOCTYPE html>
<html lang="ru" dir="ltr">

<? $PAGE_NAME = "Администрирование - загрузка климатической характеристики"; ?>

<head>
    <meta http-equiv="robots" content="noindex">
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html'; ?>
    <title><?=$PAGE_NAME;?></title>
</head>

<body>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
    <div id='containter'>
        <div id='content'>
            <h3><?=$PAGE_NAME;?></h3>
            <form action="exec.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <label for="month">Месяц</label>
                    <select name="month" id="month">
                        <option value="января">январь</option>
                        <option value="февраля">февраль</option>
                        <option value="марта">март</option>
                        <option value="апреля">апрель</option>
                        <option value="мая">май</option>
                        <option value="июня">июнь</option>
                        <option value="июля">июль</option>
                        <option value="августа">август</option>
                        <option value="сентября">сентябрь</option>
                        <option value="октября">октябрь</option>
                        <option value="ноября">ноябрь</option>
                        <option value="декабря">декабрь</option>
                    </select>

                    <label for="year">Год</label>
                    <input type="number" name="year" id="year">

                    <div class='file-drop-area span2'>
                        <span class="fake-btn">Выберите файл</span>
                        <span class="file-msg" id="file-msg">или перетащите файл сюда</span>
                        <input type="file" name="fileToUpload" class="file-input" id="file-input" accept=".pdf"
                            required>
                    </div>
                    <button type="submit">Отправить данные</button>
                </fieldset>
            </form>
            <span><a href='/admin/'> Список панелей администрирования </a></span>
        </div>
        <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>

</html>