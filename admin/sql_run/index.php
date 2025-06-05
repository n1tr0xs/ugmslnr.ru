<? $page_name = 'Администрирование - запуск sql'; ?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">

<head>
    <meta http-equiv="robots" content="noindex">
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html'; ?>
    <title><?= $page_name ?></title>
</head>

<body>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
    <div id='containter'>
        <div id='content'>
            <h3><?= $page_name ?></h3>
            <form method="post" action="exec.php">
                <fieldset>

                    <label>Логин:</label>
                    <input type='text' id='login' name='username'>

                    <label>Пароль:</label>
                    <input type='text' id='password' name='pwd'>

                    <label>SQL:</label>
                    <textarea rows="5" cols="90" id='sql' name='sql'></textarea>

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