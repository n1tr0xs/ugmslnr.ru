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
      <h1> Страница находится в разработке. Информация может быть неполной / отличаться от реальной </h1>
      <h3> Весеннее половодье и дождевые паводки 2025 </h3>

      <div>
        <a href="preliminary-assessment.php"> Предварительная оценка развития весеннего половодь яна реках Луганской Народной Республики в 2025 году </a>
      </div>

      <!-- Текущее состояние -->
      <?
      $sql = "
      select id, start_date, end_date, description
      from `ugmslnr`.`high_water_current` hwc
      where `start_date` >= '01.01.2025' or `end_date` < '01.01.2026'
      order by `id` desc
      limit 1
      ";
      $row = get_row($conn, $sql); ?>
      <? if ($row) { ?>
        <?
        $start_date = date("d.m.Y", strtotime($row['start_date']));
        $end_date = date("d.m.Y", strtotime($row['end_date']));
        ?>
        <div>
          <h3> Обстановка на <?=$start_date;?> - <?=$end_date;?> </h3>
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
      $data = get_arr($conn, $sql); ?>
      <h3> Предупреждения </h3>
      <? foreach ($data as $row) { ?>
        <?
        $start_date = date("d.m.Y", strtotime($row['start_date']));
        $end_date = date("d.m.Y", strtotime($row['end_date']));
        ?>
        <div>
          <span> С <?=$start_date;?> по <?=$end_date;?>: </span>
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
