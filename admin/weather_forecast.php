<? include $_SERVER['DOCUMENT_ROOT'] . '/includes/funcs.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/css/master.css">
  <link rel="stylesheet" href="/css/admin.css">
  <script type="text/javascript">
    function check(){
      var button = document.getElementById('submit-button');
    
      if (parseInt(document.getElementById('wind_min').value) > parseInt(document.getElementById('wind_max').value)) {
        button.innerText = 'Минимальная скорость воздуха не может быть больше максимальной!';
        button.disabled = true;
        return false;
      }      

      if (parseInt(document.getElementById('temp_min').value) > parseInt(document.getElementById('temp_max').value)) {
        button.innerText = 'Минимальная температура не может быть больше максимальной!'; 
        button.disabled = true;
        return false;
      }
      button.innerText = 'Отправить данные';
      button.disabled = false;
      return true;
    }
  </script>
  <title>Администрирование - прогноз погоды - таблица</title>
</head>
<? $conn = connect('sinop', 'sinop'); ?>
<body>
  <div id='containter'>
    <div id='content'> 
      <form action="/admin/weather_forecast_exec.php" method="post">
        <div class="form-row"> 
          <label for="date">Дата</label> 
          <input type="date" name="date">
        </div>
        <div class="form-row"> 
          <label for="day_part">Часть дня</label>
          <select name="day_part" required>
          <?
            $sql = "SELECT * FROM `ugmslnr`.`day_parts` order by `id`";
            $arr = get_arr($conn, $sql);
            foreach($arr as $row): ?>
              <option value="<? echo $row['id']; ?>"><? echo $row['name']; ?></option>
            <? endforeach; ?>
          </select>
        </div>
        <div class="form-row">
          <label for="icon">Иконка</label>
          <select name="icon" required>
            <?
            $sql = "SELECT * FROM `ugmslnr`.`icons` order by `id`";
            $arr = get_arr($conn, $sql);
            foreach($arr as $row): ?>
              <option value="<? echo $row['id']; ?>"><? echo $row['name']; ?></option>
            <? endforeach; ?>
          </select>
        </div>
        <div class="form-row">
          <label for="wind_direction">Направление ветра</label>
          <select name="wind_direction" required>
            <?
            $sql = "SELECT * FROM `ugmslnr`.`wind_directions` order by `id`";
            $arr = get_arr($conn, $sql);
            foreach($arr as $row): ?>
              <option value="<? echo $row['id']; ?>"><? echo $row['direction']; ?></option>
            <? endforeach; ?>
          </select>
        </div>
        <div class="form-row"> 
          <input type="number" id="wind_min" name="wind_min" placeholder="Минимальная скорость ветра" oninput="check();" value="0" required>
        </div>
        <div class="form-row"> 
          <input type="number" id="wind_max" name="wind_max" placeholder="Максимальная скорость ветра" oninput="check();" value="0" required>
        </div>
        <div class="form-row"> 
          <input type="number" id="temp_min" name="temp_min" placeholder="Минимальная температура" oninput="check();" value="0" required>
        </div>
        <div class="form-row"> 
          <input type="number" id="temp_max" name="temp_max" placeholder="Максимальная температура" oninput="check();" value="0" required>
        </div>
        <div class='form-row'>
          <textarea cols="50" rows="5" name="desc_city" placeholder="Описание для города"></textarea>
        </div>
        <div class='form-row'>
          <textarea cols="50" rows="5" name="desc_region" placeholder="Описание для области"></textarea>
        </div>
        <div class="form-row">
          <button id='submit-button' disabled>Отправить данные</button>
        </div>
      </form><br> <a href='/admin/index.html'> Список панелей администрирования </a>
    </div>
  </div>
</body>
</html>
