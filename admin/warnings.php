<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta http-equiv="robots" content="noindex">
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.html';?>
  <title>Администрирование - предупреждения</title>
</head>
<body>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
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
    <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php'; ?>
  </div>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>
