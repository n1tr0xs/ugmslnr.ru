<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/css/master.css">
  <link rel="stylesheet" href="/css/admin.css">
  <title>Администрирование - гидрологическая карта</title>
</head>
<body>
  <div id='containter'>
    <div id='content'>
      <form action="/admin/fire_danger_pic_exec.php" method="post" enctype="multipart/form-data">
        <div class='form-row file-drop-area'>
          <span class="fake-btn">Выберите файл</span>
          <span class="file-msg">или перетащите файл сюда</span>
          <input type="file" name="fileToUpload" class="file-input">
        </div>
        <div class='form-row'><label for="password">Пароль</label><input type="password" name="password" placeholder="Пароль" required></div>
        <div class='form-row'><button type="submit">Отправить данные</button></div>
      </form><br> <a href='/admin/'> Список панелей администрирования </a>
    </div>
  </div>
</body>
</html>
