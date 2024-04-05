<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta name="description" content="Прогноз пожароопасности">
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html'; ?>
  <title>Прогноз пожароопасности</title>
</head>
<body>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <?
      $sql = "
      select `start`, `end`, `desc`
      from `ugmslnr`.`fire_forecast`
      order by `id` desc
      limit 1
      ";
      $row = get_row($conn, $sql);
      ?>
      <? if($row) { ?>
      <h2>Карта пожароопасности на <?=format_date(date('Y-m-d', strtotime(row['start']. ' -1 days')))?></h2>
      <div class='text-center'>
        <img src="/updatable/fire_danger.png" alt="Карта пожароопасности" width="550px" onerror="this.style.display='none';">
      </div>
      <h2>Прогноз пожароопасности</h2>
      <div>
        <p style='font-weight: bold;'> Прогноз на <?=format_date($row['start'])?> - <?=format_date($row['end'])?></p>
        <p><?=$row['desc']?></p>
      </div>
      <? } else { ?>
      <h3>Нет данных о пожароопасности</h3>
      <? } ?>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>
</html>
