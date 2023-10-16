<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta http-equiv="robots" content="noindex">
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.html';?>
  <title>Администрирование - пожароопасность</title>
</head>
<body>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <h3> Администрирование - пожароопасность</h3>
      <form action="/admin/fire_forecast_exec.php" method="post">
        <fieldset>

          <label>Начало</label>
          <input type="date" name="start" value="<?=date('Y-m-d')?>" placeholder="Дата" required>

          <label>Конец</label>
          <input type="date" name="end" value="<?=date('Y-m-d')?>" placeholder="Дата" required>
          
          <label>Описание</label>
          <textarea rows="5" cols="50" name="desc" placeholder="Описание" required></textarea>
          
          <label>Пароль</label>
          <input type="password" name="password" placeholder="Пароль" required>
          
          <button>Отправить данные</button>
        </fieldset>
      </form>
      <span><a href='/admin/'> Список панелей администрирования </a></span>
    </div>
    <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php'; ?>
  </div>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>
