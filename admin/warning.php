<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/css/master.css">
  <title>Администрирование - предупреждения</title>
</head>
<body>
  <div id='containter'>
    <div id='content'>
      <form method="post" action="/admin/warning_exec.php">
        <label for="meteo">Метеорологическое</label><input type="checkbox" name="meteo"><br>
        <label for="hydro">Гидрометеорологическое</label><input type="checkbox" name="hydro"><br>
        <label for="agro">Агрометеорологическое</label><input type="checkbox" name="agro"><br>
        <label for="pollution">Загрязнение окружающей среды</label><input type="checkbox" name="pollution"><br>
        <button>Отправить данные</button>
      </form>
    </div>
  </div>
</body>
</html>
