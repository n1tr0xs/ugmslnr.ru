<? include $_SERVER['DOCUMENT_ROOT'] . '/includes/funcs.php'; ?>
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
        <?
          $conn = new mysqli('ugmslnr', 'visiter', '');
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
        ?>
        <table>
          <?
            $sql = "
              select date from (
                select distinct(date) date
                from 
                 `ugmslnr`.`weather_table_forecast` 
                order by 
                 `date` desc 
                limit 3
              ) a
              order by 
                date asc
            ";
            $arr = get_arr($conn, $sql);
          ?>
          <tr>
            <? foreach ($arr as $row): ?>
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
                i.url icon, 
                w.temp_min temp_min, 
                w.temp_max temp_max, 
                wd.direction wind_direction,
                w.wind_speed_min wind_min,
                w.wind_speed_max wind_max
              from 
               `ugmslnr`.`weather_table_forecast` w
               join `ugmslnr`.`icons` i on (w.icon=i.id)
               join `ugmslnr`.`wind_directions` wd on (w.wind_direction=wd.id)
              order by 
               `date` desc 
              limit 6
            ) a
            order by 
              date asc
            ";
            $arr = get_arr($conn, $sql); 
          ?>
          <tr>
            <? foreach($arr as $row): ?>
            <td class="text-center"> <img width="75px" height="75px" class="no-border" src="<? echo $row['icon']; ?>"></td>
            <? endforeach; ?>
          </tr>
          <tr>
            <? foreach ($arr as $row): ?>
            <td><? echo $row['wind_direction']."<br>".$row['wind_min']."-".$row['wind_max']." м/с"; ?> </td>
            <? endforeach; ?>
          </tr>
          <tr>
            <? foreach ($arr as $row): ?>
              <td><? echo $row['temp_min']." - ".$row['temp_max'].' &deg;C'; ?> 
            <? endforeach; ?>
          </tr>
        </table>
      </div>
    </div>
    <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php'; ?>
    <span style="display: block; clear: both;"></span>
  </div>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>
