<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/css/master.css">
  <link rel="stylesheet" href="/css/admin.css">
  <title>Администрирование - прогноз погоды</title>
</head>
<body>
  <div id='containter'>
    <div id='content'>
      <form action="/admin_db/weather_forecast_exec.php" method="post">
        <div class="form-row"> 
          <label for="date">Дата</label> 
          <input type="date" name="date">
        </div>
        <div class="form-row"> 
          <label for="day_part">Часть дня</label>
          <select name="day_part" required>

          </select>
        </div>
        <div class="form-row">
          <label for="icon">Иконка</label>
          <select name="icon" required>

          </select>
        </div>
        <div class="form-row">
          <label for="wind_direction">Направление ветра</label>
          <select name="wind_direction" required>

          </select>
        </div>
        <div class="form-row"> 
          <input type="number" name="wind_min" placeholder="">
        </div>
        <div class="form-row"> 
          <input type="number" name="wind_max" placeholder="">
        </div>
        <div class="form-row"> 
          <input type="number" name="temp_min" placeholder="">
        </div>
        <div class="form-row"> 
          <input type="number" name="temp_max" placeholder="">
        </div>
        <div class="form-row">
          <button>Отправить данные</button>
        </div>
      </form><br> <a href='/admin_db/index.html'> Список панелей администрирования </a>
    </div>
  </div>
</body>
</html>
