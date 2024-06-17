<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta http-equiv="robots" content="noindex">
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html';?>
  <title>Администрирование - текущая погода</title>
</head>
<body>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
  <div id='containter'>
    <div id='content'> 
      <h3>Администрирование - текущая погода</h3>
      <form action="exec.php" method="post">
        <fieldset>
          
          <label for="date">Дата</label> 
          <input type="date" name="date" value="<?=date('Y-m-d')?>" required>
          
          <label for="icon">Иконка</label>
          <select name="icon" required>
            <?
            $sql = "SELECT * FROM `ugmslnr`.`icons` order by `id`";
            $arr = get_arr($conn, $sql);
            foreach($arr as $row){ ?>
              <option value="<?=$row['id']?>"><?=$row['name']?></option>
            <? } ?>
          </select>
          
          <label for="temperature">Температура</label>          
          <input type="text" id="temperature" name="temperature" required>
          
          <label for="wind_speed">Скорость ветра</label>
          <input type="text" id="wind_speed" name="wind_speed" required>
          
          <label for="humidity">Влажность</label>          
          <input type="number" id="humidity" name="humidity" required>
          
          <label for="pressure">Давление</label>          
          <input type="number" id="pressure" name="pressure" required>

          <button id='submit-button'>Отправить данные</button>
        </fieldset>
      </form>
      <span><a href='/admin/'> Список панелей администрирования </a></span>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
  </div>
</div>
<? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>
</html>