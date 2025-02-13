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
      <h1 style="color: red;"> Страница находится в разработке. Информация может быть неполной / отличаться от реальной </h1>
      <h3> Весеннее половодье и дождевые паводки 2025 </h3>

      <div>
        <a href="preliminary-assessment.php"> Предварительная оценка развития весеннего половодья на реках Луганской Народной Республики в 2025 году </a>
      </div>
      
      <p></p>

      <!-- Текущее состояние -->
      <? if(file_exists($_SERVER['DOCUMENT_ROOT'] . "/updatable/high_water/weekly.pdf")) { ?>
        <a href="/updatable/high_water/weekly.pdf" target="_blank"> Недельный прогноз гидрологической обстановки </a>
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
      <? if (count($data)) { ?>
        <h3> Предупреждения </h3>
      <? } ?>
      <? foreach ($data as $row) { ?>
        <?
        $start_date = date("d.m.Y", strtotime($row['start_date']));
        $end_date = date("d.m.Y", strtotime($row['end_date']));
        ?>
        <div>
          <span> <b> С <?=$start_date;?> по <?=$end_date;?>: </b> </span>
          <p> <?=$row['description'];?> </p>
        </div>
      <? } ?>

      <!--- Светофор / Таблица -->     
      <table>
          <?
          $sql = "
          select status, color
          from `ugmslnr`.`high_water_statuses`
          ";
          $status_color = get_arr($conn, $sql);
          $COLOR_BY_STATUS = [];
          foreach($status_color as $row)
              $COLOR_BY_STATUS[intval($row['status'])] = $row['color'];
          ?>
          <caption>
              <?
              $sql = "
              select max(last_update) lu
              from `ugmslnr`.`high_water_posts`
              ";
              $row = get_row($conn, $sql);
              $last_update = date("d.m.Y H:i", strtotime("+9 hours", strtotime($row['lu'])));
              ?>
              Опасные и неблагоприятные явления на реках по территории ответственности ФГБУ&nbsp;«УГМС&nbsp;по&nbsp;ЛНР» по состоянию на <?=$last_update;?> МСК
          </caption>
          <thead>
              <tr>
                <td rowspan="2">Субъект РФ</td>
                <td rowspan="2">Водные объекты</td>
                <td rowspan="2">Пункт</td>
                <td colspan="2">Гидрологическая обстановка</td>
              </tr>
              <tr>
                <td>Факт</td>  
                <td>Прогноз на трое суток</td>  
              </tr>
          </thead>
          <tbody style="color: black;">
              <?
              $sql = "
              select id, water_body_name, water_post_name, hws.description current_description, forecast_description, last_update, hwp.status
              from 
                `ugmslnr`.`high_water_posts` hwp
                join `ugmslnr`.`high_water_statuses` hws on (hwp.status = hws.status)
              order by `id` asc
              ";
              $rows = get_arr($conn, $sql);
              $is_first = true; 
              ?>
              <? foreach($rows as $row) { ?>
                <tr>
                    <? if($is_first) { ?>
                        <?
                        $sql = "
                        select max(status) ms
                        from `ugmslnr`.`high_water_posts`
                        ";
                        $response = get_row($conn, $sql);
                        $max_color = $COLOR_BY_STATUS[$response['ms']];
                        ?>
                        <td rowspan="10" style="vertical-align: middle; background-color: <?=$max_color;?>"> Луганская Народная Республика </td> 
                    <? $is_first = false; } ?>
                    <? $color = $COLOR_BY_STATUS[$row['status']]; ?>
                    <td style="background-color: <?=$color;?>"><?=$row['water_body_name'];?></td>
                    <td style="background-color: <?=$color;?>"><?=$row['water_post_name'];?></td>
                    <td style="background-color: <?=$color;?>"><?=$row['current_description'];?></td>
                    <td style="background-color: <?=$color;?>"><?=$row['forecast_description'];?></td>
                </tr>
              <? } ?>
          </tbody>
      </table>
      <table style="width: 60%">
          <?
          $sql = "
          SELECT status, color, description
          FROM `high_water_statuses`
          ";
          $rows = get_arr($conn, $sql);
          ?>
          <? foreach($rows as $row) { ?>
          <tr>
              <td style="background-color: <?=$row['color'];?>; width: 20%"></td>
              <td style="min-width: content; width: 80%;"><?=$row['description'];?></td>
          </tr>
          <? } ?>
      </table>
    </div>
    <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/aside.php'; ?>
  </div>
  <? require $_SERVER['DOCUMENT_ROOT'] . '/requires/footer.php'; ?>
</body>
</html>
