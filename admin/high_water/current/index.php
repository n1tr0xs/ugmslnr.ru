<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta http-equiv="robots" content="noindex">
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html';?>
  <title> Администрирование -  текущая обстановка Весеннего половодья </title>
</head>
<body>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <h3> Администрирование - текущая обстановка Весеннего половодья </h3>
      <form action="exec.php" method="post">
        <fieldset>
          <label>Описание</label>
          <textarea name="description" rows="5" cols="50"></textarea>
          <label>Начало</label>
          <input type="datetime-local" name="start">
          <label>Конец</label>
          <input type="datetime-local" name="end">          
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
