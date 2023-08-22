<?
function get_arr($conn, $sql){
  $resp = $conn->query($sql);
  $arr = $resp->fetch_all(MYSQLI_ASSOC);
  return $arr;
}
function print_table($arr){
  echo "<table>";
  foreach ($arr as $row) {
    echo "<tr>";
    foreach ($row as $key => $value)
      echo "<td>{$key}</td><td>{$value}</td>";
    echo "</tr>";
  }
  echo "</table>";
}
?>
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
          // include $_SERVER['DOCUMENT_ROOT'] . '/updatable/forecast.html'; 
        ?>
        <?
          $conn = new mysqli('ugmslnr', 'visiter', '');
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
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
        <table>
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
              select w.date date
              from 
               `ugmslnr`.`weather_table_forecast` w
               join `ugmslnr`.`icons` i on (w.id=i.id)
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
            <td> <? echo $arr[0]['icon']; ?>
          </tr>
        </table>

        <?  $arr = get_arr($conn, 'select * from `ugmslnr`.`weather_table_forecast` order by `date` desc, `day_part` asc limit 6');
        
        ?>
      </div>
    </div>
    <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php'; ?>
    <span style="display: block; clear: both;"></span>
  </div>
  <? include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>
