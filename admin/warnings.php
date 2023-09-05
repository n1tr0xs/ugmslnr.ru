<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/styles.html';?>
  <title>Администрирование - предупреждения</title>
</head>
<body>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <h3> Администрирование - предупреждения</h3>
      <form method="post" action="/admin/warnings_exec.php">
        <fieldset>
          <label for="meteo">Метеорологическое</label>
          <input type="checkbox" name="meteo" required>
          
          <label for="hydro">Гидрометеорологическое</label>
          <input type="checkbox" name="hydro" required>
          
          <label for="agro">Агрометеорологическое</label>
          <input type="checkbox" name="agro" required>
          
          <label for="pollution">Загрязнение окружающей среды</label>
          <input type="checkbox" name="pollution" required>
          
          <label>Пароль</label>
          <input type="password" name="password" placeholder="Пароль" required>
          
          <button>Отправить данные</button>
        </fieldset>
      </form><br> <a href='/admin/'> Список панелей администрирования </a>
    </div>
    <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php'; ?>
  </div>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>
