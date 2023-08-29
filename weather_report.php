<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/css/master.css">
  <title>Погода</title>
</head>
<body>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
  <div id='containter'>
    <div id='content'>
      <h3> Прогноз погоды </h3>
      <div id='forecast'>
        <table>
          <?
          $sql = "
          select date from (
          select distinct(date) date
          from `ugmslnr`.`weather_forecast_table` 
          order by `date` desc 
          limit 3
          ) a
          order by date asc
          ";
          $days = get_arr($conn, $sql);
          ?>
          <tr>
            <? foreach ($days as $row): ?>
              <td colspan="2"><? echo date("d", strtotime($row['date'])); ?></td>
            <? endforeach; ?>
          </tr>
          <tr>
            <td>ночь</td>
            <td>день</td>
            <td>ночь</td>
            <td>день</td>
            <td>ночь</td>
            <td>день</td>
          </tr>
          <? 
          $sql = "
          select * from (
            select 
              w.date date, 
              w.day_part day_part, 
              w.temperature temperature,
              w.wind_speed wind_speed,
              i.url icon
            from 
              `ugmslnr`.`weather_forecast_table` w
              join `ugmslnr`.`icons` i on (w.icon=i.id)
              join `ugmslnr`.`wind_directions` wd on (w.wind_direction=wd.id)
            order by `date` desc 
            limit 6
          ) a
          order by date asc
          ";
          $data = get_arr($conn, $sql); 
          ?>
          <tr>
            <? foreach($data as $row): ?>
              <td class="text-center"> <img width="75px" height="75px" class="no-border" src="<? echo $row['icon']; ?>"></td>
            <? endforeach; ?>
          </tr>
          <tr>
            <? foreach ($data as $row): ?>
              <td><? echo $row['wind_direction']."<br>".$row['temperature']." м/с"; ?> </td>
            <? endforeach; ?>
          </tr>
          <tr>
            <? foreach ($data as $row): ?>
              <td><? echo $row['wind_speed'].' &deg;C'; ?> 
            <? endforeach; ?>
          </tr>
        </table>
        <?
        $sql = "
        select 
          date, desc_city, desc_region 
        from 
          `ugmslnr`.`weather_forecast_text` 
        order by date desc
        limit 3
        ";
        $data = get_arr($conn, $sql);
        ?>
        <? foreach($data as $row): ?>
          <p class="day"> <? echo $row['date']; ?> </p>
          <p class="region"> По городу Луганск </p>
          <p class="description"> <? echo $row['desc_city']; ?> </p>
          <p class="region"> По территории Луганской Народной Республики </p>
          <p class="description"> <? echo $row['desc_region']; ?> </p>
        <? endforeach; ?>
      </div>
    </div>
    <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php'; ?>
    <span style="display: block; clear: both;"></span>
  </div>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>
