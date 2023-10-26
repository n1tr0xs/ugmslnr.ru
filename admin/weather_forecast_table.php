<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta http-equiv="robots" content="noindex">
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.html';?>
  <title>Администрирование - прогноз погоды - таблица</title>
</head>
<body>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
  <div id='containter'>
    <div id='content'> 
      <h3>Администрирование - прогноз погоды - таблица</h3>
      <form action="/admin/weather_forecast_table_exec.php" method="post">
        <fieldset>

          <label for="date">Дата</label> 
          <input type="date" name="date" value="<?=date('Y-m-d')?>" required>

          <label for="day_part">Часть дня</label>
          <select name="day_part" required>
            <?
            $sql = "SELECT * FROM `ugmslnr`.`day_parts` order by `id`";
            $arr = get_arr($conn, $sql);
            foreach($arr as $row){ ?>
              <option value="<?=$row['id']?>"><?=$row['name']?></option>
            <? } ?>
          </select>

          <label for="icon">Иконка</label>
          <select name="icon" required>
            <?
            $sql = "SELECT * FROM `ugmslnr`.`icons` order by `id`";
            $arr = get_arr($conn, $sql);
            foreach($arr as $row){ ?>
              <option value="<?=$row['id']?>"><?=$row['name']?></option>
            <? } ?>
          </select>

          <label for="wind_direction">Направление ветра</label>
          <select name="wind_direction" required>
            <?
            $sql = "SELECT * FROM `ugmslnr`.`wind_directions` order by `id`";
            $arr = get_arr($conn, $sql);
            foreach($arr as $row){ ?>
              <option value="<?=$row['id']?>"><?=$row['direction']?></option>
            <? } ?>
          </select>

          <label>Скорость ветра</label>
          <input type="text" id="wind_speed" name="wind_speed" required>

          <label>Температура</label>          
          <input type="text" id="temperature" name="temperature" required>

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
