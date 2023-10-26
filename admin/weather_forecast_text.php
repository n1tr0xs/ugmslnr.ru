<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta http-equiv="robots" content="noindex">
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.html';?>
  <title>Администрирование - прогноз погоды - текст</title>
</head>
<body>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
  <div id='containter'>
    <div id='content'> 
      <h3>Администрирование - прогноз погоды - текст</h3>
      <form action="/admin/weather_forecast_text_exec.php" method="post">
        <fieldset>
          <label for="date">Дата</label> 
          <input type="date" name="date" value="<?=date('Y-m-d')?>" required>
          
          <label>Описание для города</label>
          <textarea cols="50" rows="5" name="desc_city" placeholder="Описание для города" required></textarea>
          
          
          <label>Описание для области</label>
          <textarea cols="50" rows="5" name="desc_region" placeholder="Описание для области" required></textarea>
          
          <label>Пароль</label>
          <input type="password" name="password" placeholder="Пароль" required>
          
          <button id='submit-button'>Отправить данные</button>
        </fieldset>
      </form>
      <span><a href='/admin/index.php'> Список панелей администрирования </a></span>
    </div>
    <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php'; ?>
  </div>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>
