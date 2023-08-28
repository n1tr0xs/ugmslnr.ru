<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/css/master.css">
  <link rel="stylesheet" href="/css/admin.css">
  <title>Администрирование - радиация</title>
</head>
<body>
  <div id='containter'>
    <div id='content'>
      <h3>Администрирование - радиация</h3>
      <form action="/admin/radiation_exec.php" method="post">
        <div class='form-row'><input type="date" name="date" placeholder="Дата" required></div>
        <div class="form-row"><input type="text" placeholder="Описание" name="desc"></div>
        <div class="form-row"><button>Отправить данные</button></div>
      </form><br> <a href='/admin/'> Список панелей администрирования </a>
    </div>
  </div>
</body>
</html>
