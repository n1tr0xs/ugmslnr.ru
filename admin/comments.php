<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/css/master.css">
  <link rel="stylesheet" href="/css/admin.css">
  <title>Администрирование - комментарии синоптика</title>
</head>
<body>
  <div id='containter'>
    <div id='content'>
      <form action="/admin/comments_exec.php" method="post">
        <div class='form-row'> <input type="date" name="date" placeholder="Дата" required></div>
        <div class="form-row"><textarea name="comment" placeholder="Комментарий"></textarea></div>
        <div class="form-row"><button>Отправить данные</button></div>
      </form><br> <a href='/admin/'> Список панелей администрирования </a>
    </div>
  </div>
</body>
</html>
