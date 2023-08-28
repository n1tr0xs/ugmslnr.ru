<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/css/master.css">
  <link rel="stylesheet" href="/css/admin.css">
  <title>Администрирование - пожароопасность</title>
</head>
<body>
  <div id='containter'>
    <div id='content'>
      <h3> Администрирование - пожароопасность</h3>
      <form action="/admin/fire_forecast_exec.php" method="post">
        <div class='form-row'><input type="text" name="date1" placeholder="Дата" required></div>
        <div class='form-row'><textarea rows='10' cols='50' name="desc" placeholder="Описание" required></textarea></div>
        <div class='form-row'><input type="text" name="date2" placeholder="Дата" required></div>
        <div class='form-row'><textarea rows='10' cols='50' name="desc" placeholder="Описание" required></textarea></div>
        <div class='form-row'><button>Отправить данные</button></div>
      </form><br> <a href='/admin/'> Список панелей администрирования </a>
    </div>
  </div>
</body>
</html>