<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta http-equiv="robots" content="noindex">
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html';?>
  <title>Администрирование - радиация</title>
</head>
<body>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <h3>Администрирование - радиация</h3>
      <form action="exec.php" method="post">
        <fieldset>
          <label>Дата</label>
          <input type="date" name="date" value="<?=date('Y-m-d')?>" placeholder="Дата" required>
          <label>Описание</label>
          <textarea placeholder="Описание" rows="5" cols="50" name="desc" required></textarea>
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
