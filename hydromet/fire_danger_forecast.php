<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta name="description" content="Прогноз пожароопасности">
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.html'; ?>
  <title>Прогноз пожароопасности</title>
</head>
<body>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <h3>Прогноз пожароопасности</h3>
      <div class='text-center'>
        <img src="/updatable/fire_danger.png" alt="Пожарная опасность" class='no-border' width="700px">
      </div>
      <div>
        <?
        $sql = "
        select `start`, `end`, `desc` from (
          select `start`, `end`, `desc`
          from `ugmslnr`.`fire_forecast`
          order by `start` desc
          limit 2
        ) a
        order by `start` asc
        ";
        $data = get_arr($conn, $sql);
        foreach ($data as $row){ ?>
          <?if($row['start'] != $row['end']){?>
            <p style='font-weight: bold;'> Прогноз на <?=format_date($row['start'])?> - <?=format_date($row['end'])?></p>
          <?}else{?>
            <p style='font-weight: bold;'> Прогноз на <?=format_date($row['start'])?></p>
          <?}?>
          <p><?=$row['desc']?></p>
        <?}?>
      </div>
    </div>
    <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php'; ?>
  </div>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>
