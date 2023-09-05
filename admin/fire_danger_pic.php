<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/styles.html';?>
  <title>Администрирование - пожароопасность</title>
</head>
<body>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <form action="/admin/fire_danger_pic_exec.php" method="post" enctype="multipart/form-data">
        <fieldset>
        
        <div class='file-drop-area span2'>
          <span class="fake-btn">Выберите файл</span>
          <span class="file-msg" id="file-msg">или перетащите файл сюда</span>
          <input type="file" name="fileToUpload" class="file-input" id="file-input" required>
        </div>
        
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Пароль" required>
        
        <button type="submit">Отправить данные</button>
      </fieldset>
      </form>
      <span><a href='/admin/'> Список панелей администрирования </a></span>
    </div>
    <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php'; ?>
  </div>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>
