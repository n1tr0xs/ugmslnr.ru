<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/styles.html'; ?>
  <title>Информация о неблагоприятных метеорологических условиях (НМУ)</title>
</head>
<body>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <h3> Информация о неблагоприятных метеорологических условиях (НМУ) </h3>
      <p>
        К неблагоприятным метеорологическим условиям (НМУ) относятся условия, способствующие накоплению промышленных и автомобильных выбросов в приземном слое атмосферного воздуха. Для снижения уровня загрязнения в период возникновения НМУ на предприятия передаются информационные сообщения о возникновении НМУ, что соответствует режиму работ по регулированию выбросов.
      </p>
      <p><b>Прогноз НМУ:</b></p>
      <?
      $sql = "
      select `date`, `desc`
      from `ugmslnr`.`awc`
      order by `date` desc
      limit 1
      ";
      $row = get_row($conn, $sql);
      $date = date("d.m Y", strtotime($row['date']));
      $desc = $row['desc'];
      ?>
      <p>Прогноз уровня загрязнения атмосферного воздуха в г. Луганске и городах Луганской Народной Республики на <?=$date?> года</p>
      <p class='description'> <?=$desc?> </p>
    </div>
    <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php'; ?>
  </div>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>
