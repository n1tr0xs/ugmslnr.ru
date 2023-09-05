<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/styles.html'; ?>
  <link rel="stylesheet" href="/css/admin.css">
  <title>Администрирование - предупреждения</title>
</head>
<body>
  <div id='containter'>
    <div id='content'>
      <h3> Администрирование - предупреждения</h3>
      <form method="post" action="/admin/warnings_exec.php">
        <div class='form-row'><label for="meteo">Метеорологическое</label><input type="checkbox" name="meteo" required></div>
        <div class='form-row'><label for="hydro">Гидрометеорологическое</label><input type="checkbox" name="hydro" required></div>
        <div class='form-row'><label for="agro">Агрометеорологическое</label><input type="checkbox" name="agro" required></div>
        <div class='form-row'><label for="pollution">Загрязнение окружающей среды</label><input type="checkbox" name="pollution" required></div>
        <div class='form-row'><input type="password" name="password" placeholder="Пароль" required></div>
        <div class='form-row'><button>Отправить данные</button></div>
      </form><br> <a href='/admin/'> Список панелей администрирования </a>
    </div>
  </div>
</body>
</html>
