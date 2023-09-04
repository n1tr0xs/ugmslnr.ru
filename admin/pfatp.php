<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/css/master.css">
  <link rel="stylesheet" href="/css/admin.css">
  <title>Администрирование - вероятностный прогноз температуры воздуха и осадков</title>
</head>
<body>
  <div id='containter'>
    <div id='content'>
      <h3> Администрирование - вероятностный прогноз температуры воздуха и осадков</h3>
      <form action="/admin/pfatp_exec.php" method="post">
        <div class='form-row'><input type="date" name="date" value="<? echo date('Y-m-d'); ?>" placeholder="Дата" required></div>
        <div class='form-row'><textarea rows="5" cols='50' name="desc" placeholder="Описание" required></textarea></div>
        <div class='form-row'><input type="password" name="password" placeholder="Пароль" required></div>
        <div class='form-row'><button>Отправить данные</button></div>
      </form><br> <a href='/admin/'> Список панелей администрирования </a>
    </div>
  </div>
</body>
</html>
