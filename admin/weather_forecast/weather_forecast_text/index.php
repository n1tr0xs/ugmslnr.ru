<!DOCTYPE html>
<html lang="ru" dir="ltr">

<head>
    <meta http-equiv="robots" content="noindex">
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html';?>
    <title>Администрирование - прогноз погоды - текст</title>
</head>

<body>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
    <div id='containter'>
        <div id='content'>
            <h3>Администрирование - прогноз погоды - текст</h3>
            <form action="exec.php" method="post">
                <fieldset>
                    <label for="date">Дата</label>
                    <input type="date" name="date" value="<?=date('Y-m-d')?>" required>

                    <label>Описание для города</label>
                    <textarea cols="50" rows="5" name="desc_city" placeholder="Описание для города" required></textarea>


                    <label>Описание для области</label>
                    <textarea cols="50" rows="5" name="desc_region" placeholder="Описание для области"
                        required></textarea>

                    <button id='submit-button'>Отправить данные</button>
                </fieldset>
            </form>
            <span><a href='/admin/'> Список панелей администрирования </a></span>
        </div>
        <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>

</html>