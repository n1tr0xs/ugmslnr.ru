<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/styles.html'; ?>
  <link rel="stylesheet" href="/css/admin.css">
  <title>Администрирование - прогноз погоды - текст</title>
</head>
<body>
  <div id='containter'>
    <div id='content'> 
      <form action="/admin/weather_forecast_text_exec.php" method="post">
        <div class="form-row"> 
          <label for="date">Дата</label> 
          <input type="date" name="date" value="<? echo date('Y-m-d'); ?>">
        </div>
        <div class='form-row'>
          <textarea cols="50" rows="5" name="desc_city" placeholder="Описание для города"></textarea>
        </div>
        <div class='form-row'>
          <textarea cols="50" rows="5" name="desc_region" placeholder="Описание для области"></textarea>
        </div>
        <div class='form-row'><input type="password" name="password" placeholder="Пароль" required></div>
        <div class="form-row">
          <button id='submit-button'>Отправить данные</button>
        </div>
      </form><br> <a href='/admin/index.html'> Список панелей администрирования </a>
    </div>
  </div>
</body>
</html>
