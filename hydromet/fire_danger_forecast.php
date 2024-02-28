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
      <h2>Прогноз пожароопасности</h2>
      <div class='text-center'>
        <img src="/updatable/fire_danger.png" alt="Пожарная опасность" class='no-border' width="700px">
      </div>
      <div>
        <?
        $sql = "
        select `start`, `end`, `desc`
        from `ugmslnr`.`fire_forecast`
        order by `start` desc
        limit 1
        ";
        $data = get_arr($conn, $sql);
        foreach ($data as $row){ ?>
          <p style='font-weight: bold;'> Прогноз на <?=format_date($row['start'])?> - <?=format_date($row['end'])?></p>
          <p><?=$row['desc']?></p>
        <?}?>
      </div>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>
</html>
