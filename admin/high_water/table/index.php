<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta http-equiv="robots" content="noindex">
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html';?>
  <title> Администрирование -  таблица Весеннего половодья </title>
</head>
<body>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <h3> Администрирование - таблица Весеннего половодья </h3>
      <form action="exec.php" method="post">
        <fieldset style="grid-template-columns: auto auto; align-items: anchor-center;">
          <label>Пост</label>
          <select name="high_water_post">
              <?
              $sql = "
              select id, water_body_name, water_post_name
              from `ugmslnr`.`high_water_posts`
              order by id
              ";
              $rows = get_arr($conn, $sql);
              ?>
              <? foreach($rows as $row) { ?>
                <option value="<?=$row['id'];?>">  <?=$row['water_body_name'];?>, <?=$row['water_post_name'];?></option>
              <? } ?>
          </select>
          
          <label>Фактическая обстановка</label>
          <select name="current_status">
          <?
          $sql = "
          select status, color, description
          from `ugmslnr`.`high_water_statuses`
          ";
          $rows = get_arr($conn, $sql);
          ?>
          <? foreach($rows as $row) { ?>
              <option value="<?=$row['status'];?>" style="background-color: <?=$row['color'];?>; color: black;"> <?=$row['description'];?> </option>
          <? } ?>
          </select>
          
          
          <label>Прогноз на трое суток</label>
          <textarea name="forecast_description" cols="80" rows="5" required></textarea>
          
          <label>Статус прогноза</label>
          <select name="forecast_status">
          <?
          $sql = "
          select status, color, description
          from `ugmslnr`.`high_water_statuses`
          ";
          $rows = get_arr($conn, $sql);
          ?>
          <? foreach($rows as $row) { ?>
              <option value="<?=$row['status'];?>" style="background-color: <?=$row['color'];?>; color: black;"> <?=$row['description'];?> </option>
          <? } ?>
          </select>
          
          <label>Дата</label>
          <input type='date' name="date" value="<?=date('Y.m.d');?>"/>
          
          <button>Отправить данные</button>
        </fieldset>
      </form>
      <span><a href='/admin/'> Список панелей администрирования </a></span>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>
</html>
