<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta http-equiv="robots" content="noindex">
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html';?>
  <title>Администрирование - предупреждения</title>
</head>
<body>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <h3> Администрирование - предупреждения</h3>
      <form method="post" action="/admin/warnings_exec.php">
        <fieldset>
          <label>Тип предупреждения</label>
          <select name="type">
            <option value="Метеорологическое">Метеорологическое</option>
            <option value="Гидрологическое">Гидрологическое</option>
            <option value="Загрязнение окружающей среды">Загрязнение окружающей среды</option>
            <option value="Агрометеорологическое">Агрометеорологическое</option>
          </select>

          <label>Описание</label>
          <textarea name="description" rows="5" cols="50"></textarea>

          <label>Начало</label>
          <input type="datetime-local" name="start">

          <label>Конец</label>
          <input type="datetime-local" name="end">
          
          <label>Пароль</label>
          <input type="password" name="password" placeholder="Пароль" required>
          
          <button>Отправить данные</button>
        </fieldset>
      </form>
      <span><a href='/admin/index.php'> Список панелей администрирования </a></span>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>
</html>
