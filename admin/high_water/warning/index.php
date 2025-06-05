<!DOCTYPE html>
<html lang="ru" dir="ltr">

<head>
    <meta http-equiv="robots" content="noindex">
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html'; ?>
    <title> Администрирование - предупреждения вессеннего половодья </title>
</head>

<body>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
    <div id='containter'>
        <div id='content'>
            <h3> Администрирование - предупреждения вессеннего половодья </h3>
            <form method="post" action="exec.php">
                <fieldset>
                    <label>Начало</label>
                    <input type="datetime-local" name="start">

                    <label>Конец</label>
                    <input type="datetime-local" name="end">

                    <label>Описание</label>
                    <textarea name="description" rows="5" cols="50"></textarea>

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