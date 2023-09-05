<!-- TODO -->
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
      <h3> Администрирование - пожароопасность</h3>
      <form action="/admin/fire_forecast_exec.php" method="post">
        <fieldset>

          <label>Дата</label>
          <input type="text" name="date1" placeholder="Дата" required>
          
          <label>Описание</label>
          <textarea rows="5" cols="50" name="desc" placeholder="Описание" required></textarea>
          
          <label>Дата</label>
          <input type="text" name="date2" placeholder="Дата" required>
          
          <label>Описание</label>
          <textarea rows="5" cols="50" name="desc" placeholder="Описание" required></textarea>
          
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
