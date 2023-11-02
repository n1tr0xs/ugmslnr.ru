<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta name="description" content="Информация о неблагоприятных метеорологических условиях (НМУ)">
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html'; ?>
  <title>Информация о неблагоприятных метеорологических условиях (НМУ)</title>
</head>
<body>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
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
      <p>Информация о неблагоприятных метеорологических условиях в г. Луганске и городах Луганской Народной Республики на <?=$date?> года</p>
      <p class='description'> <?=$desc?> </p>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>
</html>
