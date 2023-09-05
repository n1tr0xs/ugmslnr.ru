<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/styles.html';?>
  
  <title>Администрирование</title>
</head>
<body>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <ul>
        <li><a href='/admin/awc.php'>Неблогаприятные метеорологические условия (НМУ)</a></li>
        <li><a href='/admin/comments.php'>Комментарии синоптика</a></li>
        <li><a href='/admin/fire_danger_pic.php'>Пожароопасность - картинка</a></li>
        <li><a href='/admin/fire_forecast.php'>Пожароопасность</a></li>
        <li><a href='/admin/pfatp.php'>Вероятностный прогноз температуры воздуха и осадков</a></li>
        <li><a href='/admin/pollution.php'>Загрязнение окружающей среды</a></li>
        <li><a href='/admin/radiation.php'>Радиация</a></li>
        <li><a href='/admin/warnings.php'>Предупреждения</a></li>
        <li><a href='/admin/weather_current.php'>Текущая погода</a></li>
        <li><a href='/admin/weather_forecast_table.php'>Прогноз погоды - таблица</a></li>
        <li><a href='/admin/weather_forecast_text.php'>Прогноз погоды - текст</a></li>
      </ul>
    </div>
    <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php'; ?>
  </div>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>
