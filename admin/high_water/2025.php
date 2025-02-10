<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/head.html';?>
    <link rel="canonical" href="https://ugmslnr.ru/"/>
    <meta name="description" content="Весеннее половодье и дождевые паводки 2025">
    <title>Весеннее половодье и дождевые паводки 2025</title>
</head>
<body>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <h3> Весеннее половодье и дождевые паводки 2025 </h3>

      <div>
        <a href="preliminary-assessment.php"> Предварительный прогноз </a>
      </div>

      <!-- Текущее состояние -->
      <?
      $sql = "
      select id, start_date, end_date, description
      from `ugmslnr`.`high_water_current` hwc
      where `start_date` >= '01.01.2025' and `end_date` <= '31.12.2025'
      order by `id` desc
      limit 1
      ";
      $row = get_row($conn, $sql);
      ?>
      <? if ($row) { ?>
        <?
        $start_date = date("d.m.Y", strtotime($row['start_date']));
        $end_date = date("d.m.Y", strtotime($row['end_date']));
        ?>
        <div>
          <span> Текущая обстановка (с <?=$start_date;?> по <?=$end_date;?>): </span>
          <p> <?=$row['description'];?> </p>
        </div>
      <? } ?>

      <!-- Предупреждения -->
      <?
      $now = date('Y-m-d');
      $sql = "
      select id, start_date, end_date, description
      from `ugmslnr`.`high_water_warning`
      where `start_date` >= '{$now}' or `end_date` >= '{$now}'
      order by `id` desc
      ";
      $data = get_arr($conn, $sql);
      foreach ($data as $row) { ?>
        <?
        $start_date = date("d.m.Y", strtotime($row['start_date']));
        $end_date = date("d.m.Y", strtotime($row['end_date']));
        ?>
        <div>
          <span> Предупреждение (с <?=$start_date;?> по <?=$end_date;?>): </span>
          <p> <?=$row['description'];?> </p>
        </div>
      <? } ?>

      <!--- Светофор -->     

    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>
</html>
